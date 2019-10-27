<template>
    <div id="wrap" class="animsition">
                
        <nav-bar :logout="logout" :user="user" :img_perfil="img_perfil"></nav-bar>

        <side-bar :user="user"></side-bar>    
        
        <router-view :user="user"></router-view>
        <form-component :user_edit="user" :is_edit="true"></form-component>
    </div>
</template>
<script>
    export default {
        props:['user', 'logout', 'img_perfil'],
        mounted() {
            console.log('App mounted.')
        }
    }
</script>