<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\GuardarReclamacoesRequest;
use App\Http\Requests\ActualizarReclamacaoRequest;
use App\Models\Reclamacao;
use Illuminate\Http\Request;

class ReclamacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Reclamacao::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarReclamacoesRequest $request)
    {
        Reclamacao::create($request->all());
        return response()->json([
                'res' => true,
                'msg' => 'Reclamacao quardado com sucesso'
            ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Reclamacao $reclamacao)
    {
        return response()->json([
            'res' => true,
            'reclamacao' => $reclamacao

        ],200);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ActualizarReclamacaoRequest $request,Reclamacao $reclamacao)
    {
        $reclamacao->update($request->all());
        return response()->json([
            'res' => true,
            'msg' => 'dados da reclamacao atualizado com sucesso'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reclamacao $reclamacao)
    {
        $reclamacao->delete();
        return response()->json([
            'res' => true,
            'msg' => 'Reclamacao foi eliminado com sucesso'
        ], 200);
    }
}
