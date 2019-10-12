/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('app-component', require('./components/App.vue'));
Vue.component('profile-component', require('./components/Profile.vue'));



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter);

import App from './components/App'
//import Aside from './components/Aside'
import Dashboard from './components/Dashboard'
import EditUserInfo from './components/EditUserInfo'
import Invite from './components/Invite'
//import Nav from './components/Nav'
import Profile from './components/Profile'
import ExampleComponent from './components/ExampleComponent'
//import  from './components/'
//import  from './components/'


const router = new VueRouter({
    mode:history,
    routes: [
        {
            path:'/backoffice/mediador/',
            name:'profile',
            component: Profile
        },
        {
            path:'/backoffice/mediador/',
            name:'example-component',
            component: ExampleComponent
        },
        {
            path:'/backoffice/mediador/',
            name:'dashboard',
            component: Dashboard
        },
        {
            path:'/backoffice/mediador/:userId/edit',
            name:'edituserinfo',
            component: EditUserInfo
        },
        {
            path:'/backoffice/mediador/invite',
            name:'invite',
            component: Invite
        },

        

    ]
})

const app = new Vue({
    el: '#app',
    components:{ App },
    router,
    data:{},
    methods:{},
    comput:{}
});
