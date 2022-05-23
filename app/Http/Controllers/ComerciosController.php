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
return ComercioModel::all();
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
$comercio = new ComercioModel();
$comercio->Nome_Comercio = $request->Nome_Comercio;
$comercio->Email_Comercio = $request->Email_Comercio;
$comercio->Senha_Comercio = $request->Senha_Comercio;
$comercio->Confirma_Senha = $request->Confirma_Senha;
$comercio->Cep_Comercio = $request->Cep_Comercio;
$comercio->CNPJ_Comercio = $request->CNPJ_Comercio;
$comercio->Cod_Cidade_FK = $request->Cod_Cidade_FK;
$comercio->Cod_Telefone_FK = $request->Cod_Telefone_FK;
$comercio->save();
});
}

/**
* Display the specified resource.
*
* @param \App\ComercioModel $comercio
* @return \Illuminate\Http\Response
*/
public function show(Request $request, ComercioModel $comercio)
{
return $comercio;
}

/**
* Update the specified resource in storage.
*
* @param \Illuminate\Http\Request $request
* @param \App\ComercioModel $comercio
* @return \Illuminate\Http\Response
*/
public function update(Request $request, ComercioModel $comercio)
{
DB::transaction(function () use ($request, $comercio) {
$comercio->update($request->all());
});
}

/**
* Remove the specified resource from storage.
*
* @param \App\ComercioModel $comercio
* @return \Illuminate\Http\Response
*/
public function destroy(ComercioModel $comercio)
{
$comercio->delete();
}
}
