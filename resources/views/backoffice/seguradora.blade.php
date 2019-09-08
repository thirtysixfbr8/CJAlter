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
                        <h1 class="h3 m-0">{{$appContents['seguradoras']['title']}}</h1>
                        <small class="text-muted">{{$appContents['wellcome']}}</small>
                    </div>
                </div>
            </div>

            <!-- row -->
            <div class="row">
                <div class="col-md-8">
                    <section class="boxs ">
                        <div class="boxs-header">
                            <h3 class="custom-font hb-cyan">
                                <strong>{{$appContents['seguradoras']['title']}}</strong></h3>
                        </div>
                        <div class="boxs-body">
                            <div class="table-responsive social_media_table">
                                <div class="form-group">
                                    <label for="filter" style="padding-top: 5px">Search:</label>
                                    <input id="filter" type="text" class="form-control rounded w-md mb-10 inline-block" />
                                </div>
                                <table id="searchTextResults" data-filter="#filter" data-page-size="5" class="footable table table-custom">
                                    <thead>
                                        <tr>
                                            @foreach ($appContents['seguradoras']['attrs'] as $item)
                                                <th>{{$item}}</th>
                                            @endforeach
                                            <!--<th data-hide='phone, tablet'>Email</th>-->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><span class="list-icon linkedin"><i class="fa fa-linkedin"></i></span></td>
                                            <td>smith</td>
                                            <td><button type="button" class="btn btn-link">Ver Seguros</button></td>
                                            <td class="td-actions text-center">
                                                <button type="button" rel="tooltip" title="Detalhes" class="btn btn-info btn-simple btn-table-option">
                                                    <i class="glyphicon glyphicon-pencil"></i>
                                                </button>
                                                <button type="button" rel="tooltip" title="Remover" class="btn btn-danger btn-simple btn-table-option">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="list-icon twitter-table"><i class="fa fa-twitter"></i></span></td>
                                            <td>tonar</td>
                                            <td><button type="button" class="btn btn-link">Ver Seguros</button></td>
                                            <td class="td-actions text-center">
                                                <button type="button" rel="tooltip" title="Detalhes" class="btn btn-info btn-simple btn-table-option">
                                                    <i class="glyphicon glyphicon-pencil"></i>
                                                </button>
                                                <button type="button" rel="tooltip" title="Remover" class="btn btn-danger btn-simple btn-table-option">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="list-icon facebook"><i class="fa fa-facebook"></i></span></td>
                                            <td>com</td>
                                            <td><button type="button" class="btn btn-link">Ver Seguros</button></td>
                                            <td class="td-actions text-center">
                                                <button type="button" rel="tooltip" title="Detalhes" class="btn btn-info btn-simple btn-table-option">
                                                    <i class="glyphicon glyphicon-pencil"></i>
                                                </button>
                                                <button type="button" rel="tooltip" title="Remover" class="btn btn-danger btn-simple btn-table-option">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="list-icon google"><i class="fa fa-google"></i></span></td>
                                            <td>kumar</td>
                                            <td><button type="button" class="btn btn-link">Ver Seguros</button></td>
                                            <td class="td-actions text-center">
                                                <button type="button" rel="tooltip" title="Detalhes" class="btn btn-info btn-simple btn-table-option">
                                                    <i class="glyphicon glyphicon-pencil"></i>
                                                </button>
                                                <button type="button" rel="tooltip" title="Remover" class="btn btn-danger btn-simple btn-table-option">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="list-icon youtube"><i class="fa fa-youtube"></i></span></td>
                                            <td>Cardl</td>
                                            <td><button type="button" class="btn btn-link">Ver Seguros</button></td>
                                            <td class="td-actions text-center">
                                                <button type="button" rel="tooltip" title="Detalhes" class="btn btn-info btn-simple btn-table-option">
                                                    <i class="glyphicon glyphicon-pencil"></i>
                                                </button>
                                                <button type="button" rel="tooltip" title="Remover" class="btn btn-danger btn-simple btn-table-option">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="list-icon twitter-table"><i class="fa fa-twitter"></i></span></td>
                                            <td>Minelly</td>
                                            <td><button type="button" class="btn btn-link">Ver Seguros</button></td>
                                            <td class="td-actions text-center">
                                                <button type="button" rel="tooltip" title="Detalhes" class="btn btn-info btn-simple btn-table-option">
                                                    <i class="glyphicon glyphicon-pencil"></i>
                                                </button>
                                                <button type="button" rel="tooltip" title="Remover" class="btn btn-danger btn-simple btn-table-option">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="list-icon twitter-table"><i class="fa fa-twitter"></i></span></td>
                                            <td>Stall</td>
                                            <td><button type="button" class="btn btn-link">Ver Seguros</button></td>
                                            <td class="td-actions text-center">
                                                <button type="button" rel="tooltip" title="Detalhes" class="btn btn-info btn-simple btn-table-option">
                                                    <i class="glyphicon glyphicon-pencil"></i>
                                                </button>
                                                <button type="button" rel="tooltip" title="Remover" class="btn btn-danger btn-simple btn-table-option">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="list-icon twitter-table"><i class="fa fa-twitter"></i></span></td>
                                            <td>Percy</td>
                                            <td><button type="button" class="btn btn-link">Ver Seguros</button></td>
                                            <td class="td-actions text-center">
                                                <button type="button" rel="tooltip" title="Detalhes" class="btn btn-info btn-simple btn-table-option">
                                                    <i class="glyphicon glyphicon-pencil"></i>
                                                </button>
                                                <button type="button" rel="tooltip" title="Remover" class="btn btn-danger btn-simple btn-table-option">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="list-icon twitter-table"><i class="fa fa-twitter"></i></span></td>
                                            <td>Black</td>
                                            <td><button type="button" class="btn btn-link">Ver Seguros</button></td>
                                            <td class="td-actions text-center">
                                                <button type="button" rel="tooltip" title="Detalhes" class="btn btn-info btn-simple btn-table-option">
                                                    <i class="glyphicon glyphicon-pencil"></i>
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
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <!--/ CONTENT -->
@stop