

require('./bootstrap');

window.Vue = require('vue');


//Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('profile-component', require('./components/Profile.vue').default);
Vue.component('form-component', require('./components/MediadorForm.vue').default);
Vue.component('dashboard-component', require('./components/Dashboard.vue').default);
Vue.component('table-component', require('./components/TableClient.vue').default);
//Vue.component('app-component', require('./components/App.vue'));


import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter);

const router = new VueRouter({
    mode:'history',
    routes: [
        /*{
            path:'/backoffice/mediador/',
            name:'profile',
            component: Profile
        },*/
        {
            path:'/backoffice/mediador/:userId',
            name:'profile-component',
            component: Vue.component('profile-component')
        },
        {
            path:'/backoffice/mediador',
            name:'dashboard-component',
            component: Vue.component('dashboard-component')
        },
        {
            path:'/backoffice/mediador/:userId/edit',
            name:'form-component',
            component: Vue.component('form-component')
        },
        {
            path:'/backoffice/mediador/solicitacoes',
            name:'table-component',
            component: Vue.component('table-component')
        },
        /*{
            path:'/backoffice/mediador/:userId/edit',
            name:'edituserinfo',
            component: EditUserInfo
        },
        {
            path:'/backoffice/mediador/invite',
            name:'invite',
            component: Invite
        },
        */
        

    ]
})

const app = new Vue({
    el: '#app',
    router,
    data:{},
    methods:{},
    comput:{}
});
