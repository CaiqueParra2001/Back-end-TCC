<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdutoModel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProdutosController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index(Request $request)
{
return ProdutoModel::all();
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
$produto = new ProdutoModel();
$produto->Nome_Produto = $request->nome;
$produto->Valor_Produto = $request->Valor;
$produto->Imagem_Produto = $request->Imagem;
$produto->Cod_Marca_fk = $request->Marca;
$produto->Cod_Tipo_fk = $request->Tipo;
$produto->save();
});
}

/**
* Display the specified resource.
*
* @param \App\Produto $produto
* @return \Illuminate\Http\Response
*/
public function show(Request $request, ProdutoModel $produto)
{
return $produto;
}

/**
* Update the specified resource in storage.
*
* @param \Illuminate\Http\Request $request
* @param \App\Produto $produto
* @return \Illuminate\Http\Response
*/
public function update(Request $request, ProdutoModel $produto)
{
DB::transaction(function () use ($request, $produto) {
$produto->update($request->all());
});
}

/**
* Remove the specified resource from storage.
*
* @param \App\Produto $produto
* @return \Illuminate\Http\Response
*/
public function destroy(ProdutoModel $produto)
{
$produto->delete();
}

}

