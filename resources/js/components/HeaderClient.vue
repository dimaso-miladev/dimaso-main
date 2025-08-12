<template>
  <div>
    <!-- Thêm class binding `:class="{ 'fixed-header': isHeaderFixed }"` vào #header-wrap -->
    <header id="site-header" class="header">
      <div id="header-wrap" :class="{ 'fixed-header': isHeaderFixed }">
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
    // 2. Thêm phương thức xử lý sự kiện cuộn trang
    handleScroll() {
      // Khi vị trí cuộn theo trục Y lớn hơn 100px, đặt isHeaderFixed thành true
      // Ngược lại, đặt thành false. Bạn có thể thay đổi giá trị 100 cho phù hợp.
      if (window.scrollY > 100) {
        this.isHeaderFixed = true;
      } else {
        this.isHeaderFixed = false;
      }
    },
  },

  // 3. Sử dụng lifecycle hooks để thêm và xóa bỏ trình lắng nghe sự kiện
  mounted() {
    // Thêm trình lắng nghe sự kiện 'scroll' vào đối tượng window khi component được tạo
    window.addEventListener('scroll', this.handleScroll);
  },
  beforeDestroy() {
    // Xóa bỏ trình lắng nghe sự kiện khi component bị hủy để tránh rò rỉ bộ nhớ
    window.removeEventListener('scroll', this.handleScroll);
  },
};
</script>