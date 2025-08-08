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
</style>
