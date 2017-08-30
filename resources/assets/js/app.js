import '../sass/app.scss';
import Vue from 'vue';
import axios from 'axios';
import VueAxios from 'vue-axios';
import highlighter from './directives/highlighter';
import CodePrev from './globals/code-prev.vue';

Vue.use(VueAxios, axios);
axios.defaults.headers.common['X-CSRF-TOKEN'] = window.Laravel.csrfToken;
axios.defaults.headers.common['X-Requested-With'] = 'XmlHttpRequest';

// Global Components
Vue.component('code-prev', CodePrev);

// Page Components
Vue.component('data-tables', () => import('./pages/datatables.vue'));
Vue.component('tabs-page', () => import('./pages/tabs.vue'));

// Directives
Vue.directive('highlighter', highlighter);

new Vue({
    el: '#app'
});