<?php

namespace App\Http\Controllers;

use App\Models\ItensTelefoneComercioModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Itens_Telefone_ComerciosController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index(Request $request)
{
return Itens_Telefone_Comercio::all();
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
    $itens_telefone_comercio = new Itens_Telefone_Comercio();
    $itens_telefone_comercio->Cod_Telefone_FK = $request->Telefone;
    $itens_telefone_comercio->Cod_Comercio_FK = $request->Comercio;

    $itens_telefone_comercio>save();
    });
}

/**
* Display the specified resource.
*
* @param \App\Itens_Telefone_Comercio $itens_telefone_comercioo
* @return \Illuminate\Http\Response
*/
public function show(Request $request, Itens_Telefone_Comercio $itens_telefone_comercio)
{
return $itens_telefone_comercio;
}

/**
* Update the specified resource in storage.
*
* @param \Illuminate\Http\Request $request
* @param \App\Itens_Telefone_Comercio $itens_telefone_comercio
* @return \Illuminate\Http\Response
*/
public function update(Request $request, Itens_Telefone_Comercio $itens_telefone_comercio)
{
DB::transaction(function () use ($request, $itens_telefone_comercio) {
$itens_telefone_comercio->update($request->all());
});
}

/**
* Remove the specified resource from storage.
*
* @param \App\Itens_Telefone_Comercio $itens_telefone_comercio
* @return \Illuminate\Http\Response
*/
public function destroy(Itens_Telefone_Comercio $itens_telefone_comercio)
{
$itens_telefone_comercio->ativo = false;
$itens_telefone_comercio->save();
}

}
