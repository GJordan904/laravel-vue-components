// Import vue, axios and vue-axios
// Setup default headers and configure vue to use axios.
// This means we can call axios inside our vue components with this.axios or Vue.axios
import Vue from 'vue';
import axios from 'axios';
import VueAxios from 'vue-axios';
Vue.use(VueAxios, axios);
axios.defaults.headers.common['X-CSRF-TOKEN'] = window.Laravel.csrfToken;
axios.defaults.headers.common['X-Requested-With'] = 'XmlHttpRequest';

import 'jquery';
require('bootstrap-sass');