<template>
    <section class="boxs ">
        <div class="boxs-header" style="padding-bottom: 0">
            <h3 class="custom-font hb-cyan">
                <strong>Solicitações</strong>
            </h3>
        </div>
        <div class="boxs-body">
            <div class="form-group">
                <label for="filter" style="padding-bottom: 5px">Procurar:</label>
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
                        <td class="text-center">{{solicitacao.cliente.name}}</td>
                        <td class="text-center">Saude</td>
                        <td class="text-center">Ensa</td>
                        <td class="text-center">{{getNameMediador(solicitacao.mediador)}}</td>
                        <td class="text-center"> {{getEstado(solicitacao.estado)}} </td>
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
</template>

<script>
    export default {
        props:['solicitacoes'],
        data(){
            return{
                camposSolicitacao:
                [
                    "#",
                    "Cliente",
                    "Seguro",
                    "Seguradora",
                    "Mediador",
                    "Estado",
                    "Opções"
                ],
                estados: new Map(),
            }
        },
        methods:{
            getNameMediador(mediador){
                if(mediador == null || typeof mediador == 'undefinde')
                    return ' - '
                return mediador.name
            },
            getEstado(estado){
                return this.estados.get(estado);
            }
        },
        computed:{
            
        },
        mounted() {
            this.estados.set(0,"Pendente");
            this.estados.set(1,"Atendido");
            this.estados.set(2,"Caducado");
            this.estados.set(3,"Renovado");
        }
    }
</script>
