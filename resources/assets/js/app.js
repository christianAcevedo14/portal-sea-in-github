/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


require('./bootstrap');

window.Vue = require('vue');
import { Form, HasError, AlertError } from 'vform';

window.Form = Form;

import VueRouter from 'vue-router'
import Informes from "../../../Modules/Sise/Resources/assets/js/components/Informes";
import Dashboard from "../../../Modules/Sise/Resources/assets/js/components/Dashboard";
Vue.use(VueRouter);

let routes = [
    {path: '/sise/informes', component: Informes},
    {path: '/sise/dashboard', component: Dashboard},
    {path: '/sise/*', redirect: '/sise/dashboard'}

];
const router = new VueRouter({
    mode: 'history',
    routes
});

// const app = new Vue({
//     el: '#app',
//     router
// });

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('notifications', require('./components/Notifications.vue').default);
Vue.component('pow', require('../../../Modules/Sise/Resources/assets/js/components/Pow.vue').default);
Vue.component('pow-row', require('../../../Modules/Sise/Resources/assets/js/components/PowRow.vue').default);
Vue.component('edit-pow', require('../../../Modules/Sise/Resources/assets/js/components/EditPow.vue').default);
Vue.component('contactos-logros', require('../../../Modules/Sise/Resources/assets/js/components/ContactosLogros.vue').default);
Vue.component('scholarships-component', require('../../../Modules/Volunteer/Resources/assets/js/components/ScholarshipsComponent.vue').default);
Vue.component('licences-component', require('../../../Modules/Volunteer/Resources/assets/js/components/LicencesComponent.vue').default);
Vue.component('references-component', require('../../../Modules/Volunteer/Resources/assets/js/components/ReferencesComponent.vue').default);
Vue.component('documents-component', require('../../../Modules/Volunteer/Resources/assets/js/components/DocumentsComponent.vue').default);
Vue.component('programmatic-areas-component', require('../../../Modules/Volunteer/Resources/assets/js/components/ProgrammaticAreasComponent.vue').default);
Vue.component('historia-component', require('../../../Modules/Sise/Resources/assets/js/components/historia-component.vue').default);
Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);

const app = new Vue({
    el: '#app',
    router
});





