<template>
  <div class="dimaso-kit-79">
    <div id="page-wrapper" class="page-wrapper">
    <HeaderClient/>
    </div>
  </div>
</template>

<script>
import HeaderClient from '~/components/HeaderClient'
export default {
  components: {
    HeaderClient
  },
  name: 'BasicLayout',
  data() {
    return {
      isMenuOpen: false,
      logoUrl: '/assets/images/dimaso_main_logo.webp'
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
</style>
