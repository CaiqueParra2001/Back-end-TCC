<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TelefoneModel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TelefonesController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index(Request $request)
{
return TelefoneModel::all();
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
$telefone = new TelefoneModel();
$telefone->Numero_Telefone = $request->Numero_Telefone;
$telefone->save();
});
}

/**
* Display the specified resource.
*
* @param \App\Telefone $telefone
* @return \Illuminate\Http\Response
*/
public function show(Request $request, TelefoneModel $telefone)
{
return $telefone;
}

/**
* Update the specified resource in storage.
*
* @param \Illuminate\Http\Request $request
* @param \App\Telefone $telefone
* @return \Illuminate\Http\Response
*/
public function update(Request $request, TelefoneModel $telefone)
{
DB::transaction(function () use ($request, $telefone) {
$telefone->update($request->all());
});
}

/**
* Remove the specified resource from storage.
*
* @param \App\Telefone $telefone
* @return \Illuminate\Http\Response
*/
public function destroy(TelefoneModel $telefone)
{
$telefone->delete();
}

}


