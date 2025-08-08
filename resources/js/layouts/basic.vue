<template>
  <div class="dimaso-kit-79">
    <div id="page-wrapper" class="page-wrapper">
    <HeaderClient/>
    <div id="particles-js"><canvas class="particles-js-canvas-el" width="3360" height="972" style="width: 100%; height: 100%;"></canvas></div>
    <child />
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
