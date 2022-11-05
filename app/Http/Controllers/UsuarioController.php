<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsuarioModel;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
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
return User::all();
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
$usuario = new User();
$usuario->Nome_Usuario = $request->nome;
$usuario->Email_Usuario = $request->email;
$usuario->Senha_Usuario = $request->senha;

$usuario->save();
});
}

/**
* Display the specified resource.
*
* @param \App\Usuario $usuario
* @return \Illuminate\Http\Response
*/
public function show(Request $request, User $usuario)
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
public function update(Request $request, User $usuario)
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
public function destroy(User $usuario)
{
$usuario->ativo = false;
$usuario->save();
}

}


