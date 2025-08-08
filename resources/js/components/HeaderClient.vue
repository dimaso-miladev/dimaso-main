<template>
    <div>
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
  
  