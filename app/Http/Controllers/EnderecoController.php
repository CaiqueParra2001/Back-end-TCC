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
return Endereco::all();
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
    $endereco = new Endereco();
    $endereco->Rua_Endereco = $request->nome;
    $endereco->Numero_Endereco = $request->Email;
    $endereco->Bairro_Endereco = $request->Senha;
    $endereco->Cod_Cidade_FK = $request->Cidade;

    $endereco->save();
    });
}

/**
* Display the specified resource.
*
* @param \App\Endereco $endereco
* @return \Illuminate\Http\Response
*/
public function show(Request $request, Endereco $endereco)
{
return $endereco;
}

/**
* Update the specified resource in storage.
*
* @param \Illuminate\Http\Request $request
* @param \App\Endereco $endereco
* @return \Illuminate\Http\Response
*/
public function update(Request $request, Endereco $endereco)
{
DB::transaction(function () use ($request, $endereco) {
$endereco->update($request->all());
});
}

/**
* Remove the specified resource from storage.
*
* @param \App\Endereco $endereco
* @return \Illuminate\Http\Response
*/
public function destroy(Endereco $endereco)
{
$endereco->ativo = false;
$endereco->save();
}

}
