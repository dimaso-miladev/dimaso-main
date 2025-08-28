<template>
  <div class="row register-container">
    <div class="register-box">
      <!-- Thông báo verify email nếu cần -->
      <div v-if="mustVerifyEmail" class="alert alert-success mb-4">
        <fa :icon="['fa', 'envelope']" class="me-2" />
        Vui lòng kiểm tra email của bạn để xác thực tài khoản.
      </div>

      <form @submit.prevent="register" v-else> 
        <div class="row mb-3">
          <div class="col-md-6">
            <label for="first_name" class="form-label">Tên <span class="text-danger">*</span></label>
            <input 
              type="text" 
              class="form-control" 
              :class="{ 'is-invalid': form.errors.has('first_name') }"
              id="first_name" 
              placeholder="Nhập tên của bạn" 
              required
              v-model="form.first_name">
            <div v-if="form.errors.has('first_name')" class="invalid-feedback">
              {{ form.errors.get('first_name') }}
            </div>
          </div>
          <div class="col-md-6">
            <label for="last_name" class="form-label">Họ <span class="text-danger">*</span></label>
            <input 
              type="text" 
              class="form-control" 
              :class="{ 'is-invalid': form.errors.has('last_name') }"
              id="last_name" 
              placeholder="Nhập họ của bạn" 
              required
              v-model="form.last_name">
            <div v-if="form.errors.has('last_name')" class="invalid-feedback">
              {{ form.errors.get('last_name') }}
            </div>
          </div>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
          <input 
            type="email" 
            class="form-control" 
            :class="{ 'is-invalid': form.errors.has('email') }"
            id="email" 
            placeholder="Nhập địa chỉ email" 
            required
            v-model="form.email">
          <div v-if="form.errors.has('email')" class="invalid-feedback">
            {{ form.errors.get('email') }}
          </div>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Mật khẩu <span class="text-danger">*</span></label>
          <div class="input-group">
            <input 
              :type="showPassword ? 'text' : 'password'" 
              class="form-control" 
              :class="{ 'is-invalid': form.errors.has('password') }"
              id="password"
              placeholder="Nhập mật khẩu của bạn (tối thiểu 6 ký tự)" 
              required 
              minlength="6"
              v-model="form.password">
            <span class="input-group-text password-toggle-btn" @click="togglePasswordVisibility">
              <fa :icon="['fa', showPassword ? 'eye-slash' : 'eye']" />
            </span>
            <div v-if="form.errors.has('password')" class="invalid-feedback d-block">
              {{ form.errors.get('password') }}
            </div>
          </div>
        </div>
        <div class="mb-4">
          <label for="password_confirmation" class="form-label">Xác nhận mật khẩu <span class="text-danger">*</span></label>
          <div class="input-group">
            <input 
              :type="showConfirmPassword ? 'text' : 'password'" 
              class="form-control" 
              :class="{ 'is-invalid': form.errors.has('password_confirmation') }"
              id="password_confirmation"
              placeholder="Xác nhận lại mật khẩu" 
              required 
              v-model="form.password_confirmation">
            <span class="input-group-text password-toggle-btn" @click="toggleConfirmPasswordVisibility">
              <fa :icon="['fa', showConfirmPassword ? 'eye-slash' : 'eye']" />
            </span>
            <div v-if="form.errors.has('password_confirmation')" class="invalid-feedback d-block">
              {{ form.errors.get('password_confirmation') }}
            </div>
          </div>
        </div>
        <div class="d-grid mb-3">
          <button type="submit" class="btn btn-primary" :disabled="form.busy">
            <span v-if="form.busy">
              <span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>
              Đang xử lý...
            </span>
            <span v-else>Đăng Ký</span>
          </button>
        </div>
        <div class="text-muted-separator">
          Hoặc
        </div>
        <div class="d-grid mb-3">
          <!-- Google Register Button -->
          <login-with-google />
        </div>
        <div class="text-center">
          <p class="text-muted">
            Đã có tài khoản? 
            <router-link :to="{ name: 'login' }" class="text-decoration-none">
              Đăng nhập ngay
            </router-link>
          </p>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
import Form from 'vform'
import LoginWithGoogle from '~/components/LoginWithGoogle.vue'

