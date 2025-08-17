<template>
  <div>
    <breadcrumb :pageTitle="breadcrumbTitle"></breadcrumb>
    <div class="site-wrap">
      <!-- ======= Main =======-->
      <main>
        <!-- ======= Hero =======-->
        <section class="hero__v6 section" id="home">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="row">
                  <div class="col-lg-11">
                    <span class="hero-subtitle text-uppercase aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">
                      {{ $t('hero.subtitle') }}
                    </span>
                    <h1 class="hero-title mb-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                      {{ $t('hero.title') }}
                    </h1>
                    <p class="hero-description mb-4 mb-lg-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                      {{ $t('hero.description') }}
                    </p>
                    <div class="cta d-flex gap-2 mb-4 mb-lg-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                      <a class="btn" href="#">{{ $t('hero.cta.freeConsultation') }}</a>
                      <a class="btn btn-white-outline" href="#">
                        {{ $t('hero.cta.viewProjects') }}
                        <svg class="lucide lucide-arrow-up-right" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M7 7h10v10"></path>
                          <path d="M7 17 17 7"></path>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="hero-img">
                  <img class="img-card img-fluid aos-init aos-animate" :src="cardEpxImage" alt="Thẻ hình ảnh" data-aos="fade-down" data-aos-delay="600">
                  <img class="img-main img-fluid rounded-4 aos-init aos-animate" :src="heroImage1" alt="Hình ảnh anh hùng" data-aos="fade-in" data-aos-delay="500">
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End Hero-->

        <!-- ======= About =======-->
        <section class="about__v4 section" id="about">
          <div class="container">
            <div class="row">
              <div class="col-md-6 order-md-2">
                <div class="row justify-content-end">
                  <div class="col-md-11 mb-4 mb-md-0">
                    <span class="subtitle text-uppercase mb-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">
                      {{ $t('about.subtitle') }}
                    </span>
                    <h2 class="mb-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                      {{ $t('about.title') }}
                    </h2>
                    <div data-aos="fade-up" data-aos-delay="200" class="aos-init aos-animate">
                      <p>{{ $t('about.description_p1') }}</p>
                      <p>{{ $t('about.description_p2') }}</p>
                    </div>
                    <h4 class="small fw-bold mt-4 mb-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                      {{ $t('about.coreValues.title') }}
                    </h4>
                    <ul class="d-flex flex-row flex-wrap list-unstyled gap-3 features aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                      <li class="d-flex align-items-center gap-2">
                        <span class="icon rounded-circle text-center"><fa :icon="['fas', 'check']" class="fs-4 icon-check"></fa></span>
                        <span class="text">{{ $t('about.coreValues.items.innovation') }}</span>
                      </li>
                      <li class="d-flex align-items-center gap-2">
                        <span class="icon rounded-circle text-center"><fa :icon="['fas', 'check']" class="fs-4 icon-check"></fa></span>
                        <span class="text">{{ $t('about.coreValues.items.efficiency') }}</span>
                      </li>
                      <li class="d-flex align-items-center gap-2">
                        <span class="icon rounded-circle text-center"><fa :icon="['fas', 'check']" class="fs-4 icon-check"></fa></span>
                        <span class="text">{{ $t('about.coreValues.items.customerCentric') }}</span>
                      </li>
                      <li class="d-flex align-items-center gap-2">
                        <span class="icon rounded-circle text-center"><fa :icon="['fas', 'check']" class="fs-4 icon-check"></fa></span>
                        <span class="text">{{ $t('about.coreValues.items.transparency') }}</span>
                      </li>
                      <li class="d-flex align-items-center gap-2">
                        <span class="icon rounded-circle text-center"><fa :icon="['fas', 'check']" class="fs-4 icon-check"></fa></span>
                        <span class="text">{{ $t('about.coreValues.items.strategicPartner') }}</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="img-wrap position-relative">
                  <img class="img-fluid rounded-4 aos-init aos-animate" :src="aboutImage2" alt="Image Placeholder" data-aos="fade-up" data-aos-delay="0">
                  <div class="mission-statement p-4 rounded-4 d-flex gap-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <div class="mission-icon text-center rounded-circle">
                      <fa :icon="['fas', 'lightbulb']" class="fs-4 icon-idea"></fa>
                    </div>
                    <div>
                      <h3 class="text-uppercase fw-bold">{{ $t('about.mission.title') }}</h3>
                      <p class="fs-5 mb-0">{{ $t('about.mission.text') }}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End About-->

        <!-- ======= Features =======-->
        <section class="section features__v2" id="features">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="d-lg-flex p-5 rounded-4 content aos-init aos-animate" data-aos="fade-in" data-aos-delay="0">
                  <div class="row">
                    <div class="col-lg-5 mb-5 mb-lg-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">
                      <div class="row">
                        <div class="col-lg-11">
                          <div class="h-100 flex-column justify-content-between d-flex">
                            <div>
                              <h2 class="mb-4">{{ $t('features.title') }}</h2>
                              <p class="mb-5">{{ $t('features.description') }}</p>
                            </div>
                            <div class="align-self-start">
                              <a class="glightbox btn btn-play d-inline-flex align-items-center gap-2" href="#wpcf7-f6-o1">
                                {{ $t('features.cta') }}
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-7">
                      <div class="row justify-content-end">
                        <div class="col-lg-11">
                          <div class="row">
                            <div class="col-sm-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">
                              <div class="icon text-center mb-4"><fa :icon="['fas', 'user-check']" class="fs-4 why-choice-icon"></fa></div>
                              <h3 class="fs-6 fw-bold mb-3">{{ $t('features.items.comprehensive.title') }}</h3>
                              <p>{{ $t('features.items.comprehensive.description') }}</p>
                            </div>
                            <div class="col-sm-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                              <div class="icon text-center mb-4"><fa :icon="['fas', 'lightbulb']" class="fs-4 why-choice-icon"></fa></div>
                              <h3 class="fs-6 fw-bold mb-3">{{ $t('features.items.limitlessCreativity.title') }}</h3>
                              <p>{{ $t('features.items.limitlessCreativity.description') }}</p>
                            </div>
                            <div class="col-sm-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                              <div class="icon text-center mb-4"><fa :icon="['fas', 'chart-line']" class="fs-4 why-choice-icon"></fa></div>
                              <h3 class="fs-6 fw-bold mb-3">{{ $t('features.items.transparentReporting.title') }}</h3>
                              <p>{{ $t('features.items.transparentReporting.description') }}</p>
                            </div>
                            <div class="col-sm-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                              <div class="icon text-center mb-4"><fa :icon="['fas', 'chart-pie']" class="fs-4 why-choice-icon"></fa></div>
                              <h3 class="fs-6 fw-bold mb-3">{{ $t('features.items.continuousOptimization.title') }}</h3>
                              <p>{{ $t('features.items.continuousOptimization.description') }}</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End Features-->

        <!-- ======= How it works =======-->
        <section class="section howitworks__v1" id="how-it-works">
          <div class="container">
            <div class="row mb-5">
              <div class="col-md-6 text-center mx-auto">
                <span class="subtitle text-uppercase mb-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">
                  {{ $t('howItWorks.subtitle') }}
                </span>
                <h2 data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate">
                  {{ $t('howItWorks.title') }}
                </h2>
                <p data-aos="fade-up" data-aos-delay="200" class="aos-init aos-animate">
                  {{ $t('howItWorks.description') }}
                </p>
              </div>
            </div>
            <div class="row g-md-5">
              <div class="col-md-6 col-lg-3">
                <div class="step-card text-center h-100 d-flex flex-column justify-content-start position-relative aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">
                  <div data-aos="fade-right" data-aos-delay="500" class="aos-init aos-animate"><img class="arch-line" :src="archLine" alt="Arch Line"></div>
                  <span class="step-number rounded-circle text-center fw-bold mb-5 mx-auto">1</span>
                  <div>
                    <h3 class="fs-5 mb-4">{{ $t('howItWorks.steps.step1.title') }}</h3>
                    <p>{{ $t('howItWorks.steps.step1.description') }}</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="600">
                <div class="step-card reverse text-center h-100 d-flex flex-column justify-content-start position-relative">
                  <div data-aos="fade-right" data-aos-delay="1100" class="aos-init aos-animate"><img class="arch-line reverse" :src="archLineReverse" alt="Arch Line Reverse"></div>
                  <span class="step-number rounded-circle text-center fw-bold mb-5 mx-auto">2</span>
                  <h3 class="fs-5 mb-4">{{ $t('howItWorks.steps.step2.title') }}</h3>
                  <p>{{ $t('howItWorks.steps.step2.description') }}</p>
                </div>
              </div>
              <div class="col-md-6 col-lg-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="1200">
                <div class="step-card text-center h-100 d-flex flex-column justify-content-start position-relative">
                  <div data-aos="fade-right" data-aos-delay="1700" class="aos-init aos-animate"><img class="arch-line" :src="archLine" alt="Arch Line"></div>
                  <span class="step-number rounded-circle text-center fw-bold mb-5 mx-auto">3</span>
                  <h3 class="fs-5 mb-4">{{ $t('howItWorks.steps.step3.title') }}</h3>
                  <p>{{ $t('howItWorks.steps.step3.description') }}</p>
                </div>
              </div>
              <div class="col-md-6 col-lg-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="1800">
                <div class="step-card last text-center h-100 d-flex flex-column justify-content-start position-relative">
                  <span class="step-number rounded-circle text-center fw-bold mb-5 mx-auto">4</span>
                  <div>
                    <h3 class="fs-5 mb-4">{{ $t('howItWorks.steps.step4.title') }}</h3>
                    <p>{{ $t('howItWorks.steps.step4.description') }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End How it works-->

        <!-- ======= Services =======-->
        <section class="section services__v3" id="services">
          <div class="container">
            <div class="row mb-5">
              <div class="col-md-8 mx-auto text-center">
                <span class="subtitle text-uppercase mb-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">
                  {{ $t('services.subtitle') }}
                </span>
                <h2 class="mb-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                  {{ $t('services.title') }}
                </h2>
              </div>
            </div>
            <div class="row g-4">
              <div class="col-md-6 col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">
                <div class="service-card p-4 rounded-4 h-100 d-flex flex-column justify-content-between gap-5">
                  <div>
                    <!-- SVG Icon -->
                    <h3 class="fs-5 mb-3">{{ $t('services.items.seo.title') }}</h3>
                    <p class="mb-4">{{ $t('services.items.seo.description') }}</p>
                  </div>
                  <a class="special-link d-inline-flex gap-2 align-items-center text-decoration-none" href="#">
                    <span class="icons"><fa :icon="['fas', 'arrow-right']" class="icon-1"></fa></span>
                    <span>{{ $t('services.items.readMore') }}</span>
                  </a>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card p-4 rounded-4 h-100 d-flex flex-column justify-content-between gap-5">
                  <div>
                    <!-- SVG Icon -->
                    <h3 class="fs-5 mb-3">{{ $t('services.items.ppc.title') }}</h3>
                    <p class="mb-4">{{ $t('services.items.ppc.description') }}</p>
                  </div>
                  <a class="special-link d-inline-flex gap-2 align-items-center text-decoration-none" href="#">
                    <span class="icons"><fa :icon="['fas', 'arrow-right']" class="icon-1"></fa></span>
                    <span>{{ $t('services.items.readMore') }}</span>
                  </a>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card p-4 rounded-4 h-100 d-flex flex-column justify-content-between gap-5">
                  <div>
                    <!-- SVG Icon -->
                    <h3 class="fs-5 mb-3">{{ $t('services.items.social.title') }}</h3>
                    <p class="mb-4">{{ $t('services.items.social.description') }}</p>
                  </div>
                  <a class="special-link d-inline-flex gap-2 align-items-center text-decoration-none" href="#">
                    <span class="icons"><fa :icon="['fas', 'arrow-right']" class="icon-1"></fa></span>
                    <span>{{ $t('services.items.readMore') }}</span>
                  </a>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                <div class="service-card p-4 rounded-4 h-100 d-flex flex-column justify-content-between gap-5">
                  <div>
                    <!-- SVG Icon -->
                    <h3 class="fs-5 mb-3">{{ $t('services.items.content.title') }}</h3>
                    <p class="mb-4">{{ $t('services.items.content.description') }}</p>
                  </div>
                  <a class="special-link d-inline-flex gap-2 align-items-center text-decoration-none" href="#">
                    <span class="icons"><fa :icon="['fas', 'arrow-right']" class="icon-1"></fa></span>
                    <span>{{ $t('services.items.readMore') }}</span>
                  </a>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
                <div class="service-card p-4 rounded-4 h-100 d-flex flex-column justify-content-between gap-5">
                  <div>
                    <!-- SVG Icon -->
                    <h3 class="fs-5 mb-3">{{ $t('services.items.email.title') }}</h3>
                    <p class="mb-4">{{ $t('services.items.email.description') }}</p>
                  </div>
                  <a class="special-link d-inline-flex gap-2 align-items-center text-decoration-none" href="#">
                    <span class="icons"><fa :icon="['fas', 'arrow-right']" class="icon-1"></fa></span>
                    <span>{{ $t('services.items.readMore') }}</span>
                  </a>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="600">
                <div class="service-card p-4 rounded-4 h-100 d-flex flex-column justify-content-between gap-5">
                  <div>
                    <!-- SVG Icon -->
                    <h3 class="fs-5 mb-3">{{ $t('services.items.webDesign.title') }}</h3>
                    <p class="mb-4">{{ $t('services.items.webDesign.description') }}</p>
                  </div>
                  <a class="special-link d-inline-flex gap-2 align-items-center text-decoration-none" href="#">
                    <span class="icons"><fa :icon="['fas', 'arrow-right']" class="icon-1"></fa></span>
                    <span>{{ $t('services.items.readMore') }}</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Services-->

        <!-- ======= FAQ =======-->
        <section class="section faq__v2" id="faq">
          <div class="container">
            <div class="row mb-4">
              <div class="col-md-6 col-lg-7 mx-auto text-center">
                <span class="subtitle text-uppercase mb-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">
                  {{ $t('faq.subtitle') }}
                </span>
                <h2 class="h2 fw-bold mb-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">
                  {{ $t('faq.title') }}
                </h2>
                <p data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate">
                  {{ $t('faq.description') }}
                </p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8 mx-auto aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                <div class="faq-content">
                  <div class="accordion custom-accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                          {{ $t('faq.items.q1.question') }}
                        </button>
                      </h2>
                      <div class="accordion-collapse collapse show" id="panelsStayOpen-collapseOne">
                        <div class="accordion-body">{{ $t('faq.items.q1.answer') }}</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                          {{ $t('faq.items.q2.question') }}
                        </button>
                      </h2>
                      <div class="accordion-collapse collapse" id="panelsStayOpen-collapseTwo">
                        <div class="accordion-body">{{ $t('faq.items.q2.answer') }}</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                          {{ $t('faq.items.q3.question') }}
                        </button>
                      </h2>
                      <div class="accordion-collapse collapse" id="panelsStayOpen-collapseThree">
                        <div class="accordion-body">{{ $t('faq.items.q3.answer') }}</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                          {{ $t('faq.items.q4.question') }}
                        </button>
                      </h2>
                      <div class="accordion-collapse collapse" id="panelsStayOpen-collapseFour">
                        <div class="accordion-body">{{ $t('faq.items.q4.answer') }}</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
                          {{ $t('faq.items.q5.question') }}
                        </button>
                      </h2>
                      <div class="accordion-collapse collapse" id="panelsStayOpen-collapseFive">
                        <div class="accordion-body">{{ $t('faq.items.q5.answer') }}</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End FAQ-->
      </main>
    </div>
    <ContactForm />
  </div>
</template>


<script>
import Breadcrumb from '~/components/Breadcrumb';
import ContactForm from '~/components/ContactForm';
export default {
  layout: 'basic',
  components: {
    Breadcrumb,
    ContactForm
  },

  data: () => ({
    title: window.config.appName,
    heroImage1: '/assets/images/hero-img-about01.jpeg',
    cardEpxImage: '/assets/images/card-expenses.png',
    aboutImage2: '/assets/images/about-img-2.jpg',
    archLine: '/assets/images/arch-line.svg',
    archLineReverse: '/assets/images/arch-line-reverse.svg',
  }),
  computed: {
    breadcrumbTitle() {
      return this.$t('header.nav.about');
    }
  }
}
</script>

<style>
:root,
[data-bs-theme=light] {
  --bs-primary: #0032b1;
  --bs-primary-rgb: 0, 50, 177;

  --bs-secondary: #f98500;
  --bs-secondary-rgb: 249, 133, 0;

  --bs-primary-hover: #0044d4;
  --bs-primary-hover-rgb: 0, 68, 212;

  --bs-body-bg: #ffffff;
  --bs-body-color: #494B5B;
  --bs-heading-color: #16181B;

  --bs-link-color: var(--bs-primary);
  --nav-bg: #ffffff;
  --nav-color: #16181B;
  --nav-hover-color: var(--bs-primary);
  --dropdown-bg: #ffffff;
  --dropdown-color: #16181B;
  --dropdown-hover-bg: #f7f7f7;

  --inverse-color: #494B5B;
  --inverse-color-rgb: 73, 75, 91;
  --nav-inverse: #000000;
  --nav-inverse-alt: #ffffff;
}


body {
  font: 1rem/1.7 "Inter", sans-serif;
  background-color: var(--bs-body-bg);
  color: var(--bs-body-color);
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.site-wrap {
  position: relative;
}

::-moz-selection {
  background-color: var(--bs-black);
  color: var(--bs-white);
}

/* ::selection {
  background-color: var(--bs-black);
  color: var(--bs-white);
} */

a {
  -webkit-transition: 0.3s all ease-in-out;
  transition: 0.3s all ease-in-out;
  color: var(--bs-primary);
  text-decoration: underline;
}

a:hover {
  text-decoration: none;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  color: var(--bs-heading-color);
}

.container {
  max-width: 1140px;
}

.section {
  padding: 70px 0;
  scroll-margin-top: 60px;
}

@media (max-width: 767.98px) {
  .section {
    padding: 40px 0;
  }
}

.section.first-section {
  padding-top: 100px;
}

@media (min-width: 992px) {
  .section.first-section {
    padding-top: 130px;
  }
}

.text-heading-color {
  color: var(--bs-heading-color);
}

.shadow-sm {
  -webkit-box-shadow: 0 0.125rem 0.25rem 0 rgba(var(--bs-black-rgb), 0.05) !important;
  box-shadow: 0 0.125rem 0.25rem 0 rgba(var(--bs-black-rgb), 0.05) !important;
}

.shadow {
  -webkit-box-shadow: 0 0.5rem 1rem 0 rgba(var(--bs-black-rgb), 0.05) !important;
  box-shadow: 0 0.5rem 1rem 0 rgba(var(--bs-black-rgb), 0.05) !important;
}

.shadow-lg {
  -webkit-box-shadow: 0 1rem 3rem 0 rgba(var(--bs-black-rgb), 0.05) !important;
  box-shadow: 0 1rem 3rem 0 rgba(var(--bs-black-rgb), 0.05) !important;
}

.list-checked {
  padding: 0;
  margin: 0;
  color: var(--bs-body-color);
}

.list-checked li {
  position: relative;
  margin-bottom: 10px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: start;
  -ms-flex-align: start;
  align-items: start;
  gap: 10px;
}

.list-checked li i {
  width: 30px;
  height: 30px;
  text-align: center;
  line-height: 30px;
  display: inline-block;
  background-color: rgba(var(--bs-primary-rgb), 0.1);
  border-radius: 50%;
  color: var(--bs-primary);
  font-size: 20px;
}

.list-checked li:before {
  position: absolute;
  display: inline-block;
  left: 0;
  content: "";
  vertical-align: -0.125em;
  background-repeat: no-repeat;
  background-position: right center;
  background-size: 1.5625rem 1.5625rem;
  width: 1.5625rem;
  height: 1.5625rem;
}

.btn {
  padding: 12px 20px;
  background-color: var(--bs-primary);
  color: var(--bs-white);
  border: 1px solid transparent;
  border-radius: 7px;
  font-weight: 600;
  position: relative;
}

.btn:hover,
.btn:active,
.btn:focus {
  color: var(--bs-white);
  background-color: var(--bs-primary-hover) !important;
  border: 1px solid var(--bs-primary-hover) !important;
}

.btn.btn-white.hover-outline {
  background-color: var(--bs-white) !important;
  color: var(--bs-black) !important;
  border: 1px solid transparent !important;
}

.btn.btn-white.hover-outline:hover {
  color: var(--bs-white) !important;
  background-color: transparent !important;
  border: 1px solid var(--bs-white) !important;
}

.btn.btn-white-outline {
  border: 1px solid rgba(var(--inverse-color-rgb), 0.2) !important;
  color: var(--inverse-color) !important;
  background-color: transparent;
}

.btn.btn-white-outline:hover,
.btn.btn-white-outline:focus,
.btn.btn-white-outline:active {
  background-color: transparent !important;
  border: 1px solid rgba(var(--inverse-color-rgb), 0.5) !important;
}

.block-squares {
  position: absolute;
  bottom: -12px;
  right: 0;
  z-index: 1;
  width: auto;
}

.form-control {
  padding-top: 10px;
  padding-bottom: 10px;
  border-width: 1px;
  font-size: 16px;
  background-color: transparent;
  border-color: rgba(var(--inverse-color-rgb), 0.1);
}

.form-control:focus {
  outline: none;
  -webkit-box-shadow: none;
  box-shadow: none;
  border-color: var(--bs-primary);
}

.a-link i {
  font-size: 26px;
  margin-left: 10px;
  -webkit-transition: 0.25s all ease-in-out;
  transition: 0.25s all ease-in-out;
}

.a-link:hover i {
  margin-left: 15px;
}

.page-title {
  padding-top: 100px !important;
  padding-bottom: 50px !important;
  background-color: rgba(var(--inverse-color-rgb), 0.03);
}

.special-link .icons {
  display: inline-block;
  width: 38px;
  height: 38px;
  line-height: 38px;
  border-radius: 50%;
  text-align: center;
  position: relative;
  border: 1px solid rgba(var(--inverse-color-rgb), 0.2);
}

.special-link .icons i {
  font-size: 25px;
  position: relative;
  display: inline-block;
  position: absolute;
  -webkit-transition: 0.3s all ease-in-out;
  transition: 0.3s all ease-in-out;
}

.special-link .icons i.icon-1 {
  opacity: 1;
  visibility: visible;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%) rotate(-45deg);
  transform: translate(-50%, -50%) rotate(-45deg);
}


.special-link:hover .icons .icon-1 {
  opacity: 1;
  visibility: visible;
}

.fbs__net-navbar {
  position: absolute;
  top: 0;
  -webkit-transition: 0.3s all ease-in-out;
  transition: 0.3s all ease-in-out;
  z-index: 99999;
  width: 100%;
  background-color: transparent !important;
  border: none;
}

@media (min-width: 992px) {
  .fbs__net-navbar {
    padding-top: 0;
    padding-bottom: 0;
  }
}

.fbs__net-navbar>.container {
  position: relative;
}

.fbs__net-navbar.relative {
  position: absolute;
}

.fbs__net-navbar .navbar-brand {
  color: var(--bs-white);
  font-size: 30px;
  font-weight: bold;
}

.fbs__net-navbar .navbar-brand .logo.dark {
  display: none;
}

.fbs__net-navbar .navbar-brand .logo.light {
  display: block;
}

.fbs__net-navbar .navbar-nav>li>.nav-link {
  position: relative;
  padding-top: 22px;
  padding-bottom: 22px;
  padding-left: 10px;
  padding-right: 10px;
  font-size: 0.9375rem;
  color: rgba(var(--bs-white-rgb), 1);
  -webkit-transition: 0.3s all ease;
  transition: 0.3s all ease;
  position: relative;
}

@media (max-width: 991.98px) {
  .fbs__net-navbar .navbar-nav>li>.nav-link {
    color: var(--inverse-color);
  }
}

.fbs__net-navbar .navbar-nav>li>.nav-link:before {
  content: "";
  position: absolute;
  width: calc(100% - 20px);
  -webkit-transform: scaleX(0);
  transform: scaleX(0);
  border-radius: 5px;
  height: 1.5px;
  bottom: 0;
  left: 10px;
  background: currentcolor;
  -webkit-transform-origin: bottom right;
  transform-origin: bottom right;
  -webkit-transition: -webkit-transform 0.35s ease-out;
  transition: -webkit-transform 0.35s ease-out;
  transition: transform 0.35s ease-out;
  transition: transform 0.35s ease-out, -webkit-transform 0.35s ease-out;
}

.fbs__net-navbar .navbar-nav>li>.nav-link:hover::before {
  -webkit-transform: scaleX(1);
  transform: scaleX(1);
  -webkit-transform-origin: bottom left;
  transform-origin: bottom left;
}

.fbs__net-navbar .navbar-nav>li>.nav-link:hover,
.fbs__net-navbar .navbar-nav>li>.nav-link:focus {
  color: var(--bs-white);
}

@media (max-width: 991.98px) {

  .fbs__net-navbar .navbar-nav>li>.nav-link:hover,
  .fbs__net-navbar .navbar-nav>li>.nav-link:focus {
    color: var(--inverse-color) !important;
  }
}

@media (max-width: 767.98px) {
  .fbs__net-navbar .navbar-nav>li>.nav-link {
    padding-top: 5px;
    padding-bottom: 5px;
  }
}

.fbs__net-navbar .navbar-nav>li>.nav-link.active {
  color: var(--bs-white);
}

@media (max-width: 991.98px) {
  .fbs__net-navbar .navbar-nav>li>.nav-link.active {
    color: var(--inverse-color);
  }
}

.fbs__net-navbar .navbar-nav>li>.nav-link.active:before {
  content: "";
  -webkit-transform-origin: bottom left;
  transform-origin: bottom left;
  -webkit-transform: scaleX(1);
  transform: scaleX(1);
}

.fbs__net-navbar .navbar-nav>li>.nav-link.dropdown-toggle {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
}

.fbs__net-navbar .navbar-nav>li>.nav-link.dropdown-toggle::after {
  display: none;
  content: "";
}

@media (max-width: 991.98px) {
  .fbs__net-navbar .navbar-nav>li>.nav-link {
    padding-top: 10px;
    padding-bottom: 10px;
  }
}

.fbs__net-navbar .navbar-nav .dropdown-menu {
  background-color: var(--nav-bg);
}

.fbs__net-navbar .navbar-nav .dropdown-menu .nav-link:hover {
  background-color: var(--dropdown-hover-bg) !important;
  color: var(--inverse-color);
}

.fbs__net-navbar .navbar-nav .dropdown-toggle::after {
  display: none;
}

.fbs__net-navbar .navbar-nav .dropdown-toggle .bi-chevron-down {
  margin-left: 0.5rem;
}

.fbs__net-navbar .fbs__net-navbar-toggler {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  position: relative;
  background-color: var(--bs-black);
  color: var(--bs-white);
  border: none;
  display: none;
}

@media (max-width: 991.98px) {
  .fbs__net-navbar .fbs__net-navbar-toggler {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
  }
}

.fbs__net-navbar .navbar-brand {
  margin-right: 0 !important;
}

.fbs__net-navbar .navbar-nav .dropdown>.dropdown-menu,
.fbs__net-navbar .navbar-nav .dropend>.dropdown-menu,
.fbs__net-navbar .navbar-nav .dropstart>.dropdown-menu {
  border: none !important;
  padding-left: 10px;
  padding-right: 10px;
  -webkit-box-shadow: 0 0.1875rem 0.375rem rgba(var(--bs-black-rgb), 0.1);
  box-shadow: 0 0.1875rem 0.375rem rgba(var(--bs-black-rgb), 0.1);
}

@media (min-width: 992px) {

  .fbs__net-navbar .navbar-nav .dropdown>.dropdown-menu,
  .fbs__net-navbar .navbar-nav .dropend>.dropdown-menu,
  .fbs__net-navbar .navbar-nav .dropstart>.dropdown-menu {
    padding-left: 10px;
    padding-right: 10px;
    width: 200px;
    border: none;
  }
}

.fbs__net-navbar .navbar-nav .dropdown>.dropdown-menu .dropdown-item,
.fbs__net-navbar .navbar-nav .dropdown>.dropdown-menu .nav-link,
.fbs__net-navbar .navbar-nav .dropend>.dropdown-menu .dropdown-item,
.fbs__net-navbar .navbar-nav .dropend>.dropdown-menu .nav-link,
.fbs__net-navbar .navbar-nav .dropstart>.dropdown-menu .dropdown-item,
.fbs__net-navbar .navbar-nav .dropstart>.dropdown-menu .nav-link {
  font-size: 0.875rem;
  padding: 10px 10px;
  -webkit-transition: 0.3s all ease;
  transition: 0.3s all ease;
  border-radius: 0.5rem;
}

@media (min-width: 992px) {

  .fbs__net-navbar .navbar-nav .dropdown:hover>.dropdown-menu,
  .fbs__net-navbar .navbar-nav .dropend:hover>.dropdown-menu,
  .fbs__net-navbar .navbar-nav .dropstart:hover>.dropdown-menu {
    display: block;
    -webkit-animation: fadeInUp 0.3s ease;
    animation: fadeInUp 0.3s ease;
  }
}

@media (min-width: 992px) {
  .fbs__net-navbar .navbar-nav .dropend:hover>.dropdown-menu {
    position: absolute;
    top: 0;
    left: 100%;
    -webkit-animation: fadeInRight 0.3s ease;
    animation: fadeInRight 0.3s ease;
  }
}

@media (min-width: 992px) {
  .fbs__net-navbar .navbar-nav .dropstart:hover>.dropdown-menu {
    position: absolute;
    top: 0;
    right: 100%;
    -webkit-animation: fadeInLeft 0.3s ease;
    animation: fadeInLeft 0.3s ease;
  }
}

.fbs__net-navbar .navbar-nav .dropdown-toggle::before {
  display: none;
}

.fbs__net-navbar .navbar-nav .dropdown-toggle::after {
  display: none;
}

.fbs__net-navbar .navbar-nav li.dropend>a,
.fbs__net-navbar .navbar-nav li.dropstart>a {
  position: relative;
}

.fbs__net-navbar .navbar-nav li.dropend>a .bi,
.fbs__net-navbar .navbar-nav li.dropstart>a .bi {
  position: absolute;
  right: 10px;
  top: 50%;
  -webkit-transform: translateY(-50%);
  transform: translateY(-50%);
}

@media (max-width: 991.98px) {

  .fbs__net-navbar .navbar-nav li.dropend>a .bi,
  .fbs__net-navbar .navbar-nav li.dropstart>a .bi {
    -webkit-transform: rotate(90deg);
    transform: rotate(90deg);
    margin-top: -10px;
  }
}

.fbs__net-navbar .navbar-nav li.dropend>a::after,
.fbs__net-navbar .navbar-nav li.dropstart>a::after {
  display: none;
}

.fbs__net-navbar .navbar-nav li.dropend>a {
  position: relative;
}

.fbs__net-navbar .navbar-nav li.dropend>a:hover {
  background-color: var(--dropdown-hover-bg) !important;
}

.fbs__net-navbar .navbar-nav li.dropend>a .caret {
  position: absolute;
  right: 10px;
}

.fbs__net-navbar .navbar-nav li.dropstart>a {
  position: relative;
}

.fbs__net-navbar .navbar-nav li.dropstart>a:hover {
  background-color: var(--dropdown-hover-bg) !important;
}

.fbs__net-navbar .navbar-nav li.dropstart>a .caret {
  position: absolute;
  left: 10px;
}

.fbs__net-navbar .navbar-toggler:hover,
.fbs__net-navbar .navbar-toggler:focus,
.fbs__net-navbar .navbar-toggler:active {
  outline: none;
  -webkit-box-shadow: none;
  box-shadow: none;
}

.fbs__net-navbar .header-social a {
  -webkit-transition: 0.3s all ease;
  transition: 0.3s all ease;
  color: var(--bs-white);
  width: 30px;
  height: 30px;
  line-height: 30px;
  text-align: center;
  border-radius: 4px;
  display: inline-block;
  background-color: transparent;
}

.fbs__net-navbar .header-social a:hover {
  background-color: rgba(var(--bs-white-rgb), 0.1);
}

@media (min-width: 992px) {
  .fbs__net-navbar .header-social a {
    color: var(--bs-white);
  }
}

.fbs__net-navbar .header-social .btn {
  width: auto !important;
  height: auto !important;
  background-color: var(--bs-primary) !important;
  color: var(--bs-white) !important;
}

@media (max-width: 575.98px) {
  .fbs__net-navbar .header-social .btn {
    display: none;
  }
}

.fbs__net-navbar.active {
  position: fixed;
  top: 0;
  width: 100%;
  background-color: var(--nav-bg) !important;
  -webkit-box-shadow: 0 0.1875rem 0.375rem rgba(var(--bs-black-rgb), 0.05) !important;
  box-shadow: 0 0.1875rem 0.375rem rgba(var(--bs-black-rgb), 0.05) !important;
}

.fbs__net-navbar.active .navbar-brand {
  color: rgba(var(--inverse-color-rgb), 1) !important;
}

.fbs__net-navbar.active .navbar-brand .logo.dark {
  display: block;
}

.fbs__net-navbar.active .navbar-brand .logo.light {
  display: none;
}

.fbs__net-navbar.active .nav-link {
  color: rgba(var(--inverse-color-rgb), 1) !important;
}

.fbs__net-navbar.active .nav-link:hover {
  color: rgba(var(--inverse-color-rgb), 1) !important;
}

.fbs__net-navbar.active .header-social a {
  -webkit-transition: 0.3s all ease;
  transition: 0.3s all ease;
  color: var(--inverse-color);
}

.fbs__net-navbar.active .header-social a:hover {
  background-color: rgba(var(--inverse-color-rgb), 0.1);
}

@media (min-width: 992px) {
  .fbs__net-navbar.active .header-social a {
    color: rgba(var(--inverse-color-rgb), 1) !important;
  }
}

.fbs__net-navbar.active .header-social .btn {
  width: auto !important;
  height: auto !important;
  background-color: var(--bs-primary) !important;
  color: var(--bs-white) !important;
}

.fbs__net-navbar.active .navbar-nav>li>.dropdown-toggle:hover {
  color: var(--inverse-color) !important;
}

.fbs__net-navbar.active .navbar-nav>li>.nav-link.dropdown-toggle::after {
  display: none;
  content: "";
}

.fbs__net-navbar.active .navbar-nav li.dropdown a:hover,
.fbs__net-navbar.active .navbar-nav li.dropend a:hover,
.fbs__net-navbar.active .navbar-nav li.dropstart a:hover {
  color: var(--inverse-color) !important;
}

.fbs__net-navbar .fbs__net-icon-menu {
  display: block;
}

.fbs__net-navbar .fbs__net-icon-close {
  display: none;
}

.offcanvas-active .fbs__net-navbar .fbs__net-icon-menu {
  display: none;
}

.offcanvas-active .fbs__net-navbar .fbs__net-icon-close {
  display: block;
}

.fbs__net-navbar.dark {
  -webkit-box-shadow: 0 0px 2px rgba(var(--inverse-color-rgb), 0.15);
  box-shadow: 0 0px 2px rgba(var(--inverse-color-rgb), 0.15);
}

.fbs__net-navbar.dark .navbar-brand .logo.dark {
  display: block;
}

.fbs__net-navbar.dark .navbar-brand .logo.light {
  display: none;
}

.fbs__net-navbar.dark a {
  color: var(--inverse-color) !important;
}

.fbs__net-navbar.dark a:hover {
  color: var(--inverse-color);
}

.fbs__net-navbar.dark .header-social a:hover {
  background-color: rgba(var(--inverse-color-rgb), 0.05);
}

.fbs__net-navbar.dark ul li a {
  color: rgba(var(--inverse-color-rgb), 1) !important;
}

.fbs__net-navbar.dark ul li a:hover {
  color: var(--inverse-color) !important;
}

.fbs__net-navbar .offcanvas-header .offcanvas-header-logo .logo-link .logo.dark {
  display: block;
}

.fbs__net-navbar .offcanvas-header .offcanvas-header-logo .logo-link .logo.light {
  display: none;
}


@-webkit-keyframes fadeInUp {
  from {
    opacity: 0;
    -webkit-transform: translateY(10px);
    transform: translateY(10px);
  }

  to {
    opacity: 1;
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }
}

@keyframes fadeInUp {
  from {
    opacity: 0;
    -webkit-transform: translateY(10px);
    transform: translateY(10px);
  }

  to {
    opacity: 1;
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }
}

@-webkit-keyframes fadeInRight {
  from {
    opacity: 0;
    -webkit-transform: translateX(10px);
    transform: translateX(10px);
  }

  to {
    opacity: 1;
    -webkit-transform: translateX(0);
    transform: translateX(0);
  }
}

@keyframes fadeInRight {
  from {
    opacity: 0;
    -webkit-transform: translateX(10px);
    transform: translateX(10px);
  }

  to {
    opacity: 1;
    -webkit-transform: translateX(0);
    transform: translateX(0);
  }
}

@-webkit-keyframes fadeInLeft {
  from {
    opacity: 0;
    -webkit-transform: translateX(-10px);
    transform: translateX(-10px);
  }

  to {
    opacity: 1;
    -webkit-transform: translateX(0);
    transform: translateX(0);
  }
}

@keyframes fadeInLeft {
  from {
    opacity: 0;
    -webkit-transform: translateX(-10px);
    transform: translateX(-10px);
  }

  to {
    opacity: 1;
    -webkit-transform: translateX(0);
    transform: translateX(0);
  }
}

.hero__v6 {
  padding: 2.5rem 0 !important;
}

.hero__v6 .hero-subtitle {
  background: var(--bs-secondary);
  color: #fff;
  display: inline-block;
  padding: 5px 12px;
  border-radius: 7px;
  font-weight: 600;
  font-size: 0.75rem;
  margin-bottom: 10px;
}

.hero__v6 .hero-title {
  font-size: 48px;
}

@media (max-width: 1199.98px) {
  .hero__v6 .hero-title {
    font-size: 40px;
  }
}

@media (max-width: 991.98px) {
  .hero__v6 .hero-title {
    font-size: 30px;
  }
}

.hero__v6 .logos .logos-title {
  font-size: 12px;
  letter-spacing: 1px;
  color: color-mix(in srgb, var(--bs-primary), transparent 10%);
}

.hero__v6 .logos img {
  width: 140px;
}

.hero__v6 .hero-img {
  position: relative;
}

.hero__v6 .hero-img .img-main {
  position: relative;
  z-index: 9;
}

.hero__v6 .hero-img .img-card {
  z-index: 10;
  border-radius: 20px;
  -webkit-box-shadow: 0 15px 40px 0 rgba(var(--bs-black-rgb), 0.1);
  box-shadow: 0 15px 40px 0 rgba(var(--bs-black-rgb), 0.1);
  position: absolute;
  max-width: 280px;
  bottom: -40px;
  left: -60px;
}

@media (max-width: 991.98px) {
  .hero__v6 .hero-img .img-card {
    left: 10px;
    max-width: 380px;
  }
}

@media (max-width: 575.98px) {
  .hero__v6 .hero-img .img-card {
    left: 10px;
    max-width: 280px;
  }
}

.features__v2 .icon {
  width: 60px;
  height: 60px;
  line-height: 60px;
  border-radius: 50%;
  background-color: var(--bs-secondary);
  color: var(--bs-primary);
}

.features__v2 .content {
  background-color: rgba(var(--bs-secondary-rgb), 0.2);
}

.features__v2 .btn-play i {
  width: 30px;
  height: 30px;
  line-height: 30px;
  border-radius: 50%;
  background-color: var(--bs-white);
  color: var(--bs-primary);
}

.about__v4 .subtitle {
  background-color: var(--bs-secondary);
  color: var(--bs-white);
  display: inline-block;
  padding: 5px 12px;
  border-radius: 7px;
  font-weight: 600;
  font-size: 0.75rem;
  margin-bottom: 10px;
}

.about__v4 .features li .icon {
  display: inline-block;
  width: 20px;
  height: 20px;
  line-height: 20px;
  background-color: var(--bs-primary);
  color: var(--bs-white);
}

.about__v4 .mission-statement {
  background-color: var(--bs-primary);
  position: relative;
  bottom: -20px;
  width: 100%;
}

.about__v4 .mission-statement h3 {
  font-size: 14px;
  color: var(--bs-secondary);
}

.about__v4 .mission-statement p {
  color: var(--bs-white);
}

.about__v4 .mission-icon {
  width: 50px;
  height: 50px;
  -webkit-box-flex: 0;
  -ms-flex: 0 0 50px;
  flex: 0 0 50px;
  line-height: 50px;
  display: inline-block;
  background-color: rgba(var(--bs-secondary-rgb), 0.1);
}

.about__v4 .mission-icon i {
  color: var(--bs-secondary);
}

.pricing__v2 .subtitle {
  background-color: rgba(var(--bs-secondary-rgb), 0.2);
  color: var(--bs-primary);
  display: inline-block;
  padding: 5px 12px;
  border-radius: 7px;
  font-weight: 600;
  font-size: 0.75rem;
  margin-bottom: 10px;
}

.pricing__v2 .price-table {
  border: 1px solid rgba(var(--inverse-color-rgb), 0.2);
}

.pricing__v2 .price-table .price {
  color: var(--bs-heading-color);
}

.pricing__v2 .price-table .price strong {
  font-size: 40px;
}

.pricing__v2 .price-table .icon {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 20px;
  flex: 0 0 20px;
  width: 20px;
  height: 20px;
  line-height: 20px;
  text-align: center;
  border: 1px solid rgba(var(--bs-white-rgb), 0.2);
}

.pricing__v2 .popular {
  background-color: var(--bs-primary);
  color: var(--bs-white);
}

.pricing__v2 .popular .price {
  color: var(--bs-secondary);
}

.pricing__v2 .popular h3 {
  color: var(--bs-white);
}

.pricing__v2 .popular p {
  color: var(--bs-white);
}

.pricing__v2 .popular .pricing-features h4 {
  font-size: 12px;
  color: var(--bs-secondary);
}

.howitworks__v1 .subtitle {
  background-color: var(--bs-secondary);
  color: var(--bs-white);
  display: inline-block;
  padding: 5px 12px;
  border-radius: 7px;
  font-weight: 600;
  font-size: 0.75rem;
  margin-bottom: 10px;
}

.howitworks__v1 .step-card {
  position: relative;
}

.howitworks__v1 .step-card .step-number {
  width: 60px;
  height: 60px;
  line-height: 60px;
  display: inline-block;
  color: var(--bs-white);
  background-color: var(--bs-secondary);
  font-size: 18px;
}

.howitworks__v1 .arch-line {
  position: absolute;
  top: 15px;
  width: 150px;
  right: 0;
  left: calc(100% + 24px);
  -webkit-transform: translateX(-50%);
  transform: translateX(-50%);
  filter: grayscale(1) brightness(0.2);
}

@media (max-width: 991.98px) {
  .howitworks__v1 .arch-line {
    display: none;
  }
}

.howitworks__v1 .arch-line.reverse {
  top: 20px;
  filter: grayscale(1) brightness(0.2);

}

.services__v3 .subtitle {
  background-color: var(--bs-secondary);
  color: var(--bs-white);
  display: inline-block;
  padding: 5px 12px;
  border-radius: 7px;
  font-weight: 600;
  font-size: 0.75rem;
  margin-bottom: 10px;
}

.services__v3 .icon {
  display: inline-block;
  position: relative;
  color: var(--bs-primary) !important;
}

.services__v3 .icon:before {
  content: "";
  position: absolute;
  z-index: -1;
  width: 40px;
  height: 40px;
  right: -10px;
  bottom: 0px;
  border-radius: 50%;
  background-color: rgba(var(--bs-secondary-rgb), 1);
}

.services__v3 .icon svg {
  width: 50px;
}

.services__v3 .service-card {
  border: 1px solid rgba(var(--inverse-color-rgb), 0.2);
}

.faq__v2 {
  background-color: rgba(var(--inverse-color-rgb), 0.02);
}

.faq__v2 .subtitle {
  background-color: var(--bs-secondary);
  color: var(--bs-white);
  display: inline-block;
  padding: 5px 12px;
  border-radius: 7px;
  font-weight: 600;
  font-size: 0.75rem;
  margin-bottom: 10px;
}

.faq__v2 .custom-accordion {
  --bs-accordion-bg: var(--bs-body-bg);
  --bs-accordion-btn-icon: url("");
  --bs-accordion-btn-active-icon: url("");
}

.faq__v2 .custom-accordion .accordion-button {
  position: relative;
  padding-right: 50px;
}

.faq__v2 .custom-accordion .accordion-button::after {
  content: "\f4fe";
  font-family: "bootstrap-icons" !important;
  font-style: normal;
  font-weight: 400 !important;
  font-variant: normal;
  text-transform: none;
  right: 20px;
  top: 15px;
  width: 18px;
  height: 14px;
  font-size: 30px;
  color: var(--inverse-color);
  -webkit-transform-origin: center center;
  transform-origin: center center;
  -webkit-transform: rotate(0deg);
  transform: rotate(0deg);
  line-height: 1;
  position: absolute;
  -webkit-font-smoothing: antialiased;
}

.faq__v2 .custom-accordion .accordion-button:not(.collapsed)::after {
  -webkit-transform: rotate(0deg);
  transform: rotate(0deg);
  content: "\f2ea";
}

.faq__v2 .custom-accordion .accordion-item {
  border: none;
  margin-bottom: 10px;
  border-radius: 10px;
  overflow: hidden;
  -webkit-transition: 0.3s all ease-in-out;
  transition: 0.3s all ease-in-out;
}

.faq__v2 .custom-accordion .accordion-item .accordion-header .accordion-button {
  outline: none;
  -webkit-box-shadow: none;
  box-shadow: none;
  font-size: 18px;
  font-weight: 500;
  color: var(--bs-heading-color);
  padding-top: 20px;
  padding-bottom: 20px;
  border: none;
}

.faq__v2 .custom-accordion .accordion-item .accordion-header .accordion-button:not(.collapsed) {
  background-color: transparent;
  color: var(--inverse-color);
  -webkit-box-shadow: 0 1px 1px rgba(var(--inverse-color-rgb), 0.05);
  box-shadow: 0 1px 1px rgba(var(--inverse-color-rgb), 0.05);
}

.faq__v2 .custom-accordion .accordion-item .accordion-body {
  border-top: none;
}

.stats__v3 .content {
  padding-top: 70px;
  padding-bottom: 70px;
  background-color: var(--bs-primary);
  color: var(--bs-white);
  overflow: hidden;
  position: relative;
}

.stats__v3 .content h3 {
  color: var(--bs-secondary);
}

.stats__v3 .content .rounded-borders {
  position: absolute;
  bottom: 0;
  right: 0;
  width: 500px;
  height: 500px;
}

.stats__v3 .content .rounded-borders .rounded-border-1,
.stats__v3 .content .rounded-borders .rounded-border-2,
.stats__v3 .content .rounded-borders .rounded-border-3 {
  border: 1px solid var(--bs-secondary);
  width: 500px;
  height: 500px;
  border-radius: 50%;
  position: absolute;
}

.stats__v3 .content .rounded-borders .rounded-border-1 {
  right: 20px;
  top: 20px;
}

.stats__v3 .content .rounded-borders .rounded-border-2 {
  right: 40px;
  top: 40px;
}

.testimonials__v2 .subtitle {
  background-color: rgba(var(--bs-secondary-rgb), 0.2);
  color: var(--bs-primary);
  display: inline-block;
  padding: 5px 12px;
  border-radius: 7px;
  font-weight: 600;
  font-size: 0.75rem;
  margin-bottom: 10px;
}

.testimonials__v2 .testimonial {
  border: 1px solid rgba(var(--inverse-color-rgb), 0.2);
}

.testimonials__v2 .testimonial-author .author-img {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 50px;
  flex: 0 0 50px;
}

.contact__v2 .subtitle {
  background-color: rgba(var(--bs-secondary-rgb), 0.2);
  color: var(--bs-primary);
  display: inline-block;
  padding: 5px 12px;
  border-radius: 7px;
  font-weight: 600;
  font-size: 0.75rem;
  margin-bottom: 10px;
}

.contact__v2 .icon {
  width: 50px;
  height: 50px;
  line-height: 50px;
  text-align: center;
  border: 1px solid rgba(var(--inverse-color-rgb), 0.2);
  border-radius: 50%;
}

.footer {
  background-color: rgba(var(--inverse-color-rgb), 0.02);
  font-size: 15px;
}

.footer h2,
.footer h3,
.footer h4 {
  font-size: 16px;
}

.footer ul li {
  padding: 0;
  margin: 0 0 10px 0;
}

.footer a {
  color: rgba(var(--inverse-color-rgb), 0.6);
  text-decoration: none;
}

.footer a:hover {
  color: var(--inverse-color);
}

.footer a .badge {
  -webkit-transition: 0.3s all ease;
  transition: 0.3s all ease;
  background-color: rgba(var(--bs-primary-rgb), 0.1);
  color: var(--bs-primary);
}

.footer a:hover .badge {
  background-color: rgba(var(--bs-primary-rgb), 1);
  color: var(--bs-white);
}

.footer .quick-contact i {
  color: var(--inverse-color);
}

.footer .credits {
  font-size: 13.5px;
}

#back-to-top {
  position: fixed;
  bottom: 0px;
  right: 20px;
  visibility: hidden;
  opacity: 0;
  background-color: var(--bs-primary);
  color: white;
  border: none;
  border-radius: 50%;
  padding: 10px;
  cursor: pointer;
  -webkit-box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  z-index: 1000;
  width: 40px;
  height: 40px;
}

#back-to-top i {
  font-size: 24px;
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

#back-to-top.show {
  bottom: 20px;
  opacity: 1;
  visibility: visible;
}

.icon-idea {
  color: var(--bs-secondary);
}

.marketing-tool,
.features,
.who-using {
  padding-top: 2rem !important;
  padding-bottom: 2rem !important;
}

.icon-check {
  width: 0.4em !important;
  padding-bottom: 3px;
}

.why-choice-icon {
  color: var(--bs-body-bg) !important;
}
</style>