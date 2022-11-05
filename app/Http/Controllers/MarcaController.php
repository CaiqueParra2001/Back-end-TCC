<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MarcaModel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class MarcasController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index(Request $request)
{
return Marca::all();
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
$marca = new Marca();
$marca->Nome_Marca = $request->nome;
$marca->Cod_Uf_FK = $request->uf;
$marca->save();
});
}

/**
* Display the specified resource.
*
* @param \App\Marca $marca
* @return \Illuminate\Http\Response
*/
public function show(Request $request, Marca $marca)
{
return $marca;
}

/**
* Update the specified resource in storage.
*
* @param \Illuminate\Http\Request $request
* @param \App\Marca $marca
* @return \Illuminate\Http\Response
*/
public function update(Request $request, Marca $marca)
{
DB::transaction(function () use ($request, $marca) {
$marca->update($request->all());
});
}

/**
* Remove the specified resource from storage.
*
* @param \App\Marca $marca
* @return \Illuminate\Http\Response
*/
public function destroy(Marca $marca)
{
$marca->ativo = false;
$marca->save();
}

}
