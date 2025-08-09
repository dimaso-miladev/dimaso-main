<template>
  <footer class="footer">
      <div class="footer__container">
          <!-- Footer content section -->
          <section class="footer__content">
              <div class="content__container">
                  <div class="footer__content-logo">
                      <a href="#">
                          <img class="footer__content-logo-img"
                              :src="logoUrl"
                              alt="">
                      </a>
                      <div class="footer__line-container">
                          <div class="footer__line--long"></div>
                          <div class="footer__line-short"></div>
                      </div>
                      <ul class="footer__content-description">
                          <li class="footer-description__item">
                              Một sản phẩm của CÔNG TY TNHH TRUYỀN THÔNG SỐ DIMASO chuyên cung cấp dịch vụ digital marketing chuyên nghiệp
                          </li>
                          <li class="footer-description__item">Mã số thuế: 1801765411</li>
                          <li class="footer-description__item">
                              Địa chỉ: Số 553/9E Đường 30 tháng 4, Phường Tân An, Thành phố Cần Thơ, Việt Nam
                          </li>
                      </ul>
                      <ul class="footer__content-contact">
                          <li class="footer-contact__item">
                              Hotline: (+84) 0899 199 636
                          </li>
                          <li class="footer-contact__item">Email: dimaso.agency@gmail.com</li>
                      </ul>
                  </div>
                  <div class="footer__content-menu">
                      <div class="footer-menu">
                          <h3 class="footer-menu__title">Sản phẩm dịch vụ</h3>
                          <div class="footer__line-container">
                              <div class="footer__line--long"></div>
                              <div class="footer__line-short"></div>
                          </div>
                          <section class="footer-menu__section footer-menu__section--links">
                              <div class="menu-menu-footer-container">
                                  <ul id="menu-menu-footer" class="footer-menu__list">
                                      <li id="menu-item-98"
                                          class="menu-item menu-item-type-post_type menu-item-object-post menu-item-98">
                                          <a href="https://dimaso.vn/?p=95" class="menu-link">Giới thiệu</a>
                                      </li>
                                      <li id="menu-item-92"
                                          class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-37 current_page_item menu-item-92">
                                          <a href="https://dimaso.vn/case-study/" aria-current="page"
                                              class="menu-link">Case Study</a></li>
                                      <li id="menu-item-93"
                                          class="menu-item menu-item-type-post_type menu-item-object-page menu-item-93">
                                          <a href="https://dimaso.vn/blogs/" class="menu-link">Blogs</a></li>
                                      <li id="menu-item-94"
                                          class="menu-item menu-item-type-post_type menu-item-object-page menu-item-94">
                                          <a href="https://dimaso.vn/lien-he/" class="menu-link">Liên hệ</a>
                                      </li>
                                  </ul>
                              </div> 
                          </section>
                      </div>
                      <div class="footer-menu">
                          <h3 class="footer-menu__title">Kết nối</h3>
                          <div class="footer__line-container">
                              <div class="footer__line--long"></div>
                              <div class="footer__line-short"></div>
                          </div>
                          <section class="footer-menu__section footer-menu__section--links">
                              <ul class="footer-menu__list-icon">
                                  <li class="footer-menu__icon-item footer-menu__icon-item--active">
                                      <a href="" class="footer-menu__icon-link"
                                          target="blank">
                                          <div class="footer-menu__icon-box">
                                            <img src="https://static.xx.fbcdn.net/rsrc.php/yx/r/e9sqr8WnkCf.ico"
                                                  alt="placeholder" class="footer-menu__icon-img">
                                          </div>
                                      </a>
                                  </li>
                                  <li class="footer-menu__icon-item footer-menu__icon-item--active">
                                      <a href="https://zalo.me/3563151233042600197"
                                          class="footer-menu__icon-link" target="blank">
                                          <div class="footer-menu__icon-box">
                                              <img src="https://chat.zalo.me/favicon-96x96.v1.png"
                                                  alt="placeholder" class="footer-menu__icon-img">
                                          </div>
                                      </a>
                                  </li>
                              </ul>
                          </section>
                      </div>
                  </div>
              </div>
          </section>
          <!-- Footer copyright section -->
          <section class="footer__copyright">
              <div class="copyright__container">
                  <div class="footer__copyright-text">
                      @ Copyright 2025 All Rights Reserved
                  </div>
                  <ul class="footer__legal-links">
                      <li class="footer__legal-item">
                          <a class="footer__legal-item-link" href="">Điều kiện &amp; Cam kết</a>
                      </li>
                      <li class="footer__legal-item">
                          <a class="footer__legal-item-link" href="">Điều khoản bảo mật</a>
                      </li>
                  </ul>
              </div>
          </section>
      </div>
  </footer>
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
};
</script>