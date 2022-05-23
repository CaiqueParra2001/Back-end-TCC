<?php

namespace App\Http\Controllers;

use App\Models\ItensTelefoneUsuarioModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItensTelefoneUsuariosController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index(Request $request)
{
return ItensTelefoneUsuarioModel::all();
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
    $itens_telefone_usuario = new ItensTelefoneUsuarioModel();
    $itens_telefone_usuario->Cod_Telefone_FK = $request->Cod_Telefone_FK;
    $itens_telefone_usuario->Cod_Comercio_FK = $request->Cod_Comercio_FK;
    $itens_telefone_usuario->save();
    });
}

/**
* Display the specified resource.
*
* @param \App\ItensTelefoneUsuarioModel $itens_telefone_usuarioo
* @return \Illuminate\Http\Response
*/
public function show(Request $request, ItensTelefoneUsuarioModel $itens_telefone_usuario)
{
return $itens_telefone_usuario;
}

/**
* Update the specified resource in storage.
*
* @param \Illuminate\Http\Request $request
* @param \App\Itens_Telefone_Usuario $itens_telefone_usuario
* @return \Illuminate\Http\Response
*/
public function update(Request $request, ItensTelefoneUsuarioModel $itens_telefone_usuario)
{
DB::transaction(function () use ($request, $itens_telefone_usuario) {
$itens_telefone_usuario->update($request->all());
});
}

/**
* Remove the specified resource from storage.
*
* @param \App\Itens_Telefone_Usuario $itens_telefone_usuario
* @return \Illuminate\Http\Response
*/
public function destroy(ItensTelefoneUsuarioModel $itens_telefone_usuario)
{
$itens_telefone_usuario->delete();
}

}
