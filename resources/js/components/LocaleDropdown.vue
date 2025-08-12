<template>
  <li v-if="Object.keys(locales).length > 1" class="nav-item dropdown">
    <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button"
       data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
    >
      <img :src="locales[locale].flag" alt="Flag" class="language-flag">
      {{ locales[locale].name }}
    </a>
    <div class="dropdown-menu">
      <a v-for="(value, key) in locales" :key="key" class="dropdown-item d-flex align-items-center" href="#"
         @click.prevent="setLocale(key)"
      >
        <img :src="value.flag" alt="Flag" class="language-flag">
        {{ value.name }}
      </a>
    </div>
  </li>
</template>

<script>
import { mapGetters } from 'vuex'
import { loadMessages } from '~/plugins/i18n'

export default {
  computed: mapGetters({
    locale: 'lang/locale',
    locales: 'lang/locales'
  }),

  methods: {
    setLocale (locale) {
      if (this.$i18n.locale !== locale) {
        loadMessages(locale)
        this.$store.dispatch('lang/setLocale', { locale })
      }
    }
  }
}
</script>

<style scoped>
.language-flag {
  width: 24px; 
  height: auto;
  margin-right: 8px; 
  border-radius: 15px;
}

.dropdown-menu .dropdown-item {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}
</style>
