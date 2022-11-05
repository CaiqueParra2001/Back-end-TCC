<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cidade;
use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Support\Facades\DB;

class CidadesController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index(Request $request)
{
return City::all();
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
$cidade = new City();
$cidade->Nome_Cidade = $request->nome;
$cidade->Cod_Uf_FK = $request->uf;
$cidade->save();
});
}

/**
* Display the specified resource.
*
* @param \App\Cidade $cidade
* @return \Illuminate\Http\Response
*/
public function show(Request $request, City $cidade)
{
return $cidade;
}

/**
* Update the specified resource in storage.
*
* @param \Illuminate\Http\Request $request
* @param \App\Cidade $cidade
* @return \Illuminate\Http\Response
*/
public function update(Request $request, City $cidade)
{
DB::transaction(function () use ($request, $cidade) {
$cidade->update($request->all());
});
}

/**
* Remove the specified resource from storage.
*
* @param \App\Cidade $cidade
* @return \Illuminate\Http\Response
*/
public function destroy(City $cidade)
{
$cidade->ativo = false;
$cidade->save();
}
public function pegarCidadesPorUf(string $uf)
{
return City::where('uf', $uf)->get();
}
}
