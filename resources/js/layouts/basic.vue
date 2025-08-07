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

