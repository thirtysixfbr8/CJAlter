<template>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <!--<p>{{ userData.name }}</p>
                <p>{{ userData.email }}</p>-->
                <!--p>{{$user->birth}}Se o perfil for de um mediador </p-->
                <!--router-link :to="{ name: 'form-component', params: {userId: 1} }"  @click="chamaModal()" class="btn btn-danger" >Editar Dados</router-link> Chamará a model com os dados do Utilizador-->
                 <!--<button @click="chamaModal()" class="btn btn-danger">Editar Dados</button> <--Chamará a model com os dados do Utilizador
                 <form-component ref="modal" @update="updateUser()" :user_edit=userData :edit=true></form-component>-->
            </div>
        </div>
    </div>

</template>
<script>
//:user="{{ json_encode($user) }}"
    export default {
        props:['user', 'userId'],
        components:Vue.component('form-component'),
        data(){
            return{
                userData: []
            }
        },
        mounted() {
        },
        methods: {
            chamaModal (){
                $('#form_users').modal('show').appendTo('body')
            },
        }
    }
</script>