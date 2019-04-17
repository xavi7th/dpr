import Vue from 'vue'
import VueRouter from 'vue-router'
import zopsconInbox from './components/zopsconInbox.vue'
import zopsconOutbox from './components/zopsconOutbox.vue'
Vue.use(VueRouter)

const router = new VueRouter({
    mode: 'history',
    scrollBehavior(to, from, savedPosition) {
        if (savedPosition) {
            return savedPosition
        } else {
            return {
                x: 0,
                y: 0,
            }
        }
    },
    routes: [
        {
            path: '/zopscon_inbox',
            component: zopsconInbox,
        },
        {
            path: '/zopscon_outbox',
            component: zopsconOutbox,
        },
        // {
        //   path : '*',
        //   redirect : '/zopscon_inbox'
        // }
    ],
})

// router.replace('/zopscon_inbox')
// router.replace({ path: '/zopscon_inbox', redirect: '/zopscon' })
export default router

/**
 * API Endpoints
 */
export const GetNewNotifications = '/api/notifications/new'
export const GetAllNotifications = '/api/notifications/all'
export const GetNotificationDetails = id => `/api/notification/${id}/read`
export const DeleteNotification = id => `/api/notification/${id}/delete`
export const MarkNotificationRead = id => `/api/notification/${id}/read`
export const sendNotification = `/api/notification/send`
export const BackToMarketer = `/api/application/reject/by-staff`
export const ResubmitApplication = (id) => `/api/application/re-submit/${id}`
