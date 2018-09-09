
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('app-doc-rev-upload-component', require('./components/SiteSuitablityInspectionReqDoc.vue'));
Vue.component('document-upload-component', require('./components/documentUploads.vue'));
Vue.component('state-component', require('./components/StateComponent.vue'));
Vue.component('app-doc-rev-component', require('./components/ApplicationDocumentReview.vue'));
Vue.component('m-view-application-docs', require('./components/mViewApplicationDocs.vue'));

const app = new Vue({
    el: '#app'
});
