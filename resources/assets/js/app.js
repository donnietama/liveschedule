
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap')

window.Vue = require('vue')

// Vue Snotify
import Snotify, { SnotifyPosition } from 'vue-snotify'
const options = {
    toast: {
        position: SnotifyPosition.rightBottom
    }
}

Vue.use(Snotify, options)

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'))
Vue.component('display-data', require('./components/DisplayData.vue'))
Vue.component('content-form', require('./components/management/ContentForm.vue'))

const app = new Vue({
    el: '#app'
})
