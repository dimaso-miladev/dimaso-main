<template>
  <div class="dimaso-kit-79">
    <div id="page-wrapper" class="page-wrapper">
    <HeaderClient/>
    <child />
    <FooterClient/>
    </div>
  </div>
</template>

<script>
import HeaderClient from '~/components/HeaderClient';
import FooterClient from '~/components/FooterClient';
export default {
  components: {
    HeaderClient,
    FooterClient
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
