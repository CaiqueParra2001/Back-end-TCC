<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RankModel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class RanksController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index(Request $request)
{
return Rank::all();
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
$rank = new Rank();
$rank->Classifica_Rank = $request->Classificacao;
$rank->Cod_Avaliacao_FK = $request->Avaliacao;
$rank->Nota_Avaliacao = $request->nota;
$rank->Cod_Comercio_FK = $request->comercio;
$rank->Cod_Usuario_FK = $request->usuario;
$rank->save();
});
}

/**
* Display the specified resource.
*
* @param \App\Rank $rank
* @return \Illuminate\Http\Response
*/
public function show(Request $request, Rank $rank)
{
return $rank;
}

/**
* Update the specified resource in storage.
*
* @param \Illuminate\Http\Request $request
* @param \App\Rank $rank
* @return \Illuminate\Http\Response
*/
public function update(Request $request, Rank $rank)
{
DB::transaction(function () use ($request, $rank) {
$rank->update($request->all());
});
}

/**
* Remove the specified resource from storage.
*
* @param \App\Rank $rank
* @return \Illuminate\Http\Response
*/
public function destroy(Rank $rank)
{
$rank->ativo = false;
$rank->save();
}

}


