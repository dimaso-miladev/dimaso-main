import Vue from 'vue'
import { library, config } from '@fortawesome/fontawesome-svg-core'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

// import { } from '@fortawesome/free-regular-svg-icons'

import {
  faUser, faLock, faSignOutAlt, faCog,
  faEye,
  faEyeDropper,
  faEyeSlash,
  faArrowAltCircleRight,
  faArrowRight,
  faCircle,
  faEnvelope,
  faPhone,
  faComment,
  faLightbulb,
  faListUl,
  faChartLine,
  faChartBar,
  faChartPie,
} from '@fortawesome/free-solid-svg-icons'

import {
  faEdge,
  faEvernote,
  faFacebook,
  faFacebookF,
  faGithub,
  faGoogle,
  faTelegram
} from '@fortawesome/free-brands-svg-icons'

config.autoAddCss = false

library.add(
  faUser, faLock,faListUl, faSignOutAlt, faCog, faGithub,faGoogle, faEye, faEyeSlash, faArrowRight, faArrowAltCircleRight, faFacebookF, faEnvelope, faPhone, faComment, faLightbulb,
faChartLine,faChartPie)

Vue.component('Fa', FontAwesomeIcon)
