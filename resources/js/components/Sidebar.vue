<!-- 
Author: Daniel Almeida
Data: 02/10/2019
@Params: User, background_image
-->
<template>
<div id="controls">
    <aside id="leftmenu">
        <div id="leftmenu-wrap">
            <div class="panel-group slim-scroll" role="tablist">
                <div class="panel panel-default">
                    <div id="leftmenuNav" class="panel-collapse collapse in" role="tabpanel">
                        <div class="panel-body">
                            <ul id="navigation">
                                <li v-for="menu in getSides" v-bind:key="menu.id" :class="{'active open':menu.active}">
                                    <!--<a role="button" tabindex="0">
                                        <i :class="menu.icon"></i>
                                        <span>{{ menu.name}}</span>
                                    </a>-->
                                    <router-link v-if="menu.hasParameter" :to="{ name: menu.url, params: { user_id: getUser.id } }" >
                                        <i :class="menu.icon"></i>
                                        <span>{{ menu.name}}</span>
                                    </router-link>
                                    <router-link v-else :to="{ name: menu.url }">
                                        <i :class="menu.icon"></i>
                                        <span>{{ menu.name}}</span>
                                    </router-link>
                                    <!--<ul v-if="menu.hasSubmenu">
                                        <li v-for="submenu in menu" v-bind:key="submenu.id">
                                            <a role="button" tabindex="0" data-toggle="modal" data-target="#form_users">
                                                <i :class="submenu.icon"></i> {{submenu.name}}
                                            </a>
                                        </li>
                                    </ul>-->
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel settings panel-default">
                    <div class="panel-heading" role="tab">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#leftmenuControls">Opções Gerais
                                <i class="fa fa-angle-up"></i>
                            </a>
                        </h4>
                    </div>
                    <div class="milestone-sidbar">
                        <div class="text-center-folded">
                            <span class="pull-right pull-none-folded">60%</span>
                            <span class="hidden-folded">Solicitações Atendidas</span>
                        </div>
                        <div class="progress progress-xxs m-t-sm dk">
                            <div class="progress-bar progress-bar-info" style="width: 60%;"> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
</div>
</template>

<script>
    export default {
        props:['user', 'bckgd_img', 'foto_temp'],
        data:function(){
            return{
                sides:[
                    //Admin
                    [
                        {
                            "id":1,
                            "name":"Dashboard",
                            "icon":"fa fa-dashboard",
                            "url":"dashboard-component",
                            "hasParameter":false,
                            "active":true,
                            "hasSubmenu":false
                        },
                        {
                            "id":2,
                            "name":"Solicitações",
                            "icon":"fa fa-envelope",
                            "url":"solicitacoes",
                            "hasParameter":false,
                            "active":false,
                            "hasSubmenu":false
                        },
                        {
                            "id":3,
                            "name":"Utilizadores",
                            "icon":"fa fa-dashboard",
                            "url":"users",
                            "hasParameter":false,
                            "active":false,
                            "hasSubmenu":false
                        },
                        {
                            "id":4,
                            "name":"Seguradoras",
                            "icon":"fa fa-building",
                            "url":"table-component",
                            "hasParameter":true,
                            "active":false,
                            "hasSubmenu":false
                        },
                        {
                            "id":5,
                            "name":"Estatísticas",
                            "icon":"fa fa-bar-chart-o",
                            "url":"table-component",
                            "hasParameter":false,
                            "active":false,
                            "hasSubmenu":false
                        }
                    ],
                    //Mediador
                    [
                        {
                            "id":1,
                            "name":"Dashboard",
                            "icon":"fa fa-dashboard",
                            "url":"dashboard-component",
                            "hasParameter":false,
                            "active":true,
                            "hasSubmenu":false
                        },
                        {
                            "id":2,
                            "name":"Solicitações",
                            "icon":"fa fa-envelope",
                            "url":"table-component",
                            "hasParameter":true,
                            "active":false,
                            "hasSubmenu":false
                        },
                        {
                            "id":3,
                            "name":"Seguradoras",
                            "icon":"fa fa-building",
                            "url":"table-component",
                            "hasParameter":true,
                            "active":false,
                            "hasSubmenu":false
                        },
                        {
                            "id":4,
                            "name":"Estatísticas",
                            "icon":"fa fa-bar-chart-o",
                            "url":"table-component",
                            "hasParameter":true,
                            "active":false,
                            "hasSubmenu":false
                        }
                    ],
                    //Empresas
                    [
                        {
                            "id":1,
                            "name":"Dashboard",
                            "icon":"fa fa-envelope",
                            "url":"table-component",
                            "hasParameter":false,
                            "active":true,
                            "hasSubmenu":false
                        },
                        {
                            "id":2,
                            "name":"Fotografias",
                            "icon":"fa fa-envelope",
                            "url":"table-component",
                            "hasParameter":true,
                            "active":false,
                            "hasSubmenu":false
                        }
                    ],
                    //Cliente
                    [
                        {
                            "id":1,
                            "name":"Seguros",
                            "icon":"fa fa-envelope",
                            "url":"table-component",
                            "hasParameter":false,
                            "active":true,
                            "hasSubmenu":false
                        },
                        {
                            "id":2,
                            "name":"Participar Sinistro",
                            "icon":"fa fa-envelope",
                            "url":"table-component",
                            "hasParameter":true,
                            "active":false,
                            "hasSubmenu":false
                        },
                        {
                            "id":3,
                            "name":"Premios e Bonus",
                            "icon":"fa fa-envelope",
                            "url":"table-component",
                            "hasParameter":true,
                            "active":false,
                            "hasSubmenu":false
                        },
                        {
                            "id":4,
                            "name":"Convidar",
                            "icon":"fa fa-envelope",
                            "url":"table-component",
                            "hasParameter":true,
                            "active":false,
                            "hasSubmenu":false
                        }
                    ],
                ]
            }
        },
        mounted() {
            
        },
        methods:{
            
        },
        computed:{
            getUser(){
                return this.user;
            },
            getSides(){
                var perfil = this.getUser.perfilId - 1;
                console.log(perfil);
                console.log(this.sides);
                return this.sides[perfil];
            }
        }
    }
</script>
