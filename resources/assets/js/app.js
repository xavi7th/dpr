/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require( './bootstrap' )

window.Vue = require( 'vue' )
import VeeValidate from 'vee-validate';
import vSelect from 'vue-select'

Vue.use( require( 'vuejs-datatable' ) )
Vue.use( VeeValidate );

// import Router from './routes.js'

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component( 'v-select', vSelect )
/**
 * Asynchronously load view (Webpack Lazy loading compatible)
 * @param  {string}   name     the filename (basename) of the view to load.
 */
Vue.component( 'addon-lto-inspection-upload-component', resolve => {
    require( [ './components/AddonLTOInspectionDoc.vue' ], resolve )
} )
Vue.component( 'app-doc-rev-upload-component', resolve => {
    require( [ './components/SiteSuitablityInspectionReqDoc.vue' ], resolve )
} )
Vue.component( 'app-doc-rev-component', resolve => {
    require( [ './components/ApplicationDocumentReview.vue' ], resolve )
} )
Vue.component( 'apply-for-addon-lto-component', resolve => {
    require( [ './components/AddonLtoApplicationForm.vue' ], resolve )
} )
Vue.component( 'apply-for-atc-component', resolve => {
    require( [ './components/AtcApplicationForm.vue' ], resolve )
} )
Vue.component( 'apply-for-ati-component', resolve => {
    require( [ './components/AtiApplicationForm.vue' ], resolve )
} )
Vue.component( 'apply-for-catd-lto-component', resolve => {
    require( [ './components/CatDLtoApplicationForm.vue' ], resolve )
} )
Vue.component( 'apply-for-hydro-test-component', resolve => {
    require( [ './components/HydroTestApplicationForm.vue' ], resolve )
} )
Vue.component( 'apply-for-lto-component', resolve => {
    require( [ './components/LtoApplicationForm.vue' ], resolve )
} )
Vue.component( 'fields-calculate-lto-price', resolve => {
    require( [ './components/Utilities/FieldsCalculateLTOPrice.vue' ], resolve )
} )
Vue.component( 'apply-for-lto-renewal-component', resolve => {
    require( [ './components/LtoRenewalApplicationForm.vue' ], resolve )
} )
Vue.component( 'apply-for-pigging-component', resolve => {
    require( [ './components/PiggingApplicationForm.vue' ], resolve )
} )
Vue.component( 'apply-for-pressure-test-component', resolve => {
    require( [ './components/PressureTestApplicationForm.vue' ], resolve )
} )
Vue.component( 'apply-for-site-suitability-inspection-component', resolve => {
    require( [ './components/SiteSuitablityInspectionApplicationForm.vue' ], resolve )
} )
Vue.component( 'apply-for-takeover-component', resolve => {
    require( [ './components/TakeoverApplicationForm.vue' ], resolve )
} )
Vue.component( 'atc-inspection-upload-component', resolve => {
    require( [ './components/ATCInspectionDoc.vue' ], resolve )
} )
Vue.component( 'ati-inspection-upload-component', resolve => {
    require( [ './components/ATIInspectionDoc.vue' ], resolve )
} )
Vue.component( 'btn-back-to-marketer', resolve => {
    require( [ './components/Utilities/BtnBackToMarketer.vue' ], resolve )
} )
Vue.component( 'view-company-details', resolve => {
    require( [ '@partials-components/ViewCompanyDetails.vue' ], resolve )
} )
Vue.component( 'btn-resubmit-application', resolve => {
    require( [ './components/Utilities/BtnResubmitApplication.vue' ], resolve )
} )

Vue.component( 'catd-lto-inspection-upload-component', resolve => {
    require( [ './components/CatDLTOInspectionDoc.vue' ], resolve )
} )
Vue.component( 'document-upload-component', resolve => {
    require( [ './components/documentUploads.vue' ], resolve )
} )
Vue.component( 'lto-inspection-upload-component', resolve => {
    require( [ './components/LTOInspectionDoc.vue' ], resolve )
} )
Vue.component( 'm-view-application-docs', resolve => {
    require( [ './components/mViewApplicationDocs.vue' ], resolve )
} )
Vue.component( 'm-view-application-docs-lto-renewal', resolve => {
    require( [ './components/mViewApplicationDocsLtoRenewal.vue' ], resolve )
} )
Vue.component( 'marketers-dashboard', resolve => {
    require( [ './components/Marketers/Dashboard.vue' ], resolve )
} )
Vue.component( 'project-monitoring-feed-req-doc', resolve => {
    require( [ './components/ProjectMonitoringFeedReqDoc..vue' ], resolve )
} )
Vue.component( 'reports-controller', resolve => {
    require( [ '@reports-components/ReportsController.vue' ], resolve )
} )
Vue.component( 'state-component', resolve => {
    require( [ './components/StateComponent.vue' ], resolve )
} )
Vue.component( 'takeover-inspection-upload-component', resolve => {
    require( [ './components/TakeoverInspectionDoc.vue' ], resolve )
} )
Vue.component( 'user-notifications', resolve => {
    require( [ './components/UserNotifications.vue' ], resolve )
} )

// Vue.component('reports-dashboard', require('@reports-components/ReportsDashboard.vue'))
// Vue.component('zopscon-inbox', require('./components/zopsconInbox.vue'));
// Vue.component('zopscon-outbox', require('./components/zopsconOutbox.vue'));



/**
 * Custom Vue directives
 */

/**
 * This directive goes in a form element Example
 * * <form action="" v-confirm-form-submit:msg="'Once submitted, you can no longer edit application'">
 */
Vue.directive( 'confirm-form-submit', {
    inserted( el, binding, vnode ) {
        let f = evt => {
            evt.preventDefault();
            swal.fire( {
                    title: "Are you sure?",
                    text: binding.value,
                    type: "warning",
                    showCancelButton: true,
                    cancelButtonColor: "#d33",
                } )
                .then( ( confirmAction ) => {
                    if ( confirmAction ) {
                        vnode.elm.submit();
                        return;
                    } else {
                        // evt.preventDefault();
                    }
                } );
        }
        window.addEventListener( 'submit', f )
    }
} );


/**
 * Initialise a new Vue instance
 */

const app = new Vue( {
    el: '#app',
    // router: Router
    data() {
        return {
            submitDisabled: true,
        }
    },
} )
