

require('./bootstrap');

window.Vue = require('vue');


//Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('profile-component', require('./components/Profile.vue').default);
Vue.component('form-component', require('./components/MediadorForm.vue').default);
Vue.component('dashboard-component', require('./components/Dashboard.vue').default);
Vue.component('solicitacao', require('./components/Solicitacao.vue').default);
Vue.component('side-bar', require('./components/Sidebar.vue').default);
Vue.component('nav-bar', require('./components/NavBar.vue').default);
Vue.component('table-solicitacao', require('./components/TableSolicitacao.vue').default);
Vue.component('table-user', require('./components/TableUsers.vue').default);
Vue.component('users', require('./components/Users.vue').default);
//Vue.component('app-component', require('./components/App.vue'));


import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter);

const router = new VueRouter({
    mode:'history',
    routes: [
        //Mediador
        {
            path:'/backoffice/mediador',
            name:'dashboard-component',
            component: Vue.component('dashboard-component')
        },
        {
            path:'/backoffice/mediador/solicitacoes',
            name:'table-component',
            component: Vue.component('solicitacao')
        },
        //Admin
        {
            path:'/backoffice/admin',
            name:'dashboard-component',
            component: Vue.component('dashboard-component')
        },
        {
            path:'/backoffice/admin/solicitacoes',
            name:'solicitacoes',
            component: Vue.component('solicitacao')   
        },
        {
            path:'/backoffice/admin/users',
            name:'users',
            component: Vue.component('users')
        }      
    ]
})

const app = new Vue({
    el: '#app',
    router,
    data:{},
    methods:{},
    comput:{}
});
