<?php

namespace App\Http\Controllers;

use App\Models\EnderecoModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EnderecosController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index(Request $request)
{
    return 'texto';
//return EnderecoModel::all();
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
    $endereco = new EnderecoModel();
    $endereco->Rua_Endereco = $request->Rua_Endereco;
    $endereco->Numero_Endereco = $request->Numero_Endereco;
    $endereco->Bairro_Endereco = $request->Bairro_Endereco;
    $endereco->Cod_Cidade_FK = $request->Cod_Cidade_FK;

    $endereco->save();
    });
}

/**
* Display the specified resource.
*
* @param \App\EnderecoModel $endereco
* @return \Illuminate\Http\Response
*/
public function show(Request $request, EnderecoModel $endereco)
{
return $endereco;
}

/**
* Update the specified resource in storage.
*
* @param \Illuminate\Http\Request $request
* @param \App\EnderecoModel $endereco
* @return \Illuminate\Http\Response
*/
public function update(Request $request, EnderecoModel $endereco)//put
{
DB::transaction(function () use ($request, $endereco) {
$endereco->update($request->all());
});
}

/**
* Remove the specified resource from storage.
*
* @param \App\EnderecoModel $endereco
* @return \Illuminate\Http\Response
*/
public function destroy(EnderecoModel $endereco)//delete
{
$endereco->delete();
}

}
