<template>

  <div class="dimaso-kit-79">
    <div id="page-wrapper" class="page-wrapper">
      <div id="particles-js"></div>
      <header id="site-header" class="header">
        <div id="header-wrap">
          <div class="container-fluid">
            <div class="row">
              <div class="col">
                <nav class="ht-navigation">
                  <a class="navbar-brand logo m-0" href="#">
                    <img class="img-fluid" :src="logoUrl" alt="Logo Img" />
                  </a>
                  <div class="ht-mobile-menu-bg" :class="{ 'menu-active': isMenuOpen }"></div>
                  <div class="navigation-top">
                    <div class="main-nav" :class="{ 'menu-active': isMenuOpen }">
                      <div class="closepanel" @click="toggleMobileMenu">
                        <i class="bi bi-x-lg"></i>
                      </div>
                      <ul id="menu-primary-menu" class="menu">
                        <li
                          v-for="(item, index) in menuItems"
                          :key="index"
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
  </div>
</template>

<script>
import LocaleDropdown from '~/components/LocaleDropdown'
export default {
  components: {
    LocaleDropdown
  },
  name: 'BasicLayout',
  data() {
    return {
      isMenuOpen: false,
      logoUrl: '/assets/images/dimaso_main_logo.webp',
      menuItems: [
        { text: 'Home', href: '#site_url/', current: true },
        { text: 'About Us', href: '#site_url/about-us/', current: false },
        { text: 'Services', href: '#site_url/service/', current: false },
        { text: 'Packages', href: '#site_url/packages/', current: false },
        { text: 'Portfolio', href: '#site_url/portfolios/', current: false },
        { text: 'Blogs', href: '#site_url/blogs/', current: false },
        { text: 'Contact Us', href: '#site_url/contact-us/', current: false },
      ],
    };
  },
  methods: {
    toggleMobileMenu() {
      this.isMenuOpen = !this.isMenuOpen;
    },
  },
};
</script>

<style lang="scss">
.dimaso-kit-79 {
  --e-global-color-primary: #6EC1E4;
  --e-global-color-secondary: #54595F;
  --e-global-color-text: #7A7A7A;
  --e-global-color-accent: #61CE70;
  --e-global-typography-primary-font-family: "Roboto";
  --e-global-typography-primary-font-weight: 600;
  --e-global-typography-secondary-font-family: "Roboto Slab";
  --e-global-typography-secondary-font-weight: 400;
  --e-global-typography-text-font-family: "Roboto";
  --e-global-typography-text-font-weight: 400;
  --e-global-typography-accent-font-family: "Roboto";
  --e-global-typography-accent-font-weight: 500;
}

:root {
  --themeht-secondary-color: #FE9E30;
  --themeht-primary2-color: #103CE7;
  --themeht-secondary2-color: #64E9FF;
  --themeht-text-color: #191919;
  --themeht-body-color: #606060;
  --themeht-white-color: #FFFFFF;
  --themeht-bg-dark-color: #000229;
  --themeht-bg-light-color: #F7F9FE;
  --themeht-border-light-color: #E1E1E1;
  --themeht-rgba-color: rgba(255, 255, 255, 0.9);
  --themeht-typography-body-font-family: "Hanken Grotesk", sans-serif;
  --themeht-typography-secondary-font-family: "Archivo", sans-serif;
  --logo-desktop-height: 60px;
  --logo-tablet-height: 55px;
  --logo-mobile-height: 50px;
}

body {
  scroll-behavior: smooth;
  font-family: var(--themeht-typography-body-font-family);
  font-weight: normal;
  font-style: normal;
  font-size: 17px;
  line-height: 30px;
  color: var(--themeht-body-color);
  overflow-x: hidden;
}

.page-wrapper {
  overflow-x: hidden;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  font-weight: normal;
  margin-top: 0px;
  font-style: normal;
  margin-bottom: 20px;
  color: var(--themeht-text-color);
  font-family: var(--themeht-typography-secondary-font-family);
}

h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {
  color: inherit;
}

ul {
  margin-left: 0;
}

@media (min-width: 1400px) {
  .container {
    max-width: 1320px !important;
  }
}

a,
.btn,
button,
img,
#ht-main-nav,
.main-nav > ul > li > a:before,
.main-nav .sub-menu li a:before,
.ht-nav-toggle {
  -webkit-transition: all 0.5s ease-in-out 0s;
  -moz-transition: all 0.5s ease-in-out 0s;
  -ms-transition: all 0.5s ease-in-out 0s;
  -o-transition: all 0.5s ease-in-out 0s;
  transition: all 0.5s ease-in-out 0s;
}

a, a:focus { text-decoration: none !important; }
a, a:visited { text-decoration: none; color: var(--themeht-text-color);}
a:focus, a:hover { color: var(--themeht-secondary-color); text-decoration: none !important; }
a, button, input { outline: medium none !important; }

#particles-js {
  width: 100%;
  height: 100%;
  position: fixed;
  top: 0;
  left: 0;
  z-index: -1;
}

.header {
  position: absolute;
  top: 0;
  width: 100%;
  z-index: 1200;
}

#header-wrap {
  position: relative;
  z-index: 999;
  padding: 20px 0 0;
}

.admin-bar .header,
.admin-bar #header-wrap.fixed-header {
  top: 30px;
}

