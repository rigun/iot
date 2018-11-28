require('./bootstrap');

window.Vue = require('vue');
import Buefy from 'buefy';
import router from './routes.js';
import * as VueGoogleMaps from 'vue2-google-maps'

window.VueRouter = require('vue-router').default;
window.axios = require('axios').default;
Vue.use(Buefy,{ defaultIconPack: 'fa' }, VueRouter, axios);
      Vue.use(VueGoogleMaps, {
        load: {
          key: "AIzaSyC4m3960a0NxbUHCNND05Us9fwb0MSJvoI",
          libraries: "places" // necessary for places input
        }
      });

const AppLayout = Vue.component('app-layout', require('./components/appLayout.vue'))

new Vue(
    Vue.util.extend(
        {router},
        AppLayout,
        VueGoogleMaps
    )
).$mount('#mainLayout');