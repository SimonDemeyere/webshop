/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// Laravel Bootstrap
require('./bootstrap');

// Node Modules
require('waypoints/lib/jquery.waypoints.min');

require('flatpickr/dist/flatpickr.min');
require('jquery-knob/js/jquery.knob');
require('jquery-sparkline/jquery.sparkline.min');
require('flot-charts');

require('datatables.net/js/jquery.dataTables.min');
require('datatables.net-bs4/js/dataTables.bootstrap4.min');
require('datatables.net-responsive/js/dataTables.responsive.min');
require('datatables.net-responsive-bs4/js/responsive.bootstrap4.min');
require('datatables.net-buttons/js/dataTables.buttons.min');
require('datatables.net-buttons-bs4/js/buttons.bootstrap4.min');
require('datatables.net-buttons/js/buttons.html5.min');
require('datatables.net-buttons/js/buttons.flash.min');
require('datatables.net-buttons/js/buttons.print.min');
require('datatables.net-keytable/js/dataTables.keyTable.min');
require('datatables.net-select/js/dataTables.select.min');

require('metismenu');
require('jquery-slimscroll');
require('jquery.counterup');
// require('jquery-waypoints/waypoints.min');

// Custom JS
require('./custom_front');
require('./custom');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
