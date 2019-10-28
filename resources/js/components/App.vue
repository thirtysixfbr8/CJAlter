<template>
    <div id="wrap" class="animsition">
                
        <nav-bar :logout="logout" :user="user" :img_perfil="img_perfil" @event-call-modaluser="callModal"></nav-bar>

        <side-bar :user="user"></side-bar>    
        
        <router-view :user="user" @event-call-modaluser="callModal"></router-view>

        <form-component :user_edit="user" :is_edit="is_edit"></form-component>
    </div>
</template>
<script>
    export default {
        props:['user', 'logout', 'img_perfil'],
        data(){
            return{
                is_edit:true,
            }
        },
        methods:{
            callModal(is_edit){
                this.is_edit = is_edit;
                this.showModal();
            },
            showModal(){
                $('#form_users').modal('show');
            },
        },
        mounted() {
        }
    }
</script>