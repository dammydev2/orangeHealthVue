require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';
import Vue from 'vue';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';


import App from './App.vue';
Vue.use(VueAxios, axios);

// import HomeComponent from './components/HomeComponent.vue';
// import CreateComponent from './components/CreateComponent.vue';
import IndexComponent from './components/IndexComponent.vue';
import PayComponent from './components/PayComponent';

const routes = [
  {
      name: 'home',
      path: '/',
      component: IndexComponent
  },
  {
    name: 'pay',
    path: '/pay',
    component: PayComponent
},
//   {
//       name: 'create',
//       path: '/create',
//       component: CreateComponent
//   },
//   {
//       name: 'posts',
//       path: '/posts',
//       component: IndexComponent
//   },
//   {
//       name: 'edit',
//       path: '/edit/:id',
//       component: EditComponent
//   }
];

const router = new VueRouter({ mode: 'history', routes: routes});
const app = new Vue(Vue.util.extend({ router }, App)).$mount('#app');