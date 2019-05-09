/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap')

window.Vue = require('vue')
import swal from 'sweetalert'
import vSelect from 'vue-select'

Vue.use(require('vuejs-datatable'))

// import Router from './routes.js'

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('v-select', vSelect)

Vue.component('app-doc-rev-upload-component', require('./components/SiteSuitablityInspectionReqDoc.vue'))
Vue.component('atc-inspection-upload-component', require('./components/ATCInspectionDoc.vue'))
Vue.component('ati-inspection-upload-component', require('./components/ATIInspectionDoc.vue'))
Vue.component('lto-inspection-upload-component', require('./components/LTOInspectionDoc.vue'))
Vue.component('addon-lto-inspection-upload-component', require('./components/AddonLTOInspectionDoc.vue'))
Vue.component('catd-lto-inspection-upload-component', require('./components/CatDLTOInspectionDoc.vue'))
Vue.component('takeover-inspection-upload-component', require('./components/TakeoverInspectionDoc.vue'))
Vue.component('document-upload-component', require('./components/documentUploads.vue'))
Vue.component('state-component', require('./components/StateComponent.vue'))
Vue.component('app-doc-rev-component', require('./components/ApplicationDocumentReview.vue'))
Vue.component('apply-for-site-suitability-inspection-component', require('./components/SiteSuitablityInspectionApplicationForm.vue'))
Vue.component('apply-for-atc-component', require('./components/AtcApplicationForm.vue'))
Vue.component('apply-for-ati-component', require('./components/AtiApplicationForm.vue'))
Vue.component('apply-for-lto-component', require('./components/LtoApplicationForm.vue'))
Vue.component('apply-for-addon-lto-component', require('./components/AddonLtoApplicationForm.vue'))
Vue.component('apply-for-catd-lto-component', require('./components/CatDLtoApplicationForm.vue'))
Vue.component('apply-for-lto-renewal-component', require('./components/LtoRenewalApplicationForm.vue'))
Vue.component('apply-for-takeover-component', require('./components/TakeoverApplicationForm.vue'))
Vue.component('apply-for-pressure-test-component', require('./components/PressureTestApplicationForm.vue'))
Vue.component('apply-for-hydro-test-component', require('./components/HydroTestApplicationForm.vue'))
Vue.component('apply-for-pigging-component', require('./components/PiggingApplicationForm.vue'))
Vue.component('m-view-application-docs', require('./components/mViewApplicationDocs.vue'))
Vue.component('m-view-application-docs-lto-renewal', require('./components/mViewApplicationDocsLtoRenewal.vue'))
Vue.component('project-monitoring-feed-req-doc', require('./components/ProjectMonitoringFeedReqDoc..vue'))
Vue.component('user-notifications', require('./components/UserNotifications.vue'))
Vue.component('btn-back-to-marketer', require('./components/Utilities/BtnBackToMarketer.vue'))
Vue.component('btn-resubmit-application', require('./components/Utilities/BtnResubmitApplication.vue'))
Vue.component('reports-controller', require('@reports-components/ReportsController.vue'))
// Vue.component('reports-dashboard', require('@reports-components/ReportsDashboard.vue'))
// Vue.component('zopscon-inbox', require('./components/zopsconInbox.vue'));
// Vue.component('zopscon-outbox', require('./components/zopsconOutbox.vue'));

const app = new Vue({
    el: '#app',
    // router: Router
    data() {
        return {
            testData: 'This is a test data',
        }
    },
})
