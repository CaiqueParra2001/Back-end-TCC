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
return MarcaModel::all();
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
$marca = new MarcaModel();
$marca->Nome_Marca = $request->Nome_Marca;
$marca->Cod_Uf_FK = $request->Cod_Uf_FK;
$marca->save();
});
}

/**
* Display the specified resource.
*
* @param \App\Marca $marca
* @return \Illuminate\Http\Response
*/
public function show(Request $request, MarcaModel $marca)
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
public function update(Request $request, MarcaModel $marca)
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
public function destroy(MarcaModel $marca)
{
$marca->delete();
}

}
