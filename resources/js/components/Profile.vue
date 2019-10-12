<template>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <span>{{__('nome')}}</span>
                <span>{{__('email')}}</span>
                <!--span>{{$user->birth}}Se o perfil for de um mediador </span-->
                <span>{{__('data de nascimento')}}</span>
                <button class="btn btn-danger">Editar Dados</button> <!--Chamará a model com os dados do Utilizador-->
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'profile',
        mounted() {
            console.log('Profile mounted.')
        }
    }
</script>