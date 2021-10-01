import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

//to use it outside this js file and access it via store
export const store = new Vuex.Store({
    state: {
        bookings: [],
    },
    mutations: {},
    actions: {
        attend(context, payload) {
            return new Promise((resolve, reject) => {
                axios.post('/event-interaction', payload)
                    .then(resolve)
            })
        },
    },
    getters: {}
});
