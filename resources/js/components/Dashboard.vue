<template>
        <!-- CONTENT -->
        <section id="dashboard">
            <div class="page dashboard-page">
                <!--bradcome -->
                <div class="b-b mb-20">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <h1 class="h3 m-0"> {{ appContents['admin_rightSide'][0]['title']}}</h1>
                        <small class="text-muted"> {{ appContents['wellcome'] }}</small>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                                <section class="boxs boxs-simple tbox" v-for="item in items" :key="item.icon" >
                                    <div :class="'boxs-widget '+item.color+' text-center p-30 tcol -l'">
                                        <i :class="item.icon+' fa-3x'"></i>
                                    </div>
                                    <div class="boxs-body text-center tcol">
                                        <h2 class="m-0">25%</h2>
                                        <span class="text-muted">{{ item.title }}</span>
                                    </div>
                                </section>
                        </div>
                </div>
                <div class="row clearfix">
                    <div class="col-md-12 col-sm-12 col-xs-12">
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
                                                <th style="width:60px;">Member</th>
                                                <th>Name</th>
                                                <th>Earnings</th>
                                                <th>Sales</th>                                    
                                                <th>Reviews</th>
                                                <th class="hidden-md hidden-sm">Progress</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img class="rounded-circle"  alt="user" width="40"> </td>
                                                <td>
                                                    <a>Logan</a>
                                                </td>
                                                <td>$420</td>
                                                <td>23</td>                                   
                                                <td>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </td>
                                                 <td class="hidden-md hidden-sm">
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 87%;"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img class="rounded-circle"  alt="user" width="40"> </td>
                                                <td>
                                                    <a>Isabella</a>
                                                </td>
                                                <td>$350</td>
                                                <td>16</td>                                   
                                                <td>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </td>
                                                 <td class="hidden-md hidden-sm">
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img class="rounded-circle"  alt="user" width="40"> </td>
                                                <td>
                                                    <a>Jackson</a>
                                                </td>
                                                <td>$201</td>
                                                <td>11</td>                                   
                                                <td>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </td>
                                                 <td class="hidden-md hidden-sm">
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100" style="width:32%;"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img class="rounded-circle"   alt="user" width="40"> </td>
                                                <td>
                                                    <a >Victoria</a>
                                                </td>
                                                <td>$651</td>
                                                <td>28</td>                                   
                                                <td>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </td>
                                                 <td class="hidden-md hidden-sm">
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img class="rounded-circle"  alt="user" width="40"> </td>
                                                <td>
                                                    <a>Lucas</a>
                                                </td>
                                                <td>$300</td>
                                                <td>20</td>                                   
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
                    </div>
                </div>
            </div>
            <section class="container-fluid">
                <div>
                    <router-link :to="{ name:'profile-component', params: {userId: 5} }" class="btn btn-primary">Perfil</router-link>
                    <router-link :to="{ name:'table-component'}" class="btn btn-primary">Solicitacoes</router-link>
                </div>
            </section>
            
        </section>
    <!-- Vendor JavaScripts -->
</template>
<script>
export default {
    //:appComponents={{$appContents}}
    props: ['appContents','user'],

    data(){
        return{
            items: [],
        }
    },
    mounted() {
        this.items = this.appContents['dashboards']
        console.log('Dashboard mounted')
        //axios.post('').then((response) => {
            //this.appComponents = response.data;
            //console.log(this.appContents);
            //this.items = appComponents['dashboards'];
            //console.log(this.item);
        //});
    
    }
}
      
</script>