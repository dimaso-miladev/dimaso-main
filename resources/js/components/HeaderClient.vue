<template>
  <div>
    <header id="site-header" class="header">
      <div id="header-wrap" :class="{ 'fixed-header': isHeaderFixed }">
        <div class="container-fluid">
          <div class="row">
            <div class="col">
              <nav class="ht-navigation">
                <a class="navbar-brand logo m-0" :href="homeUrl">
                  <img class="img-fluid" :src="logoUrl" :alt="$t('header.logoAlt')" />
                </a>
                <div class="ht-mobile-menu-bg" :class="{ 'menu-active': isMenuOpen }"></div>
                <div class="navigation-top">
                  <div class="main-nav" :class="{ 'menu-active': isMenuOpen }">
                    <div class="closepanel" @click="toggleMobileMenu">
                      <i class="bi bi-x-lg"></i>
                    </div>
                    <ul id="menu-primary-menu" class="menu">
                      <!-- Vòng lặp cho các mục menu -->
                      <li
                        v-for="item in menuItems"
                        :key="item.key"
                        :class="['menu-item', { 'current-menu-item': item.current, 'menu-item-has-children': item.children }]"
                      >
                        <a :href="item.href" :aria-current="item.current ? 'page' : null">{{ item.text }}</a>
                        <!-- KIỂM TRA VÀ HIỂN THỊ MENU CON (SUB-MENU) -->
                        <ul class="sub-menu" v-if="item.children && item.children.length > 0">
                          <li v-for="child in item.children" :key="child.key" class="menu-item">
                            <a :href="child.href">{{ child.text }}</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  <button id="menu-toggle" class="nav-menu-toggle ht-toggler" type="button" @click="toggleMobileMenu">
                    <i class="bi bi-list"></i>
                  </button>
                </div>
                <div class="right-nav align-items-center d-flex justify-content-end">
                  <locale-dropdown />
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>
  </div>
</template>

<script>
import LocaleDropdown from './LocaleDropdown'
export default {
  components: {
    LocaleDropdown
  },

  data() {
    return {
      isMenuOpen: false,
      logoUrl: '/assets/images/dimaso_main_logo.webp',
      isHeaderFixed: false, 
    };
  },
  computed: {
    homeUrl() {
        return window.config.siteUrl || '/';
    },
    menuItems() {
      const siteUrl = this.homeUrl;

      return [
        { key: 'home', text: this.$t('header.nav.home'), href: `${siteUrl}/`, current: true },
        { key: 'about', text: this.$t('header.nav.about'), href: `${siteUrl}/about-us/`, current: false },
        { key: 'services', text: this.$t('header.nav.services'), href: `${siteUrl}/service/`, current: false },
        { key: 'packages', text: this.$t('header.nav.packages'), href: `${siteUrl}/packages/`, current: false },
        { key: 'portfolio', text: this.$t('header.nav.portfolio'), href: `${siteUrl}/portfolios/`, current: false },
                { key: 'blogs', text: this.$t('header.nav.blogs'), href: `${siteUrl}/blogs/`, current: false },
        { key: 'contact', text: this.$t('header.nav.contact'), href: `${siteUrl}/contact-us/`, current: false },
        {
          key: 'tools',
          text: this.$t('header.nav.tools'),
          href: '#',
          current: false,
          children: [
            { key: 'get-2fa', text: this.$t('header.nav.get2fa'), href: `${siteUrl}/tools/get-2fa/`, current: false },
            { key: 'check-live', text: this.$t('header.nav.checklive'), href: `${siteUrl}/tools/check-live/`, current: false },
          ]
        },
        // {
        //   key: 'shop',
        //   text: this.$t('header.nav.shop'), 
        //   href: '#',
        //   current: false,
        //   children: [
        //     { key: 'accounts', text: this.$t('header.nav.accounts'), href: `${siteUrl}/shop/accounts/`, current: false },
        //     { key: 'marketing-tools', text: this.$t('header.nav.marketing_tools'), href: `${siteUrl}/shop/marketing-tools/`, current: false },
        //   ]
        // },
      ];
    }
  },
  methods: {
    toggleMobileMenu() {
      this.isMenuOpen = !this.isMenuOpen;
    },
    handleScroll() {
      if (window.scrollY > 100) {
        this.isHeaderFixed = true;
      } else {
        this.isHeaderFixed = false;
      }
    },
  },

  mounted() {
    window.addEventListener('scroll', this.handleScroll);
  },
  beforeDestroy() {
    window.removeEventListener('scroll', this.handleScroll);
  },
};
</script>
<style scoped>
/* Ẩn menu con theo mặc định */
.menu-item-has-children .sub-menu {
  display: none;
  position: absolute; /* Đưa menu con ra khỏi luồng trang */
  background-color: #fff; /* Màu nền cho menu con */
  padding: 10px 0;
  list-style: none;
  min-width: 200px; /* Chiều rộng tối thiểu */
  box-shadow: 0 4px 8px rgba(0,0,0,0.1);
  z-index: 1000;
}

/* Hiển thị menu con khi di chuột vào mục cha */
.menu-item-has-children:hover > .sub-menu {
  display: block;
}

/* Định dạng cho các mục trong menu con */
.sub-menu .menu-item a {
  padding: 8px 20px;
  display: block;
  white-space: nowrap;
  color: #333;
}

.sub-menu .menu-item a:hover {
  background-color: #f5f5f5;
}
</style>