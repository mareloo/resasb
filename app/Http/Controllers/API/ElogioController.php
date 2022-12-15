<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\GuardarElogioRequest;
use App\Http\Requests\ActualizarElogioRequest;
use App\Models\Elogio;
use Illuminate\Http\Request;

class ElogioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Elogio::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarElogioRequest $request)
    {
        Elogio::create($request->all());
        return response()->json([
                'res' => true,
                'msg' => 'Elogio quardado com sucesso'
            ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Elogio $elogio)
    {
        return response()->json([
            'res' => true,
            'elogio' => $elogio

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
    public function update(ActualizarElogioRequest $request,Elogio $elogio)
    {
        $elogio->update($request->all());
        return response()->json([
            'res' => true,
            'msg' => 'dados da elogio atualizado com sucesso'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Elogio $elogio)
    {
        $elogio->delete();
        return response()->json([
            'res' => true,
            'msg' => 'Elogio foi eliminado com sucesso'
        ], 200);
    }
}
