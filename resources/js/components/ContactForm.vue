<template>
    <!-- BLOCK: form-section -->
    <section class="form-section">
        <div class="form-section__content">
            <!-- BLOCK: contact-form -->
            <div class="contact-form">
                <img class="contact-form__background"
                    src="https://connectx.com.vn/wp-content/themes/astra-child/assets/imgs/imgBgForm.jpg" alt="Background Image">

                <div class="contact-form__content">
                    <h2 class="contact-form__title">
                        <span class="contact-form__title--highlight">Kết nối</span>
                        khách hàng -
                        <span class="contact-form__title--highlight">Gia tăng</span>
                        doanh số
                    </h2>
                    <h4 class="contact-form__subtitle">
                        Gia tăng doanh số với giải pháp Digital Marketing của Dimaso
                    </h4>

                    <!-- Các class của plugin Contact Form 7 được giữ nguyên -->
                    <div class="wpcf7 js" id="wpcf7-f6-o1" lang="vi" dir="ltr">
                        <div class="screen-reader-response">
                            <p role="status" aria-live="polite" aria-atomic="true"></p>
                            <ul></ul>
                        </div>
                        <form @submit.prevent="sendContactMail" @keydown="form.onKeydown($event)" method="post" class="wpcf7-form init contact-form__form"
                            aria-label="Form liên hệ" novalidate="novalidate" data-status="init">

                            <div class="contact-form__group">
                                <!-- ELEMENT: input-wrapper -->
                                <div class="contact-form__input-wrapper">
                                    <img class="contact-form__icon" src="https://connectx.com.vn/wp-content/uploads/2024/04/icFormProfileFill.svg" alt="User Icon">
                                    <div class="contact-form__field-container">
                                        <span class="wpcf7-form-control-wrap" data-name="your_name">
                                            <input v-model="form.your_name" :class="{ 'is-invalid': form.errors.has('your_name') }" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required contact-form__input" id="nameInput" aria-required="true" aria-invalid="false" type="text" name="your_name">
                                        </span>
                                        <label for="nameInput" class="contact-form__label">
                                            Họ và tên<span class="contact-form__required">*</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="contact-form__input-wrapper">
                                    <img class="contact-form__icon" src="https://connectx.com.vn/wp-content/uploads/2024/04/icFormMail.svg" alt="Mail Icon">
                                    <div class="contact-form__field-container">
                                        <span class="wpcf7-form-control-wrap" data-name="your_mail">
                                            <input v-model="form.your_mail" :class="{ 'is-invalid': form.errors.has('your_mail') }" size="40" class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email contact-form__input" id="mailInput" aria-required="true" aria-invalid="false" type="email" name="your_mail">
                                        </span>
                                        <label for="mailInput" class="contact-form__label">
                                            Email<span class="contact-form__required">*</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="contact-form__input-wrapper">
                                    <img class="contact-form__icon" src="https://connectx.com.vn/wp-content/uploads/2024/04/icFormPhone.svg" alt="Phone Icon">
                                    <div class="contact-form__field-container">
                                        <span class="wpcf7-form-control-wrap" data-name="your_phone">
                                            <input v-model="form.your_phone" :class="{ 'is-invalid': form.errors.has('your_phone') }" size="40" class="wpcf7-form-control wpcf7-tel wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-tel contact-form__input" id="phoneInput" aria-required="true" aria-invalid="false" type="tel" name="your_phone">
                                        </span>
                                        <label for="phoneInput" class="contact-form__label">
                                            Số điện thoại<span class="contact-form__required">*</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="contact-form__input-wrapper">
                                    <img class="contact-form__icon" src="https://connectx.com.vn/wp-content/uploads/2024/04/icFormMessage.svg" alt="Message Icon">
                                    <div class="contact-form__field-container">
                                        <span class="wpcf7-form-control-wrap" data-name="your_message">
                                            <input v-model="form.your_message" :class="{ 'is-invalid': form.errors.has('your_message') }" size="40" class="wpcf7-form-control wpcf7-text contact-form__input" id="messageInput" aria-invalid="false" type="text" name="your_message">
                                        </span>
                                        <label for="messageInput" class="contact-form__label">Lời nhắn</label>
                                    </div>
                                </div>
                            </div>

                            <div class="contact-form__submit-wrapper">
                                <input :disabled="form.busy" class="dimaso-btn dimaso-btn-primary contact-form__submit-button" type="submit" value="Nhận tư vấn ngay">
                                <span class="wpcf7-spinner"></span>
                            </div>

                            <div class="wpcf7-response-output" aria-hidden="true"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import Form from 'vform'
