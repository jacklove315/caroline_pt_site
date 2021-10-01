/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

//vue toaster
import Toaster from 'v-toaster'
import 'v-toaster/dist/v-toaster.css'
Vue.use(Toaster, {timeout: 5000})

//vue modal
import VModal from 'vue-js-modal/dist/index.nocss.js'
import 'vue-js-modal/dist/styles.css'
Vue.use(VModal)

//v-calander
import Calendar from 'v-calendar/lib/components/calendar.umd'
import DatePicker from 'v-calendar/lib/components/date-picker.umd'

// Register components in your 'main.js'
Vue.component('calendar', Calendar)
Vue.component('date-picker', DatePicker)
Vue.use(require('vue-moment'));

import VueAlertify from 'vue-alertify';

Vue.use(VueAlertify, {
    // notifier defaults
    notifier: {
        // auto-dismiss wait time (in seconds)
        delay: 5,
        // default position
        position: 'top-right',
        // adds a close button to notifier messages
        closeButton: false,
    },
});


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('chat-app-component', require('./components/ChatAppComponent.vue').default);
Vue.component('conversation-component', require('./components/ConversationComponent.vue').default);
Vue.component('contact-list-component', require('./components/ContactListComponent.vue').default);
Vue.component('message-feed-component', require('./components/MessageFeedComponent.vue').default);
Vue.component('message-composer', require('./components/MessageComposer.vue').default);
Vue.component('classes', require('./components/dashboard/Classes.vue').default);
Vue.component('todos', require('./components/dashboard/Todos.vue').default);
Vue.component('bookings', require('./components/dashboard/home/Bookings').default);
Vue.component('programmes-section', require('./components/dashboard/programmes/ProgrammesSection').default);
Vue.component('total-footer', require('./components/dashboard/programmes/TotalFooter').default);
Vue.component('programme-item', require('./components/dashboard/programmes/ProgrammeItem').default);


Vue.component('home-section', require('./components/dashboard/home/HomeSection').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import {store} from './store';

const app = new Vue({
    el: '#app',
    store
});
