<template>
    <div id="header">
        <header class="clearfix">
            <!-- Branding -->
            <div class="branding">
                <a class="brand" href="index.html">
                    <span>CJA Seguros</span>
                </a>
                <a role="button" tabindex="0" class="offcanvas-toggle visible-xs-inline">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <!-- Branding end -->

            <!-- Left-side navigation -->
            <ul class="nav-left pull-left list-unstyled list-inline">
                <li class="leftmenu-collapse">
                    <a role="button" tabindex="0" class="collapse-leftmenu">
                        <i class="fa fa-outdent"></i>
                    </a>
                </li>
                <li class="dropdown leftmenu-collapse">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-plus mr-5"></i>Adicionar
                    </a>
                    <div class="dropdown-menu pull-left panel panel-default" role="menu">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a role="button" class="media">
                                    <span class="pull-left media-object">
                                        <i class="glyphicon glyphicon-user"></i>
                                    </span>
                                    <div class="media-body">
                                        <span class="block">Mediador</span>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a role="button" class="media">
                                    <span class="pull-left media-object">
                                        <i class="glyphicon glyphicon-lock"></i>
                                    </span>
                                    <div class="media-body">
                                        <span class="block">Seduro</span>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a role="button" class="media">
                                    <span class="pull-left media-object">
                                        <i class="fa fa-building"></i>
                                    </span>
                                    <div class="media-body">
                                        <span class="block">Seguradora</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
            <!-- Left-side navigation end -->
            <div class="search" id="main-search">
                <input type="text" class="form-control underline-input" placeholder="Pesquisar...">
            </div>
            <!-- Search end -->

            <!-- Right-side navigation -->
            <ul class="nav-right pull-right list-inline">
                <li class="dropdown notifications">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell"></i>
                        <div class="notify">
                            <span class="heartbit"></span>
                            <span class="point"></span>
                        </div>
                    </a>
                    <div class="dropdown-menu pull-right panel panel-default">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a role="button" tabindex="0" class="media">
                                    <span class="pull-left media-object media-icon">
                                        <i class="fa fa-ban"></i>
                                    </span>
                                    <div class="media-body">
                                        <span class="block">User Lucas cancelled account</span>
                                        <small class="text-muted">12 minutes ago</small>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a role="button" tabindex="0" class="media">
                                    <span class="pull-left media-object media-icon">
                                        <i class="fa fa-spotify"></i>
                                    </span>
                                    <div class="media-body">
                                        <span class="block">2 voice mails</span>
                                        <small class="text-muted">Neque porro quisquam est</small>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a role="button" tabindex="0" class="media">
                                    <span class="pull-left media-object media-icon">
                                        <i class="fa fa-whatsapp"></i>
                                    </span>
                                    <div class="media-body">
                                        <span class="block">8 voice messanger</span>
                                        <small class="text-muted">8 texts</small>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div class="panel-footer">
                            <a role="button" tabindex="0">Show all notifications
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="dropdown nav-profile">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                        <img :src="img_perfil" alt="" class="0 size-30x30"> </a>
                    <ul class="dropdown-menu pull-right" role="menu">
                        <li>
                            <div class="user-info">
                                <div class="user-name"> {{ user.name }} </div>
                                <div class="user-position online"></div>
                            </div>
                        </li>
 
                        <li>
                            <a href="#" @click="chamaModal()">
                                 <span class="label label-success pull-right"></span>
                                <i class="fa fa-user"></i>Perfil
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a :href="logout" role="button" tabindex="0" 
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out"></i>Sair</a>
                                <form id="logout-form" :action="logout" method="POST" style="display: none;">
                                    @csrf
                                </form>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Right-side navigation end -->
        </header>
    </div>
</template>

<script>
    export default {
        props:['logout', 'img_perfil', 'user'],
        data(){
            return{
            }
        },
        mounted() {
            console.log(this.user.id)
        },
        methods: {
            chamaModal (){
                this.$emit('event-call-modaluser', true);
            },
        }
    }
</script>
