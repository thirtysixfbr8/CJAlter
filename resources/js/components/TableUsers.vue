<template>
    <section class="boxs">
        <div class="boxs-header">
            <h3 class="custom-font hb-blue">
                <strong>Members </strong>Profiles</h3>
            <ul class="controls">
                <li class="dropdown">
                    <a role="button" tabindex="0" class="dropdown-toggle settings" data-toggle="dropdown">
                        <i class="fa fa-cog"></i>
                        <i class="fa fa-spinner fa-spin"></i>
                    </a>
                    <ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp">
                        <li>
                            <a role="button" tabindex="0" class="boxs-toggle">
                                <span class="minimize">
                                    <i class="fa fa-angle-down"></i>&nbsp;&nbsp;&nbsp;Minimize</span>
                                <span class="expand">
                                    <i class="fa fa-angle-up"></i>&nbsp;&nbsp;&nbsp;Expand</span>
                            </a>
                        </li>
                        <li>
                            <a role="button" tabindex="0" class="boxs-refresh">
                                <i class="fa fa-refresh"></i> Refresh </a>
                        </li>
                        <li>
                            <a role="button" tabindex="0" class="boxs-fullscreen">
                                <i class="fa fa-expand"></i> Fullscreen </a>
                        </li>
                    </ul>
                </li>
                <li class="remove">
                    <a role="button" tabindex="0" class="boxs-close">
                        <i class="fa fa-times"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="boxs-body">
            <div class="body table-responsive members_profiles">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <!--th style="width:60px;">#</th-->
                            <th class="text-center" v-for="(campo) in campos" :key="campo.id">{{campo}}</th>
                            <!--<th class="hidden-md hidden-sm">Progress</th>-->
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="user in users" v-bind:key="user.id">
                            <td>
                                <img class="rounded-circle"  alt="user" width="40"> </td>
                            <td class="text-center">
                                <a>{{user.name}}</a>
                            </td>
                            <td class="text-center">{{user.email}}</td>
                            <td class="text-center">{{user.telemovel}}</td>                                   
                            <td class="text-center">{{user.dataNascimento}}</td>                                   
                            <td class="text-center">{{getTypeUser(user.userable_type)}}</td>                                   
                            <td>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                                <i class="fa fa-star-o"></i>
                            </td>
                                <td class="hidden-md hidden-sm">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        props:['users'],
        data(){
            return{
                campos:
                [
                    "Foto",
                    "Nome",
                    "Email",
                    "Telemovel",
                    "Data Nascimento",
                    "Tipo",
                    "Opções"
                ]
            }
        },
        methods:{
            getTypeUser(typeUser){
                let result = typeUser.split('\\');
                return (result.length>1) ? result[1] : typeUser;
            }
        },
        mounted() {
            /*perfilUser.set(,"");
            perfilUser.set(,"");
            perfilUser.set(,"");
            perfilUser.set(,"");*/
        }
    }
</script>
