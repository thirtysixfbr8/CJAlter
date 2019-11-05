

require('./bootstrap');

window.Vue = require('vue');


//Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('profile-component', require('./components/Profile.vue').default);
Vue.component('form-component', require('./components/UserForm.vue').default);
Vue.component('dashboard-component', require('./components/Dashboard.vue').default);
Vue.component('solicitacao', require('./components/Solicitacao.vue').default);
Vue.component('side-bar', require('./components/Sidebar.vue').default);
Vue.component('nav-bar', require('./components/NavBar.vue').default);
Vue.component('table-solicitacao', require('./components/TableSolicitacao.vue').default);
Vue.component('table-user', require('./components/TableUsers.vue').default);
Vue.component('users', require('./components/Users.vue').default);
Vue.component('app-component', require('./components/App.vue').default);


import Vue from 'vue'
import VueRouter from 'vue-router'
import Loading from 'vue-loading-overlay';
import 'vue-loading-overlay/dist/vue-loading.css';

Vue.use(VueRouter);
Vue.use(Loading);

const router = new VueRouter({
    mode:'history',
    routes: [
        //Mediador
        {
            path:'/backoffice/mediador',
            component: Vue.component('app-component'),
            children: [
                {
                    path:'solicitacoe',
                    name:'table-component',
                    component: Vue.component('solicitacao')
                },
                {
                    path:'',
                    name:'dashboard-components',
                    component: Vue.component('dashboard-component'),
                }
              ]
        },
        //Admin
        {
            path:'/backoffice/admin',
            component: Vue.component('app-component'),
            children: [
                {
                    path:'',
                    name:'dashboard-component',
                    component: Vue.component('dashboard-component'),
                },
                {
                    path:'solicitacoes',
                    name:'solicitacoes',
                    component: Vue.component('solicitacao')   
                },
                {
                    path:'users',
                    name:'users',
                    component: Vue.component('users')
                }   
              ]
        },
    ]
})

const app = new Vue({
    el: '#app',
    router,
    data:{
    },
    methods:{
        
    },
    comput:{}
});