export default {
  components: {
    LoginWithGoogle
  },

  middleware: 'guest',

  metaInfo () {
    return { title: 'Đăng ký tài khoản' }
  },

  data: () => ({
    form: new Form({
      first_name: '', 
      last_name: '', 
      email: '',
      password: '',
      password_confirmation: ''
    }),

    mustVerifyEmail: false,
    showPassword: false, 
    showConfirmPassword: false 
  }),

  methods: {
    async register () {
      try {
        // Clear previous errors
        this.form.errors.clear()
        
        // Submit registration
        const { data } = await this.form.post('/api/register')

        // Check if email verification is required
        if (data.status && data.status === 'verification.sent') {
          this.mustVerifyEmail = true
          this.$toast.success('Đăng ký thành công! Vui lòng kiểm tra email để xác thực tài khoản.')
        } else if (data.success && data.data) {
          // Registration successful, auto login
          await this.autoLogin()
        }
      } catch (error) {
        // Handle specific validation errors
        if (error.response && error.response.status === 422) {
          this.$toast.error('Vui lòng kiểm tra lại thông tin đăng ký.')
        } else {
          this.$toast.error('Đã xảy ra lỗi trong quá trình đăng ký. Vui lòng thử lại.')
          console.error('Lỗi đăng ký:', error)
        }
      }
    },

    async autoLogin() {
      try {
        // Auto login after successful registration
        const loginForm = new Form({
          email: this.form.email,
          password: this.form.password
        })
        
        const { data: loginData } = await loginForm.post('/api/login')
        
        // Save token and user data
        if (loginData.token) {
          await this.$store.dispatch('auth/saveToken', { token: loginData.token })
          await this.$store.dispatch('auth/fetchUser')
          
          this.$toast.success('Đăng ký thành công! Chào mừng bạn.')
          this.$router.push({ name: 'home' })
        }
      } catch (error) {
        // If auto-login fails, redirect to login page
        this.$toast.info('Đăng ký thành công! Vui lòng đăng nhập.')
        this.$router.push({ name: 'login' })
      }
    },

    togglePasswordVisibility () {
      this.showPassword = !this.showPassword
    },

    toggleConfirmPasswordVisibility () {
      this.showConfirmPassword = !this.showConfirmPassword
    }
  }
}
</script>

<style scoped>
.register-container {
  display: flex;
  justify-content: center;
  min-height: calc(100vh - 200px);
  align-items: center;
}

.register-box {
  max-width: 650px;
  width: 90%;
  padding: 40px;
  border-radius: 12px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
  background-color: #ffffff;
}

.register-box h2 {
  color: #333;
  margin-bottom: 30px;
  font-weight: 600;
}

.form-label {
  font-weight: 500;
  color: #555;
  margin-bottom: 8px;
}

.form-control {
  border-radius: 8px;
  padding: 12px 15px;
  border: 1px solid #ddd;
  transition: border-color 0.2s ease-in-out;
}

.form-control:focus {
  border-color: #86b7fe;
  box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
}

.form-control.is-invalid {
  border-color: #dc3545;
  padding-right: calc(1.5em + .75rem);
  background-image: none;
}

.input-group-text.password-toggle-btn {
  background-color: #f8f9fa;
  border: 1px solid #ddd;
  border-left: none;
  border-radius: 0 8px 8px 0;
  cursor: pointer;
  padding: 12px 15px;
  display: flex;
  align-items: center;
  color: #6c757d;
  transition: color 0.2s ease-in-out;
}

.input-group-text.password-toggle-btn:hover {
  color: #343a40;
}

.input-group .is-invalid ~ .input-group-text {
  border-color: #dc3545;
}

.btn-primary {
  background-color: #007bff;
  border-color: #007bff;
  border-radius: 8px;
  padding: 12px 0;
  font-size: 1.1rem;
  font-weight: 600;
  transition: all 0.2s ease-in-out;
}

.btn-primary:hover:not(:disabled) {
  background-color: #0056b3;
  border-color: #0056b3;
  transform: translateY(-1px);
}

.btn-primary:disabled {
  opacity: 0.65;
  cursor: not-allowed;
}

.text-muted-separator {
  display: flex;
  align-items: center;
  text-align: center;
  color: #999;
  margin: 25px 0;
}

.text-muted-separator::before,
.text-muted-separator::after {
  content: '';
  flex: 1;
  border-bottom: 1px solid #eee;
}

.text-muted-separator:not(:empty)::before {
  margin-right: .5em;
}

.text-muted-separator:not(:empty)::after {
  margin-left: .5em;
}

.invalid-feedback {
  display: block;
  margin-top: .25rem;
  font-size: .875em;
  color: #dc3545;
}

.spinner-border-sm {
  width: 1rem;
  height: 1rem;
  border-width: 0.2em;
}

.alert {
  border-radius: 8px;
  padding: 15px 20px;
}

.text-danger {
  color: #dc3545;
}
</style>