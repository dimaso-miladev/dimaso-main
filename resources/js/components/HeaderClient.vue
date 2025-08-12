<template>
  <div>
    <header id="site-header" class="header">
      <div id="header-wrap">
        <div class="container-fluid">
          <div class="row">
            <div class="col">
              <nav class="ht-navigation">
                <a class="navbar-brand logo m-0" :href="homeUrl">
                  <!-- Sử dụng $t cho alt text để thân thiện với SEO và accessibility -->
                  <img class="img-fluid" :src="logoUrl" :alt="$t('header.logoAlt')" />
                </a>
                <div class="ht-mobile-menu-bg" :class="{ 'menu-active': isMenuOpen }"></div>
                <div class="navigation-top">
                  <div class="main-nav" :class="{ 'menu-active': isMenuOpen }">
                    <div class="closepanel" @click="toggleMobileMenu">
                      <i class="bi bi-x-lg"></i>
                    </div>
                    <!-- v-for giờ đây lặp qua thuộc tính computed menuItems với href động -->
                    <ul id="menu-primary-menu" class="menu">
                      <li
                        v-for="item in menuItems"
                        :key="item.key"
                        :class="['menu-item', { 'current-menu-item': item.current }]"
                      >
                        <a :href="item.href" :aria-current="item.current ? 'page' : null">{{ item.text }}</a>
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
    };
  },
  computed: {
    homeUrl() {
        return window.config.siteUrl || '/';
    },
    menuItems() {
      const siteUrl = this.homeUrl;

      return [
        // Sử dụng template literals (dấu ``) để nối chuỗi một cách sạch sẽ
        { key: 'home', text: this.$t('header.nav.home'), href: `${siteUrl}/`, current: true },
        { key: 'about', text: this.$t('header.nav.about'), href: `${siteUrl}/about-us/`, current: false },
        { key: 'services', text: this.$t('header.nav.services'), href: `${siteUrl}/service/`, current: false },
        { key: 'packages', text: this.$t('header.nav.packages'), href: `${siteUrl}/packages/`, current: false },
        { key: 'portfolio', text: this.$t('header.nav.portfolio'), href: `${siteUrl}/portfolios/`, current: false },
        { key: 'blogs', text: this.$t('header.nav.blogs'), href: `${siteUrl}/blogs/`, current: false },
        { key: 'contact', text: this.$t('header.nav.contact'), href: `${siteUrl}/contact-us/`, current: false },
      ];
    }
  },
  methods: {
    toggleMobileMenu() {
      this.isMenuOpen = !this.isMenuOpen;
    },
  },
};
</script>