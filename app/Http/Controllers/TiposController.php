<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoModel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TiposController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index(Request $request)
{
return TipoModel::all();
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
$Tipo = new TipoModel();
$Tipo->Nome_Tipo = $request->Nome_Tipo;
$Tipo->save();
});
}

/**
* Display the specified resource.
*
* @param \App\Tipo $Tipo
* @return \Illuminate\Http\Response
*/
public function show(Request $request, TipoModel $Tipo)
{
return $Tipo;
}

/**
* Update the specified resource in storage.
*
* @param \Illuminate\Http\Request $request
* @param \App\Tipo $Tipo
* @return \Illuminate\Http\Response
*/
public function update(Request $request, TipoModel $Tipo)
{
DB::transaction(function () use ($request, $Tipo) {
$Tipo->update($request->all());
});
}

/**
* Remove the specified resource from storage.
*
* @param \App\Tipo $Tipo
* @return \Illuminate\Http\Response
*/
public function destroy(TipoModel $Tipo)
{
$Tipo->delete();
}

}


