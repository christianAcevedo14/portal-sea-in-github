
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import Dashboard from "../../../Modules/Sise/Resources/assets/js/components/Dashboard";
import Program from "../../../Modules/Sise/Resources/assets/js/components/Program";
import Matter from "../../../Modules/Sise/Resources/assets/js/components/Matter";

require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router'

Vue.use(VueRouter);

import { Form, HasError, AlertError } from 'vform'

window.Form = Form;
Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);

import VueProgressBar from 'vue-progressbar'

Vue.use(VueProgressBar, {
    color: 'rgb(143, 255, 199)',
    failedColor: 'red',
    height: '10px'
});
import Swal from 'sweetalert2'

import Program from "../../../Modules/Sise/Resources/assets/js/components/Program";
import Enterprise from "../../../Modules/Sise/Resources/assets/js/components/Enterprise";
window.Swal = Swal;
const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    onOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer);
        toast.addEventListener('mouseleave', Swal.resumeTimer);
    }
});
window.Toast = Toast;
window.Fire = new Vue();


Vue.component('pagination', require('laravel-vue-pagination'));
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const routes = [
    { path: '/sise/enterprise', component: Enterprise },
    { path: '/sise/dashboard', component: Dashboard },
    { path: '/sise/program', component: Program },
    { path: '/sise/matter', component: Matter },
    { path: '/sise/*', component: Dashboard },
    { path: '/*', component: Dashboard },
];
const router = new VueRouter({
    mode: 'history',
    routes // short for `routes: routes`
});

// Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('notifications', require('./components/Notifications.vue').default);
Vue.component('pow', require('../../../Modules/Sise/Resources/assets/js/components/Pow.vue').default);
Vue.component('pow-row', require('../../../Modules/Sise/Resources/assets/js/components/PowRow.vue').default);
Vue.component('edit-pow', require('../../../Modules/Sise/Resources/assets/js/components/EditPow.vue').default);
Vue.component('contactos-logros', require('../../../Modules/Sise/Resources/assets/js/components/ContactosLogros.vue').default);
/*
Vue.component('scholarships-component', require('../../../Modules/Volunteer/Resources/assets/js/components/ScholarshipsComponent.vue').default);
Vue.component('licences-component', require('../../../Modules/Volunteer/Resources/assets/js/components/LicencesComponent.vue').default);
Vue.component('references-component', require('../../../Modules/Volunteer/Resources/assets/js/components/ReferencesComponent.vue').default);
Vue.component('documents-component', require('../../../Modules/Volunteer/Resources/assets/js/components/DocumentsComponent.vue').default);
Vue.component('programmatic-areas-component', require('../../../Modules/Volunteer/Resources/assets/js/components/ProgrammaticAreasComponent.vue').default);
*/
Vue.component('historia-component', require('../../../Modules/Sise/Resources/assets/js/components/historia-component.vue').default);


const app = new Vue({
    el: '#app',
    router,
    data: {
        search: ''
    },
    methods: {
        searchit(){
            console.log("searching...");
            Fire.$emit('searching');
        }
    }
});





