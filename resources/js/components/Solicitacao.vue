<template>
<section id="content">
        <div class="page dashboard-page">
            <!--bradcome -->
            <div class="b-b mb-20">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <h1 class="h3 m-0"> Solicitações</h1>
                    <small class="text-muted"> Bem Vindo à CJA Seguros</small>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-12">
                    <table-solicitacao :solicitacoes="solicitacoes"></table-solicitacao>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
export default {
    props:['user'],
    data(){
        return{
            solicitacoes:[]
            
        }
    },
    methods:{
        getSolicitacoes(userId){
            axios.post('/api/getSolicitacoes', {'userId':userId})
            .then(response => {
                this.solicitacoes = response.data;
                console.log(this.solicitacoes)
            })
            .catch(function (error) {
                console.log(error);
            });
        }
    },
    mounted(){
        console.log('Table Mounted');
        this.getSolicitacoes(this.user.id);
    }
}
</script>