#header-wrap.fixed-header {
  position: fixed;
  left: 0px;
  top: 0px;
  width: 100%;
  background-color: var(--themeht-white-color);
  box-shadow: 0 25px 70px rgba(0, 0, 0, 0.07);
  -webkit-box-shadow: 0px 25px 70px rgba(8, 10, 55, 0.08);
  -moz-box-shadow: 0px 25px 70px rgba(8, 10, 55, 0.08);
  box-shadow: 0px 25px 70px rgba(8, 10, 55, 0.08);
  animation-name: smoothScroll;
  animation-duration: 500ms;
  animation-timing-function: linear;
  animation-iteration-count: 1;
  transition: all 500ms ease;
}

@keyframes smoothScroll {
  from { top: -100px; }
  to { top: 0; }
}

.logo img {
  max-height: var(--logo-desktop-height);
}

.ht-navigation {
  flex-wrap: nowrap;
  justify-content: flex-start;
  position: relative;
  display: flex;
  align-items: center;
  background: var(--themeht-white-color);
  box-shadow: 0px 25px 70px rgba(8, 10, 55, 0.08);
  padding: 12px 20px;
  border-radius: 20px;
}

.navigation-top {
  margin: 0 auto;
}
.right-nav .nav-item {
  list-style-type: none;
}
@media (min-width: 1200px) {
  .main-nav .menu {
    flex-direction: row;
    display: flex;
    margin: 0;
    padding: 0;
    justify-content: center;
  }
}

.main-nav li {
  position: relative;
  list-style-type: none;
}

.main-nav > ul > li {
  margin: 0 15px;
}

.main-nav > ul > li > a {
  font-family: var(--themeht-typography-secondary-font-family);
  font-weight: 500;
  color: var(--themeht-text-color);
  font-size: 17px;
  line-height: 30px;
  border-radius: 0;
  position: relative;
  display: block;
}

@media (min-width: 992px) {
  .main-nav > ul > li > a:hover,
  .main-nav > ul > li.current-menu-item > a,
  .main-nav > ul > li.current-menu-parent > a {
    color: var(--themeht-secondary-color);
  }
}

.nav-menu-toggle {
  box-shadow: none;
  border: none;
  background: none;
  padding: 0;
  font-size: 40px;
  line-height: 1;
  display: none;
  color: var(--themeht-secondary-color);
  margin-left: auto;
  margin-right: 20px;
}

.closepanel {
  display: none;
  position: absolute;
  right: 30px;
  top: 30px;
}

.closepanel i {
  display: inline-block;
  font-size: 40px;
  color: var(--themeht-text-color);
  line-height: 1;
}

.ht-mobile-menu-bg {
  display: none;
}

.right-nav {
  position: relative;
}

.ht-nav-toggle {
  cursor: pointer;
  text-decoration: none;
  position: relative;
  width: 40px;
  height: 40px;
  margin-left: 30px;
}

.ht-nav-toggle:hover,
.ht-nav-toggle:focus,
.ht-nav-toggle:active {
  outline: none;
  border-bottom: none !important;
}

@media (min-width: 1600px) {
  .header .container-fluid {
    padding: 0 10rem;
  }
}

@media (max-width: 1500px) {
  .main-nav > ul > li {
      margin: 0 10px;
  }
}

@media (max-width: 1200px) {
  .navigation-top {
    margin-left: auto;
    margin-right: 20px;
  }

  .main-nav .menu {
    padding-left: 0;
    padding-top: 80px;
  }
  .admin-bar .main-nav .menu {
    padding-top: 120px;
  }

  .closepanel {
    display: block;
  }
  .admin-bar .closepanel {
    top: 60px;
  }
  
  .nav-menu-toggle,
  .ht-mobile-menu-bg,
  .closepanel {
    display: block;
    margin-right: 0;
  }

  .main-nav > ul > li {
    border-bottom: 1px solid var(--themeht-border-light-color);
    margin: 0;
  }
  .main-nav > ul > li > a {
    padding: 20px;
    display: inline-block;
    border: none;
    line-height: 1;
  }

  .main-nav {
    background-color: var(--themeht-white-color);
    position: fixed;
    top: 0;
    right: -400px;
    z-index: 1000;
    width: 300px;
    height: 100%;
    padding: 0;
    display: block;
    transition: all 900ms ease;
    transform: translateX(400px);
    opacity: 0;
  }

  .main-nav.menu-active {
    right: 0px;
    transform: translateX(0);
    visibility: visible;
    opacity: 1;
    overflow-y: scroll;
    transition-delay: 600ms;
  }

  .ht-mobile-menu-bg {
    display: block;
    position: fixed;
    right: 0;
    top: 0;
    width: 0%;
    height: 100%;
    z-index: 99;
    opacity: 0.8;
    background: var(--themeht-secondary-color);
    transform: translateX(101%);
    transition: all 900ms ease;
    transition-delay: 300ms;
  }

  .ht-mobile-menu-bg.menu-active {
    width: 100%;
    visibility: visible;
    transform: translateX(0%);
  }
}

@media (max-width: 992px) {
  .admin-bar .header,
  .admin-bar #header-wrap.fixed-header {
    top: 45px;
  }
  .logo img {
    max-height: var(--logo-tablet-height);
  }
  #header-wrap {
    padding: 0;
  }
  .navigation-top {
    justify-content: end;
  }
}

@media (max-width: 767px) {
  .admin-bar #header-wrap.fixed-header {
    top: 0;
  }
  .navbar-toggler.ht-toggler {
    margin-right: 30px;
  }
  .navigation-top {
    margin-right: 0;
  }
}

</style>
