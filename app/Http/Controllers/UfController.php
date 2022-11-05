<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UfModel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UfsController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index(Request $request)
{
return Uf::all();
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
$uf = new Uf();
$uf->Nome_UF = $request->nome;
$uf->Sigla_UF = $request->Sigla;
$uf->save();
});
}

/**
* Display the specified resource.
*
* @param \App\Uf $uf
* @return \Illuminate\Http\Response
*/
public function show(Request $request, Uf $uf)
{
return $uf;
}

/**
* Update the specified resource in storage.
*
* @param \Illuminate\Http\Request $request
* @param \App\Uf $uf
* @return \Illuminate\Http\Response
*/
public function update(Request $request, Uf $uf)
{
DB::transaction(function () use ($request, $uf) {
$uf->update($request->all());
});
}

/**
* Remove the specified resource from storage.
*
* @param \App\Uf $uf
* @return \Illuminate\Http\Response
*/
public function destroy(Uf $uf)
{
$uf->ativo = false;
$uf->save();
}

}


