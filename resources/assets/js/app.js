
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import Swal from 'sweetalert2'
import Dashboard from "../../../Modules/Sise/Resources/assets/js/components/Dashboard";
import Program from "../../../Modules/Sise/Resources/assets/js/components/Program";
import Matter from "../../../Modules/Sise/Resources/assets/js/components/Matter";
import Enterprise from "../../../Modules/Sise/Resources/assets/js/components/Enterprise";
import Audience from "../../../Modules/Sise/Resources/assets/js/components/Audience";
import Course from "../../../Modules/Sise/Resources/assets/js/components/Course";
import Objective from "../../../Modules/Sise/Resources/assets/js/components/Objective";
import Indicator from "../../../Modules/Sise/Resources/assets/js/components/Indicator";
import Plan from "../../../Modules/Sise/Resources/assets/js/components/Plan";
import VueRouter from 'vue-router'
import VueProgressBar from 'vue-progressbar'
import { Form, HasError, AlertError } from 'vform'
import IndicatorsPlanned from "../../../Modules/Sise/Resources/assets/js/components/IndicatorsPlanned";
import InformesIndex from "../../../Modules/Sise/Resources/assets/js/components/InformesIndex";
import Informes from "../../../Modules/Sise/Resources/assets/js/components/Informes";
import Achievements from "../../../Modules/Sise/Resources/assets/js/components/Achievements";
import Contacts from "../../../Modules/Sise/Resources/assets/js/components/Contacts";
import Historias from "../../../Modules/Sise/Resources/assets/js/components/Historias";
import ApproveInformes from "../../../Modules/Sise/Resources/assets/js/components/ApproveInformes";


require('./bootstrap');

window.Vue = require('vue');

Vue.use(VueRouter);

window.Form = Form;
Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);

Vue.use(VueProgressBar, {
    color: 'rgb(45, 137, 240)',
    failedColor: 'red',
    height: '10px'
});

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

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const routes = [
    { path: '/sise/indicators_planned', component: IndicatorsPlanned},
    { path: '/sise/enterprise', component: Enterprise },
    { path: '/sise/dashboard', component: Dashboard },
    { path: '/sise/indicator', component: Indicator },
    { path: '/sise/objective', component: Objective },
    { path: '/sise/audience', component: Audience },
    { path: '/sise/program', component: Program },
    { path: '/sise/informes_index', component: InformesIndex},
    { path: '/sise/approve_informes', component: ApproveInformes},
    { path: '/sise/informes', component: Informes , children: [
            {
                path: 'contacts',
                component: Contacts
            },
            {
                path: 'achievements',
                component: Achievements
            },
            {
                path: 'historias',
                component: Historias
            }
        ]
    },
    { path: '/sise/matter', component: Matter },
    { path: '/sise/course', component: Course },
    { path: '/sise/plan', component: Plan },
    { path: '/sise/*', component: Dashboard },
    { path: '/*', component: Dashboard },
];
const router = new VueRouter({
    mode: 'history',
    routes // short for `routes: routes`
});

// Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('pagination', require('laravel-vue-pagination'));
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


Vue.component('contacts', require('../../../Modules/Sise/Resources/assets/js/components/Contacts.vue').default);
Vue.component('achievements', require('../../../Modules/Sise/Resources/assets/js/components/Achievements.vue').default);
Vue.component('historia', require('../../../Modules/Sise/Resources/assets/js/components/Historias.vue').default);


//Directives
Vue.directive('tooltip', function(el,binding){
    $(el).tooltip({
        title: binding.value,
        placement: binding.arg,
        trigger: 'hover',
        boundary: 'viewpoint',
    })
});


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