export default {
  name: 'ContactForm',

  data: () => ({
    form: new Form({
      your_name: '',
      your_mail: '',
      your_phone: '',
      your_message: ''
    })
  }),

  methods: {
    async sendContactMail () {
      try {
        const { data } = await this.form.post('/api/send-mail-contact')

        alert('Cảm ơn bạn đã liên hệ! Chúng tôi sẽ phản hồi sớm nhất có thể.');
        this.form.reset(); 

        const wrappers = document.querySelectorAll('.contact-form__input-wrapper');
        wrappers.forEach(wrapper => {
            wrapper.classList.remove('is-active');
        });

      } catch (error) {
        console.error('Đã có lỗi xảy ra:', error);
        alert('Gửi liên hệ thất bại. Vui lòng thử lại sau.');
      }
    }
  },

  mounted() {
    const inputs = document.querySelectorAll('.contact-form__input');

    inputs.forEach(input => {
      const wrapper = input.closest('.contact-form__input-wrapper');

      if (input.value.trim() !== '') {
          wrapper.classList.add('is-active');
      }

      input.addEventListener('focus', () => {
        wrapper.classList.add('is-active');
      });

      input.addEventListener('blur', () => {
        if (input.value.trim() === '') {
          wrapper.classList.remove('is-active');
        }
      });
    });
  }
}
</script>


<style scoped>
:root {
  --width-container: 1280px;
  --breakpoint-md: 768px;
  --breakpoint-lg: 1024px;
}

/* ================================================= */
/*             BLOCK: form-section                   */
/* ================================================= */
.form-section {
  position: relative;
  width: 100%;
  padding: 0 1rem;
  box-sizing: border-box;
}

/* ================================================= */
/*             BLOCK: contact-form                   */
/* ================================================= */
.contact-form {
  position: relative;
  margin-top: 1.5rem;
  overflow: hidden;
  border-radius: 32px;
  background-color: white;
  width: 100%;
  max-width: var(--width-container);
  margin-left: auto;
  margin-right: auto;
}

.contact-form__background {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  opacity: 0.08;
  z-index: 10;
}

.contact-form__content {
  position: relative;
  z-index: 20;
  padding: 1.5rem;
  text-align: center;
}

.contact-form__title--highlight {
  font-weight: 600;
  color: #f98500;
}

.contact-form__subtitle {
  margin-top: 0.75rem;
  display: block;
}

.contact-form__form {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 1.5rem;
  margin-top: 1rem;
}

.contact-form__group {
  display: grid;
  width: 100%;
  grid-template-columns: 1fr;
  gap: 0.75rem;
}

.contact-form__input-wrapper {
  position: relative;
  display: flex;
  align-items: center;
  gap: 1rem;
  width: 100%;
  border: 1px solid #a1a1aa;
  background-color: white;
  border-radius: 0.5rem;
  padding: 1rem 1.25rem;
}

.contact-form__icon {
    flex-shrink: 0;
}

.contact-form__field-container {
  position: relative;
  width: 100%;
}

.contact-form__input {
  width: 100%;
  outline: none;
  border: none;
  background: transparent;
  position: relative;
  z-index: 2;
}

.contact-form__input.is-invalid {
}
.contact-form__input-wrapper .is-invalid {
}
/* NEW CODE END */

.contact-form__label {
  pointer-events: none;
  position: absolute;
  left: 0;
  top: 50%;
  transform: translateY(-50%);
  color: #aeaeae;
  transition: all 0.2s ease;
  z-index: 1;
}

.contact-form__required {
  color: red;
  margin-left: 2px;
}

/* Kỹ thuật "Floating Label" với JavaScript */
/* Khi wrapper có class 'is-active', label sẽ di chuyển lên trên */
.contact-form__input-wrapper.is-active .contact-form__label {
  top: -10px;
  font-size: 0.75rem;
  background-color: white;
  padding: 0 4px;
  color: #f98500; /* Thay đổi màu label khi active để UX tốt hơn */
}

/* Làm nổi bật border khi focus */
.contact-form__input-wrapper.is-active {
    border-color: #f98500;
}


/* ================================================= */
/*             RESPONSIVE STYLES                     */
/* ================================================= */
@media (min-width: 768px) {
  .contact-form__content {
    padding: 2.5rem 4rem 3.5rem;
  }
}

@media (min-width: 1024px) {
  .form-section {
    width: 80%;
    max-width: var(--width-container);
    margin-left: auto;
    margin-right: auto;
    height: 500px;
    margin-bottom: 2rem;
  }
  .form-section__content {
    position: absolute;
    top: 2.5rem;
    left: 50%;
    transform: translateX(-50%);
    width: 100%;
    padding: 0 1rem;
  }
  .contact-form {
    margin-left: auto;
    margin-right: auto;
    min-height: 495px;
  }
  .contact-form__form {
    gap: 2.5rem;
    padding: 3.5rem 8rem 0;
  }
  .contact-form__group {
    grid-template-columns: repeat(2, 1fr);
    gap: 1.5rem;
  }
  .contact-form__input-wrapper {
    padding: 1.25rem 1.5rem;
  }
}
</style>