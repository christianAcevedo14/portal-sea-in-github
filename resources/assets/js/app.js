
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import Swal from 'sweetalert2'
import VueRouter from 'vue-router'
import VueProgressBar from 'vue-progressbar'
import VueApexCharts from 'vue-apexcharts'
import { Form, HasError, AlertError } from 'vform'
import moment from 'moment';
import Dashboard from "../../../Modules/Sise/Resources/assets/js/components/Dashboard";
import Program from "../../../Modules/Sise/Resources/assets/js/components/Program";
import Matter from "../../../Modules/Sise/Resources/assets/js/components/Matter";
import Enterprise from "../../../Modules/Sise/Resources/assets/js/components/Enterprise";
import Audience from "../../../Modules/Sise/Resources/assets/js/components/Audience";
import Course from "../../../Modules/Sise/Resources/assets/js/components/Course";
import Objective from "../../../Modules/Sise/Resources/assets/js/components/Objective";
import Indicator from "../../../Modules/Sise/Resources/assets/js/components/Indicator";
import Plan from "../../../Modules/Sise/Resources/assets/js/components/Plan";
import IndicatorsPlanned from "../../../Modules/Sise/Resources/assets/js/components/IndicatorsPlanned";
import InformesIndex from "../../../Modules/Sise/Resources/assets/js/components/InformesIndex";
import Informes from "../../../Modules/Sise/Resources/assets/js/components/Informes";
import Achievements from "../../../Modules/Sise/Resources/assets/js/components/Achievements";
import Contacts from "../../../Modules/Sise/Resources/assets/js/components/Contacts";
import Historias from "../../../Modules/Sise/Resources/assets/js/components/Historias";
import ApproveInformes from "../../../Modules/Sise/Resources/assets/js/components/ApproveInformes";
import UnplannedInformes from "../../../Modules/Sise/Resources/assets/js/components/UnplannedInformes";
import UnplannedInformesCreate from "../../../Modules/Sise/Resources/assets/js/components/UnplannedInformesCreate";
import SuperviseUnplannedInformes from "../../../Modules/Sise/Resources/assets/js/components/SuperviseUnplannedInformes";
import CRUDFPPC from "../../../Modules/Sise/Resources/assets/js/components/CRUDFPPC";
import Monitor from "../../../Modules/Sise/Resources/assets/js/components/Monitor";
import Ftes from "../../../Modules/Sise/Resources/assets/js/components/Ftes";
import FPPC from "../../../Modules/Sise/Resources/assets/js/components/FPPC";
import Profile from "./components/Profile";
import Tutorial from "./components/Tutorial";
import AccessDenied from "./components/AccessDenied";
import ApproveRequestedMonths from "../../../Modules/Sise/Resources/assets/js/components/ApproveRequestedMonths";
import UserRequestedMonths from "../../../Modules/Sise/Resources/assets/js/components/UserRequestedMonths";
import FiscalYearButton from "../../../Modules/Sise/Resources/assets/js/components/FiscalYearButton";
import MiProgreso from "../../../Modules/Sise/Resources/assets/js/components/MiProgreso";

import Dashboard4h from "../../../Modules/Club4H/Resources/assets/js/components/Dashboard4h.vue";
import Club from "../../../Modules/Club4H/Resources/assets/js/components/Club.vue";
import Category from "../../../Modules/Club4H/Resources/assets/js/components/Category.vue";
import Interest from "../../../Modules/Club4H/Resources/assets/js/components/Interest.vue";
import Emphasis from "../../../Modules/Club4H/Resources/assets/js/components/Emphasis.vue";
import EventParticipant from "../../../Modules/Club4H/Resources/assets/js/components/EventParticipant.vue";
import Event from "../../../Modules/Club4H/Resources/assets/js/components/Event.vue";
import Project from "../../../Modules/Club4H/Resources/assets/js/components/Project.vue";
import assignProject from "../../../Modules/Club4H/Resources/assets/js/components/assignProject.vue";
import Participant from "../../../Modules/Club4H/Resources/assets/js/components/Participant.vue";
import ShowParticipant from "../../../Modules/Club4H/Resources/assets/js/components/showParticipant.vue";

import Manual from "../../../Modules/Sise/Resources/assets/js/components/Manual";


/*let moment = require('moment');
moment().format();
*/
moment.locale('es');

//Vue.use(require('vue-moment'));
require('./bootstrap');

/** DataTables references */
// require( 'jszip' );
// require( 'pdfmake' );
// require( 'datatables.net-bs4' );
// require( 'datatables.net-buttons-bs4' )
// require( 'datatables.net-buttons/js/buttons.html5.js' );
// require( 'datatables.net-fixedheader-bs4' );
// require( 'datatables.net-responsive-bs4' );

window.Vue = require('vue');

Vue.use(VueRouter);

Vue.prototype.moment = moment;

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

