<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsuarioModel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UsuariosController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index(Request $request)
{
return UsuarioModel::all();
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
$usuario = new UsuarioModel();
$usuario->Nome_Usuario = $request->Nome_Usuario;
$usuario->Email_Usuario = $request->Email_Usuario;
$usuario->Senha_Usuario = $request->Senha_Usuario;

$usuario->save();
});
}

/**
* Display the specified resource.
*
* @param \App\Usuario $usuario
* @return \Illuminate\Http\Response
*/
public function show(Request $request, UsuarioModel $usuario)
{
return $usuario;
}

/**
* Update the specified resource in storage.
*
* @param \Illuminate\Http\Request $request
* @param \App\Usuario $usuario
* @return \Illuminate\Http\Response
*/
public function update(Request $request, UsuarioModel $usuario)
{
DB::transaction(function () use ($request, $usuario) {
$usuario->update($request->all());
});
}

/**
* Remove the specified resource from storage.
*
* @param \App\Usuario $usuario
* @return \Illuminate\Http\Response
*/
public function destroy(UsuarioModel $usuario)
{
$usuario->delete();
}

}


