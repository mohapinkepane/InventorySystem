/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
// require('./bootstrap');

// window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));

// const app = new Vue({
//     el: '#app'
// });

// app.js
import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);

import App from './App.vue';

import ExampleComponent from './components/ExampleComponent.vue';
import CreateProduct from './components/CreateProduct.vue';
import DisplayProduct from './components/DisplayProduct.vue';
import EditProduct from './components/EditProduct.vue';

const routes = [
      {
            name: 'DisplayProduct',
            path: '/',
            component: DisplayProduct
      },
     {
      name:'CreateProduct',
      path:'/Addnew',
      component:CreateProduct
  
     },

     { 
        name: 'EditProduct',
        path: '/Adjustproduct/:{id}',
        component: EditProduct

     },
   
  ];

const router = new VueRouter({ routes: routes});
new Vue(Vue.util.extend({ router }, App)).$mount('#app');