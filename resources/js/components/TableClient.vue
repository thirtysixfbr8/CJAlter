<template>
    <div>
        <div class="row">
            <div class="col-md-12">
                <section class="boxs ">
                    <div class="boxs-header">
                        <h3 class="custom-font hb-cyan">
                            <strong>Solicitações</strong></h3>
                    </div>
                    <div class="boxs-body">
                        <div class="form-group">
                            <label for="filter" style="padding-top: 5px">Procurar:</label>
                            <input id="filter" type="text" class="form-control rounded w-md mb-10 inline-block" />
                        </div>
                        <table id="searchTextResults" data-filter="#filter" data-page-size="5" class="footable table table-custom">
                            <thead>
                                <tr>
                                    <!--@foreach ($appContents['utilizadores']['subUsers'][1]['attrs'] as $item)
                                        <th class="text-center">{{$item}}</th>
                                    @endforeach-->
                                    <!--<th data-hide='phone, tablet'>Email</th>-->

                                    <th class="text-center">Id</th>
                                    <th class="text-center">Cliente</th>
                                    <th class="text-center">Tipo</th>
                                    <th class="text-center">Estado</th>
                                    <th class="text-center">Opcoes</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">Id</td>
                                    <td class="text-center">Cliente</td>
                                    <td class="text-center">Tipo</td>
                                    <td class="text-center">Estado</td>
                                    <td class="td-actions text-center">
                                        <button type="button" rel="tooltip" title="Detalhes" class="btn btn-info btn-simple btn-table-option">
                                            <i class="fa fa-eye"></i>
                                        </button>
                                        <button type="button" rel="tooltip" title="Confirmar" class="btn btn-success btn-simple btn-table-option">
                                            <i class="fa fa-check"></i>
                                        </button>
                                        <button type="button" rel="tooltip" title="Remover" class="btn btn-danger btn-simple btn-table-option">
                                            <i class="fa fa-times"></i>
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