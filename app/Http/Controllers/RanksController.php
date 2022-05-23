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
return RankModel::all();
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
$rank = new RankModel();
$rank->Classifica_Rank = $request->Classifica_Rank;
$rank->Cod_Avaliacao_FK = $request->Cod_Avaliacao_FK;
$rank->Nota_Avaliacao = $request->Nota_Avaliacao;
$rank->Cod_Comercio_FK = $request->Cod_Comercio_FK;
$rank->Cod_Usuario_FK = $request->Cod_Usuario_FK;
$rank->save();
});
}

/**
* Display the specified resource.
*
* @param \App\Rank $rank
* @return \Illuminate\Http\Response
*/
public function show(Request $request, RankModel $rank)
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
public function update(Request $request, RankModel $rank)
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
public function destroy(RankModel $rank)
{
$rank->delete();
}

}


