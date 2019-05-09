window._ = require('lodash')
window.Popper = require('popper.js').default

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    window.$ = window.jQuery = require('jquery')

    // require('bootstrap');
} catch (e) {
    console.log('load failed', e)
}

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios')

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest'

window.axios.interceptors.response.use(
    res => {
        // console.log(res)

        return res
    },
    err => {
        if (err.response) {
            console.log(err.response)
            if (err.response.status == 422) {
                swal({
                    html: true,
                    title: err.response.data.error,
                    text: err.response.data.message,
                    type: 'warning',
                })
                return
            } else if (err.response.status == 500 && err.response.data.message == 'Expired token') {
                swal(
                    {
                        // html: true,
                        title: 'Session timed out',
                        text: 'You have been logged out automatically to protect your account',
                        type: 'info',
                    },
                    () => {
                        location.reload()
                    }
                )
            } else if (err.response.status == 404) {
                swal({
                    // html: true,
                    title: '404',
                    text: 'Resource Not Found',
                    type: 'info',
                })
            } else if (err.response.status == 403) {
                swal({
                    // html: true,
                    title: 'Forbidden',
                    text: 'Action is forbidden to user',
                    type: 'error',
                })
            } else if (err.response.status == 401) {
                swal(
                    {
                        // html: true,
                        title: 'Access Denied',
                        text: 'Access to requested resource is denied',
                        type: 'error',
                    },
                    () => {
                        location.reload()
                    }
                )
            } else if (err.response.status == 429) {
                swal({
                    // html: true,
                    title: 'Too many attempts',
                    text: 'You have made too many attempts. Try again later.',
                    type: 'error',
                })
            } else {
                return Promise.reject(err)
            }
        } else if (err.request) {
            console.log(err.request)

            if (err.request.status == 422) {
                swal({
                    html: true,
                    title: err.request.data.error,
                    text: err.request.data.message,
                    type: 'warning',
                })
            } else {
                return Promise.reject(err)
            }
        } else {
            console.log(err)
            swal('Request Error', `${err.message}`, 'error')
        }
    }
)

/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

let token = document.head.querySelector('meta[name="csrf-token"]')

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token')
}

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo'

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     encrypted: true
// });
