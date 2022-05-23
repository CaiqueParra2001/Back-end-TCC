<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PublicacaoModel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PublicacaosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return PublicacaoModel::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::transaction(function () use ($request) {
            $puvlicacao = new PublicacaoModel();
            $puvlicacao->Data_Publicacao = $request->Data_Publicacao;
            $puvlicacao->Cod_Comercio_FK = $request->Cod_Comercio_FK;
            $puvlicacao->Validade_Publicacao = $request->Validade_Publicacao;
            $puvlicacao->save();
        });
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Publicacao $puvlicacao
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, PublicacaoModel $puvlicacao)
    {
        return $puvlicacao;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Publicacao $puvlicacao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PublicacaoModel $puvlicacao)
    {
        DB::transaction(function () use ($request, $puvlicacao) {
            $puvlicacao->update($request->all());
        });
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Publicacao $puvlicacao
     * @return \Illuminate\Http\Response
     */
    public function destroy(PublicacaoModel $puvlicacao)
    {
        $puvlicacao->delete();
    }
}
