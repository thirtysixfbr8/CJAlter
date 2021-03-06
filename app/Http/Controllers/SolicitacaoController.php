<?php

namespace App\Http\Controllers;

use App\Mediador;
use App\Solicitacao;
use App\User;
use App\Cliente;
use App\AppResult;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class SolicitacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mediador = Mediador::findOrFail(2);
        $cliente = DB::table('clientes')->where('userId',$request->get('clienteId'))->first();
        $solicitacao = new Solicitacao();
        $solicitacao->mediadorId = $mediador->mediadorId;
        $solicitacao->clienteId = $cliente->clienteId;
        $solicitacao->estado = "pendente";
        $solicitacao->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Solicitacao  $solicitacao
     * @return \Illuminate\Http\Response
     */
    public function show(User $utilizador)
    {
            $solicitacao = Solicitacao::all();
            $solicitacao = json_encode($solicitacao);
            return $solicitacao;


    }

    public function getSolicitacoes(Request $request){
        $user = User::findOrFail($request->get('userId'));
        $appResult = new AppResult();
        try {
            $result = Solicitacao::with('mediador', 'cliente')
                ->orderBy('solicitacaos.created_at', 'desc')
                ->get();
            $appResult->goodResponse($result, true, '');
        }catch(Exception $ex){
            $appResult->badResponse(false, '');
        }
        return response()->json($appResult->getResponse());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Solicitacao  $solicitacao
     * @return \Illuminate\Http\Response
     */
    public function edit(Solicitacao $solicitacao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Solicitacao  $solicitacao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Solicitacao $solicitacao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Solicitacao  $solicitacao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Solicitacao $solicitacao)
    {
        //
    }
}
