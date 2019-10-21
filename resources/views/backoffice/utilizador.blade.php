@extends('layouts.backoffice')

@section('sidebar')
    @parent
@endsection

@section('content')
<!--  CONTENT  -->
    <!--section id="content"-->
        <div class="page page-tables-footable">
            <!-- bradcome -->
            <div class="b-b mb-10">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <h1 class="h3 m-0">{{$appContents['utilizadores']['title']}}</h1>
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
                                <strong>{{$appContents['utilizadores']['subUsers'][0]['title']}}</strong></h3>
                        </div>
                        <div class="boxs-body">
                            <div class="form-group">
                                <label for="filter" style="padding-top: 5px">Search:</label>
                                <input id="filter" type="text" class="form-control rounded w-md mb-10 inline-block" />
                            </div>
                            <table id="searchTextResults" data-filter="#filter" data-page-size="5" class="footable table table-custom">
                                <thead>
                                    <tr>
                                        @foreach ($appContents['utilizadores']['subUsers'][0]['attrs'] as $item)
                                            <th class="text-center">{{$item}}</th>
                                        @endforeach
                                        <!--<th data-hide='phone, tablet'>Email</th>-->
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">John</td>
                                        <td class="text-center">smith</td>
                                        <td class="text-center">@mdo</td>
                                        <td class="text-center">4559411994</td>
                                        <td class="text-center">john@ymail.com</td>
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
                                        <td class="text-center">karlos</td>
                                        <td class="text-center">tonar</td>
                                        <td class="text-center">@fat</td>
                                        <td class="text-center">1596325874</td>
                                        <td class="text-center">tonar@mail.com</td>
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
                                        <td class="text-center">Mary</td>
                                        <td class="text-center">com</td>
                                        <td class="text-center">@twitter</td>
                                        <td class="text-center">2589632587</td>
                                        <td class="text-center">com@yahoo.com</td>
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
                                        <td class="text-center">akshay</td>
                                        <td class="text-center">kumar</td>
                                        <td class="text-center">@akky</td>
                                        <td class="text-center">9875858585</td>
                                        <td class="text-center">kumar@hotmail.com</td>
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
                                        <td class="text-center">Larry</td>
                                        <td class="text-center">Cardl</td>
                                        <td class="text-center">@lurie</td>
                                        <td class="text-center">565465</td>
                                        <td class="text-center">larry@mail.com</td>
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
                                        <td class="text-center">Jennifer</td>
                                        <td class="text-center">Minelly</td>
                                        <td class="text-center">@jen</td>
                                        <td class="text-center">9658585856</td>
                                        <td class="text-center">jenny@mail.com</td>
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
                                        <td class="text-center">Sly</td>
                                        <td class="text-center">Stall</td>
                                        <td class="text-center">@sly</td>
                                        <td class="text-center">85785874214</td>
                                        <td class="text-center">sly@mail.com</td>
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
                                        <td class="text-center">Arnold</td>
                                        <td class="text-center">Percy</td>
                                        <td class="text-center">@arnie</td>
                                        <td class="text-center">7852586325</td>
                                        <td class="text-center">arnie@mail.com</td>
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
                                        <td class="text-center">jacky</td>
                                        <td class="text-center">Black</td>
                                        <td class="text-center">@blacko</td>
                                        <td class="text-center">8956231245</td>
                                        <td class="text-center">blacko@mail.com</td>
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
        <div class="page page-tables-footable">
            <!-- bradcome -->
            <div class="b-b mb-10">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <h1 class="h3 m-0">{{$appContents['utilizadores']['title']}}</h1>
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
                                <strong>{{$appContents['utilizadores']['subUsers'][1]['title']}}</strong></h3>
                        </div>
                        <div class="boxs-body">
                            <div class="form-group">
                                <label for="filter" style="padding-top: 5px">Search:</label>
                                <input id="filter" type="text" class="form-control rounded w-md mb-10 inline-block" />
                            </div>
                            <table id="searchTextResults" data-filter="#filter" data-page-size="5" class="footable table table-custom">
                                <thead>
                                    <tr>
                                        @foreach ($appContents['utilizadores']['subUsers'][1]['attrs'] as $item)
                                            <th class="text-center">{{$item}}</th>
                                        @endforeach
                                        <!--<th data-hide='phone, tablet'>Email</th>-->
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">John</td>
                                        <td class="text-center">smith</td>
                                        <td class="text-center">@mdo</td>
                                        <td class="text-center">4559411994</td>
                                        <td class="text-center">john@ymail.com</td>
                                        <td class="text-center">john@ymail.com</td>
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
                                        <td class="text-center">karlos</td>
                                        <td class="text-center">tonar</td>
                                        <td class="text-center">@fat</td>
                                        <td class="text-center">1596325874</td>
                                        <td class="text-center">tonar@mail.com</td>
                                        <td class="text-center">john@ymail.com</td>
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
                                        <td class="text-center">Mary</td>
                                        <td class="text-center">com</td>
                                        <td class="text-center">@twitter</td>
                                        <td class="text-center">2589632587</td>
                                        <td class="text-center">com@yahoo.com</td>
                                        <td class="text-center">john@ymail.com</td>
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
                                        <td class="text-center">akshay</td>
                                        <td class="text-center">kumar</td>
                                        <td class="text-center">@akky</td>
                                        <td class="text-center">9875858585</td>
                                        <td class="text-center">kumar@hotmail.com</td>
                                        <td class="text-center">john@ymail.com</td>
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
                                        <td class="text-center">Larry</td>
                                        <td class="text-center">Cardl</td>
                                        <td class="text-center">@lurie</td>
                                        <td class="text-center">565465</td>
                                        <td class="text-center">john@ymail.com</td>
                                        <td class="text-center">larry@mail.com</td>
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
                                        <td class="text-center">Jennifer</td>
                                        <td class="text-center">Minelly</td>
                                        <td class="text-center">@jen</td>
                                        <td class="text-center">9658585856</td>
                                        <td class="text-center">jenny@mail.com</td>
                                        <td class="text-center">john@ymail.com</td>
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
                                        <td class="text-center">Sly</td>
                                        <td class="text-center">Stall</td>
                                        <td class="text-center">@sly</td>
                                        <td class="text-center">85785874214</td>
                                        <td class="text-center">sly@mail.com</td>
                                        <td class="text-center">john@ymail.com</td>
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
                                        <td class="text-center">Arnold</td>
                                        <td class="text-center">Percy</td>
                                        <td class="text-center">@arnie</td>
                                        <td class="text-center">7852586325</td>
                                        <td class="text-center">arnie@mail.com</td>
                                        <td class="text-center">john@ymail.com</td>
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
                                        <td class="text-center">jacky</td>
                                        <td class="text-center">Black</td>
                                        <td class="text-center">@blacko</td>
                                        <td class="text-center">8956231245</td>
                                        <td class="text-center">blacko@mail.com</td>
                                        <td class="text-center">john@ymail.com</td>
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
    <!--/section-->
    <!--/ CONTENT -->
@stop