require('./bootstrap');

window.$ = require('jquery');
require('@fortawesome/fontawesome-free')

import Vue from 'vue'

import Dashboard from '../components/dashboard.vue'
import Grid from '../components/grid.vue'

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    components: { Dashboard, Grid }
});