Vue.use(VueApexCharts)
Vue.component('apexchart', VueApexCharts)

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const routes = [
    { path: '/fiscalYearButton', name: 'FiscalYearButton', component: FiscalYearButton },
    { path: '/tutorials', component: Tutorial },
    { path: '/profile', component: Profile},
    { path: '/access_denied', component: AccessDenied},
    { path: '/sise/indicators_planned', name: 'IndicatorsPlanned', props: true, component: IndicatorsPlanned},
    { path: '/sise/unplanned_informes_create', component: UnplannedInformesCreate},
    { path: '/sise/supervise_unplanned_informes', component: SuperviseUnplannedInformes},
    { path: '/sise/unplanned_informes', component: UnplannedInformes},
    { path: '/sise/monitor', component: Monitor},
    { path: '/sise/fte', component: Ftes},
    { path: '/sise/crud_fppc', component: CRUDFPPC },
    { path: '/sise/fppc', component: FPPC },
    { path: '/sise/enterprise', component: Enterprise },
    { path: '/sise/dashboard', component: Dashboard },
    { path: '/sise/indicator', component: Indicator },
    { path: '/sise/objective', component: Objective },
    { path: '/sise/audience', component: Audience },
    { path: '/sise/program', component: Program },
    { path: '/sise/informes_index', component: InformesIndex},
    { path: '/sise/mi_progreso', component: MiProgreso},
    { path: '/sise/manual', component: Manual},
    { path: '/sise/approve_requested_months', component: ApproveRequestedMonths},
    { path: '/sise/requested_months', component: UserRequestedMonths},
    { path: '/sise/approve_informes', name: 'ApproveInformes', props: true, component: ApproveInformes},
    { path: '/sise/informes', name: 'Informes', props: true, component: Informes , children: [
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
    { path: '/sise/plan', name: 'Plan', props: true,  component: Plan },
    { path: '/sise/*', component: Dashboard },
    { path: '/4h/assignProject', component: assignProject},
    { path: '/4h/showParticipant', name: 'ShowParticipant', component: ShowParticipant, props: true},
    { path: '/4h/participant', name: 'Participant', component: Participant},
    { path: '/4h/project', component: Project},
    { path: '/4h/interest', component: Interest},
    { path: '/4h/emphasis', component: Emphasis},
    { path: '/4h/event', component: Event},
    { path: '/4h/eventParticipant', component: EventParticipant},
    { path: '/4h/club', component: Club},
    { path: '/4h/category', component: Category},
    { path: '/4h/dashboard', component: Dashboard4h},
    { path: '/4h*', component: Participant}, //acordar de cambiar a Dashboard4h
    { path: '/*', component: Dashboard }
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
Vue.component('loader', require('./components/Loader.vue').default);
Vue.component('access-denied', require('./components/AccessDenied.vue').default);
Vue.component('fiscal-year-button', require('../../../Modules/Sise/Resources/assets/js/components/FiscalYearButton.vue').default);


//Directives
Vue.directive('tooltip', function(el,binding){
    $(el).tooltip({
        title: binding.value,
        placement: binding.arg,
        trigger: 'hover',
        boundary: 'viewpoint',
        hideOnTargetClick: true,
        autoHide: true,
    })
});


    const app = new Vue({
    el: '#app',
    router,
    data: {
        search: '',
        isLoading: false,
        counter : 0,
        axiosInterceptor: null,
        minDate: '',
        maxDate: '',
        dateRanges: {},
    },

    mounted() {
        this.dateRange();
        this.closeRequests();
        // this.enableInterceptor()
        Fire.$on('load', () => {
            this.load();
        })
        Fire.$on('finishLoad', () => {
            this.finishLoad();
        })
        Fire.$on('dateRange', () => {
            this.dateRange();
        })
        Fire.$on('search', () => {
            this.searchit();
        })
    },

    methods: {
        load(){
            this.isLoading = true;
        },

        finishLoad(){
            this.isLoading = false;
        },

        searchit(){
            setTimeout(() => {
                Fire.$emit('searching');
            }, 1200);
            // console.log("searching...");
            // Fire.$emit('searching');
        },

        dateRange() {
            let domain = window.location.protocol + '//' + window.location.hostname;
            axios.get(`${domain}/sise/dateRange`).then(response => {
                this.dateRanges = response.data;

                this.minDate = this.dateRanges[0].date;
                this.maxDate = this.dateRanges[1].date;
                console.log(this.dateRanges)

                //Year needs to be updated dynamically according to current FY
                sessionStorage.minDate = moment(this.minDate).format("YYYY-MM-DD");
                sessionStorage.maxDate = moment(this.maxDate).format("YYYY-MM-DD");
            });
        },

        closeRequests(){
            let domain = window.location.protocol + '//' + window.location.hostname;
            let endOfGracePeriod = moment().startOf("month").add(14, "days").format("MM-DD-YYYY");
            let today = moment().format("MM-DD-YYYY");
           /* let minHour ='08:00'
            let maxHour = '09:00'
            let currentHour = moment().format('HH:mm'); */

            if((today === endOfGracePeriod)){
                axios.put(`${domain}/sise/api/closeRequest/`)
            } else{
            }
        }
        // enableInterceptor() {
        //     console.log('enabled successfully');
        //     this.axiosInterceptor = window.axios.interceptors.request.use((config) => {
        //         console.log('request intercepted');
        //         this.isLoading = true;
        //         this.counter++;
        //         return config
        //     }, (error) => {
        //         console.log('request intercept error');
        //         this.isLoading = false;
        //         return Promise.reject(error)
        //     })
        //
        //     window.axios.interceptors.response.use((response) => {
        //         console.log('received response');
        //         this.counter--;
        //         if(this.counter <= 0){
        //             this.counter = 0;
        //             this.isLoading = false;
        //         }
        //         return response
        //     }, function(error) {
        //         console.log('response error');
        //         this.isLoading = false;
        //         return Promise.reject(error)
        //     })
        // },
        //
        // disableInterceptor() {
        //     console.log('disabled successfully');
        //     window.axios.interceptors.request.eject(this.axiosInterceptor)
        // },
    }
});





