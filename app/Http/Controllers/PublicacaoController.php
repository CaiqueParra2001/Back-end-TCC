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
return Publicacao::all();
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
$puvlicacao = new Puvlicacao();
$puvlicacao->Data_Publicacao = $request->Data;
$puvlicacao->Cod_Comercio_FK = $request->Comercio;
$puvlicacao->Validade_Publicacao = $request->Validade;
$puvlicacao->save();
});
}

/**
* Display the specified resource.
*
* @param \App\Publicacao $puvlicacao
* @return \Illuminate\Http\Response
*/
public function show(Request $request, Publicacao $puvlicacao)
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
public function update(Request $request, Publicacao $puvlicacao)
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
public function destroy(Publicacao $puvlicacao)
{
$puvlicacao->ativo = false;
$puvlicacao->save();
}

}


