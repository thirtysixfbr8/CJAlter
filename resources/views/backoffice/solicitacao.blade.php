@extends('layouts.backoffice')

@section('sidebar')
    @parent
@endsection

@section('content')
<!--  CONTENT  -->
    <section id="content">
        <div class="page page-tables-footable">
            <!-- bradcome -->
            <div class="b-b mb-10">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <h1 class="h3 m-0">{{$appContents['solicitacoes']['title']}}</h1>
                        <small class="text-muted">{{$appContents['wellcome']}}</small>
                    </div>
                </div>
            </div>

            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <section class="boxs ">
                        <div class="boxs-header">
                            <h3 class="custom-font hb-cyan">
                                <strong>{{$appContents['solicitacoes']['title']}}</strong></h3>
                        </div>
                        <div class="boxs-body">
                            <div class="form-group">
                                <label for="filter" style="padding-top: 5px">Search:</label>
                                <input id="filter" type="text" class="form-control rounded w-md mb-10 inline-block" />
                            </div>
                            <table id="searchTextResults" data-filter="#filter" data-page-size="5" class="footable table table-custom">
                                <thead>
                                    <tr>
                                        @foreach ($appContents['solicitacoes']['attrs'] as $item)
                                            <th>{{$item}}</th>
                                        @endforeach
                                        <!--<th data-hide='phone, tablet'>Email</th>-->
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>John</td>
                                        <td>smith</td>
                                        <td>@mdo</td>
                                        <td>4559411994</td>
                                        <td>john@ymail.com</td>
                                        <td>john@ymail.com</td>
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
                                    <tr>
                                        <td>karlos</td>
                                        <td>tonar</td>
                                        <td>@fat</td>
                                        <td>1596325874</td>
                                        <td>tonar@mail.com</td>
                                        <td>john@ymail.com</td>
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
                                    <tr>
                                        <td>Mary</td>
                                        <td>com</td>
                                        <td>@twitter</td>
                                        <td>2589632587</td>
                                        <td>com@yahoo.com</td>
                                        <td>john@ymail.com</td>
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
                                    <tr>
                                        <td>akshay</td>
                                        <td>kumar</td>
                                        <td>@akky</td>
                                        <td>9875858585</td>
                                        <td>kumar@hotmail.com</td>
                                        <td>john@ymail.com</td>
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
                                    <tr>
                                        <td>Larry</td>
                                        <td>Cardl</td>
                                        <td>@lurie</td>
                                        <td>565465</td>
                                        <td>larry@mail.com</td>
                                        <td>john@ymail.com</td>
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
                                    <tr>
                                        <td>Jennifer</td>
                                        <td>Minelly</td>
                                        <td>@jen</td>
                                        <td>9658585856</td>
                                        <td>jenny@mail.com</td>
                                        <td>john@ymail.com</td>
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
                                    <tr>
                                        <td>Sly</td>
                                        <td>Stall</td>
                                        <td>@sly</td>
                                        <td>85785874214</td>
                                        <td>sly@mail.com</td>
                                        <td>john@ymail.com</td>
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
                                    <tr>
                                        <td>Arnold</td>
                                        <td>Percy</td>
                                        <td>@arnie</td>
                                        <td>7852586325</td>
                                        <td>arnie@mail.com</td>
                                        <td>john@ymail.com</td>
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
                                    <tr>
                                        <td>jacky</td>
                                        <td>Black</td>
                                        <td>@blacko</td>
                                        <td>8956231245</td>
                                        <td>blacko@mail.com</td>
                                        <td>john@ymail.com</td>
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
        </div>
    </section>
    <!--/ CONTENT -->
@stop