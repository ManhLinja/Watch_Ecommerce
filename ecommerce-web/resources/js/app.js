/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import { createApp } from 'vue';

import vuex from 'vuex';

import store from './store/index'

import { mapGetters, mapActions, mapMutations } from 'vuex';

import * as Vue from 'vue';

/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

const app = createApp({});

import ExampleComponent from './components/ExampleComponent.vue';
import productSingleBody from './components/productComponents/productSingleBody.vue';
import productDetails from './components/productComponents/productDetails.vue';
import productHeaderCart from './components/productComponents/productHeaderCart.vue';
import cartDetails from './components/productComponents/cartDetails.vue';
import checkOut from './components/productComponents/checkOut.vue';
import categoryProduct from './components/productComponents/categoryProduct.vue';
import invoice from './components/productComponents/invoice.vue';
import banner from './components/frontend/banner.vue';
app.component('banner', banner);
app.component('invoice', invoice);
app.component('category-product', categoryProduct);
app.component('check-out', checkOut);
app.component('cart-details', cartDetails);
app.component('product-header-cart', productHeaderCart);
app.component('product-details', productDetails);
app.component('product-single-body', productSingleBody);
app.component('example-component', ExampleComponent);

import * as pagination from 'laravel-vue-pagination';
import Paginate from "vuejs-paginate-next";
// import carousel from 'vue-owl-carousel2'




/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */

app.use(mapGetters);
app.use(mapActions);
app.use(mapMutations);

app.use(Vue);
app.use(store);
app.use(vuex);
// app.use(carousel);
app.use(pagination);
app.use(Paginate);
app.mount('#app');
