<?php

namespace App\Http\Controllers;

use App\Models\ComercioModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ComerciosController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index(Request $request)
{
return Comercio::all();
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
$comercio = new Comercio();
$comercio->Nome_Comercio = $request->nome;
$comercio->Email_Comercio = $request->Email;
$comercio->Senha_Comercio = $request->Senha;
$comercio->Confirma_Senha = $request->Email;
$comercio->Cep_Comercio = $request->Cep;
$comercio->CNPJ_Comercio = $request->CNPJ;
$comercio->Cod_Cidade_FK = $request->Cidade;
$comercio->Cod_Telefone_FK = $request->Telefone;
$comercio->save();
});
}

/**
* Display the specified resource.
*
* @param \App\Comercio $comercio
* @return \Illuminate\Http\Response
*/
public function show(Request $request, Comercio $comercio)
{
return $comercio;
}

/**
* Update the specified resource in storage.
*
* @param \Illuminate\Http\Request $request
* @param \App\Comercio $comercio
* @return \Illuminate\Http\Response
*/
public function update(Request $request, Comercio $comercio)
{
DB::transaction(function () use ($request, $comercio) {
$comercio->update($request->all());
});
}

/**
* Remove the specified resource from storage.
*
* @param \App\Comercio $comercio
* @return \Illuminate\Http\Response
*/
public function destroy(Comercio $comercio)
{
$comercio->ativo = false;
$comercio->save();
}
}
