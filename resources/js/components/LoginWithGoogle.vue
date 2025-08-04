<template>
  <button type="button" class="btn google-btn">
    <fa :icon="['fab', 'google']" /> Đăng nhập với Google
  </button>
</template>

<script>
export default {
  name: 'LoginWithGoogle',

  computed: {
    googleAuth: () => window.config.googleAuth,
    url: () => '/api/oauth/google'
  },

  mounted () {
    window.addEventListener('message', this.onMessage, false)
  },

  beforeDestroy () {
    window.removeEventListener('message', this.onMessage)
  },

  methods: {
    async login () {
      const newWindow = openWindow('', this.$t('login'))

      const url = await this.$store.dispatch('auth/fetchOauthUrl', {
        provider: 'google'
      })

      newWindow.location.href = url
    },

    /**
     * @param {MessageEvent} e
     */
    onMessage (e) {
      if (e.origin !== window.origin || !e.data.token) {
        return
      }

      this.$store.dispatch('auth/saveToken', {
        token: e.data.token
      })

      this.$router.push({ name: 'home' })
    }
  }
}

/**
 * @param  {Object} options
 * @return {Window}
 */
function openWindow (url, title, options = {}) {
  if (typeof url === 'object') {
    options = url
    url = ''
  }

  options = { url, title, width: 600, height: 720, ...options }

  const dualScreenLeft = window.screenLeft !== undefined ? window.screenLeft : window.screen.left
  const dualScreenTop = window.screenTop !== undefined ? window.screenTop : window.screen.top
  const width = window.innerWidth || document.documentElement.clientWidth || window.screen.width
  const height = window.innerHeight || document.documentElement.clientHeight || window.screen.height

  options.left = ((width / 2) - (options.width / 2)) + dualScreenLeft
  options.top = ((height / 2) - (options.height / 2)) + dualScreenTop

  const optionsStr = Object.keys(options).reduce((acc, key) => {
    acc.push(`${key}=${options[key]}`)
    return acc
  }, []).join(',')

  const newWindow = window.open(url, title, optionsStr)

  if (window.focus) {
    newWindow.focus()
  }

  return newWindow
}
</script>

<style scoped>
.google-btn {
  background-color: #DB4437;
  /* Màu đỏ của Google */
  color: white;
  border: none;
  border-radius: 8px;
  padding: 12px 0;
  font-size: 1.1rem;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  /* Khoảng cách giữa icon và chữ */
  transition: background-color 0.2s ease-in-out;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.google-btn:hover {
  background-color: #c33d31;
  /* Màu đỏ đậm hơn khi hover */
  color: white;
  /* Đảm bảo chữ vẫn trắng khi hover */
}

.google-btn .fab {
  font-size: 1.3rem;
  /* Kích thước icon Google */
}
</style>
