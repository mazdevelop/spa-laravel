import Vue from 'vue';
require('./bootstrap');
import routes from './router/index.js';
import { ValidationProvider } from "vee-validate/dist/vee-validate.full.esm";
import { ValidationObserver } from "vee-validate";

Vue.component("ValidationProvider", ValidationProvider);
Vue.component("ValidationObserver", ValidationObserver);

Vue.component('spa-admin', require('./pages/Admin.vue').default);


const app = new Vue({
    el: '#app',
    router: routes
});
