

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
        is_edit:true,
    },
    methods:{
        modalAddUser(){
            this.is_edit = false;
            this.showModal();
        },
        showModal(){
            $('#form_users').modal('show');
        },
        
    },
    comput:{}
});
