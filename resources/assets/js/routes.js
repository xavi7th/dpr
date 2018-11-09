import Vue from 'vue'
import VueRouter from 'vue-router'
import zopsconInbox from './components/zopsconInbox.vue'
import zopsconOutbox from './components/zopsconOutbox.vue'
Vue.use(VueRouter)

const router = new VueRouter({
  routes: [
    {
      path: "/zopscon_inbox",
      component: zopsconInbox
    },
    {
      path: "/zopscon_outbox",
      component: zopsconOutbox
    }
    // {
    //   path : '*',
    //   redirect : '/zopscon_inbox'
    // }
  ]
})

// router.replace('/zopscon_inbox')
// router.replace({ path: '/zopscon_inbox', redirect: '/zopscon' })
export default router
