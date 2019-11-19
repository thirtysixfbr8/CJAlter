

require('./bootstrap');

window.Vue = require('vue');


//Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('select-component', require('./components/SelectSeguro.vue').default);
Vue.component('seguros-component', require('./components/Seguros.vue').default);
Vue.component('transaction-form', require('./components/TransactionForm.vue').default);
Vue.component('travel-form', require('./components/TravelForm.vue').default);
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

Vue.use(VueRouter);

const router = new VueRouter({
    mode:'history',
    routes: [
        //Mediador
        {
            path:'/backoffice/mediador',
            component: Vue.component('app-component'),
            children: [
                {
                    path:'solicitacoes',
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
           //Cliente     
        {
            path:'/backoffice/cliente',
            component: Vue.component('app-component'),
            children: [
                {
                    path:'',
                    name:"seguros",
                    component: Vue.component('seguros-component'),
                },
                {
                    path:'',
                    name:"select",
                    component: Vue.component('select-component')
                },
                {
                    path:'',
                    name:"travel",
                    component: Vue.component('travel-form')
                },
                {
                    path:'',
                    name:"transaction",
                    component: Vue.component('transaction-form')
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
