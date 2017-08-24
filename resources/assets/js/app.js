import * as APP_STYLES from '../sass/app.scss';
import Vue from 'vue';
// Components
Vue.component('data-table', () => import('./pages/datatables'));

new Vue({
    el: 'body'
});