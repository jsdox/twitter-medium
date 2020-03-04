/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import vueRoter from 'vue-router'


import VueRouter from 'vue-router';
Vue.use(VueRouter)


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
const register = Vue.component('register', require('./components/register.vue').default);
const list = Vue.component('list', require('./components/list.vue').default);
const routes = [
    {
        path: '/',
        component: list,
    },
    {
        path: '/signup',
        component: register,
    }
];
//Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const router = new VueRouter({
    routes
});
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router,
});
