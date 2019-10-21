<template>
        <div class="row">
            <div class="col-md-12">
                <section class="boxs ">
                    <div class="boxs-header">
                        <h3 class="custom-font hb-cyan">
                            <strong>Solicitações</strong>
                        </h3>
                    </div>
                    <div class="boxs-body">
                        <div class="form-group">
                            <label for="filter" style="padding-top: 5px">Procurar:</label>
                            <input id="filter" type="text" class="form-control rounded w-md mb-10 inline-block" />
                        </div>
                        <table id="searchTextResults" data-filter="#filter" data-page-size="5" class="footable table table-custom">
                            <thead class="thead-dark">
                                <tr>
                                     <th class="text-center" v-for="(campo) in camposSolicitacao" :key="campo.id">{{campo}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="solicitacao in solicitacoes" :key="solicitacao.solicitacaoId">
                                    <td class="text-center">{{solicitacao.solicitacaoId}}</td>
                                    <td class="text-center">{{solicitacao.clienteId}}</td>
                                    <td class="text-center">Saude</td>
                                    <td class="text-center">Ensa</td>
                                    <td class="text-center">{{solicitacao.mediadorId}}</td>
                                    <td class="text-center warning" v-if="solicitacao.estado === 'pendente'"></td>
                                    <td class="text-center success" v-else-if="solicitacao.estado === 'atendida'"></td>
                                    <td class="td-actions text-center">
                                        <button type="button" rel="tooltip" title="Descarregar" class="btn btn-info btn-simple btn-table-option">
                                            <i class="fa fa-download"></i>
                                        </button>
                                        <button type="button" rel="tooltip" title="Enviar por Email" class="btn btn-info btn-simple btn-table-option">
                                            <i class="fa fa-envelope"></i>
                                        </button>
                                        <button type="button" rel="tooltip" title="Enviar para Cliente" class="btn btn-info btn-simple btn-table-option">
                                            <i class="fa fa-user"></i>
                                        </button>
                                        <button type="button" rel="tooltip" title="Enviar para Seguradora" class="btn btn-info btn-simple btn-table-option">
                                            <i class="fa fa-building"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot class="hide-if-no-paging">
                                <tr>
                                    <td colspan="5" class="text-right">
                                        <ul class="pagination">
                                        </ul>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </section>
            </div>
    </div>
</template>
<script>
export default {
    props:['appContents'],
    data(){
        return{
            camposSolicitacao:[],
            solicitacoes:[]
            
        }
    },
    mounted(){
        console.log('Table Mounted');
        this.camposSolicitacao = this.appContents['solicitacoes']['attrs']
        axios.get('/backoffice/mediador/solicitacoes/2')
             .then((response)=>{
                 this.solicitacoes = response.data;
             });

    }
}
</script>