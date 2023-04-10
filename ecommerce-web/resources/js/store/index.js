import * as Vue from 'vue';
import * as Vuex from 'vuex';
import createPersistedState from "vuex-persistedstate";

// Vue.use(Vuex);

import product_list from './modules/product_list.js';
import product_cart from './modules/product_cart.js';
import checkout from './modules/checkout.js';

const store = new Vuex.Store({
    modules: {
        product_list,
        product_cart,
        checkout,
    },
    state: {},
    getters: {},
    mutations: {},
    actions: {},
    plugins: [createPersistedState()],
});

export default store;