<?php

use App\Http\Controllers\AvaliacaoController;
use App\Http\Controllers\CidadesController;
use App\Http\Controllers\ComerciosController;
use App\Http\Controllers\EnderecosController;
use App\Http\Controllers\Itens_Telefone_ComerciosController;
use App\Http\Controllers\ItensTelefoneComerciosController;
use App\Http\Controllers\ItensTelefoneComerciosControllerModel;
use App\Http\Controllers\ItensTelefoneUsuariosController;
use App\Http\Controllers\ItensTelefoneUsuariosControllerModel;
use App\Http\Controllers\MarcasController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\PublicacaosController;
use App\Http\Controllers\RanksController;
use App\Http\Controllers\TelefonesController;
use App\Http\Controllers\TiposController;
use App\Http\Controllers\UfsController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('cidades', [CidadesController::class,'index']);
Route::get('ufs', [UfsController::class,'index']);
Route::get('comercios', [ComerciosController::class,'index']);
Route::get('enderecos', [EnderecosControllerController::class,'index']);
Route::get('itenstelefonecomercios', [ItensTelefoneComerciosController::class,'index']);
Route::get('itenstelefoneusuarios', [ItensTelefoneUsuariosController::class,'index']);
Route::get('marcas', [MarcasControllers::class,'index']);
Route::get('publicacaos', [PublicacaosController::class,'index']);
Route::get('produtos', [ProdutosController::class,'index']);
Route::get('ranks', [RanksController::class,'index']);
Route::get('telefones', [TelefonesController::class,'index']);
Route::get('tipos', [TiposController::class,'index']);
Route::get('usuarios', [UsuariosController::class,'index']);
Route::get('avaliacaos', [AvaliacaosController::class,'index']);

Route::post('cidade', [CidadesController::class,'store']);
Route::post('uf', [UfsController::class,'store']);
Route::post('comercio', [ComerciosController::class,'store']);
Route::post('endereco', [EnderecosController::class,'store']);
Route::post('itenstelefonecomercio', [ItensTelefoneComerciosController::class,'store']);
Route::post('itenstelefoneusuario', [ItensTelefoneUsuariosController::class,'store']);
Route::post('marca', [MarcasController::class,'store']);
Route::post('publicacao', [PublicacaosController::class,'store']);
Route::post('produto', [ProdutosController::class,'store']);
Route::post('rank', [RanksController::class,'store']);
Route::post('telefone', [TelefonesController::class,'store']);
Route::post('tipos', [TiposController::class,'store']);
Route::post('usuario', [UsuariosController::class,'store']);
Route::post('avaliacao', [AvaliacaoController::class,'store']);

Route::get('cidade/{cidade}', [CidadesController::class,'show']);
Route::get('uf/{uf}', [UfsController::class,'show']);
Route::get('comercio/{comercio}', [ComerciosController::class,'show']);
Route::get('endereco/{endereco}', [EnderecosController::class,'show']);
Route::get('itenstelefonecomercio/{itenstelefonecomercio}', [ItensTelefoneComerciosController::class,'show']);
Route::get('itenstelefoneusuario/{itenstelefoneusuario}', [ItensTelefoneUsuariosController::class,'show']);
Route::get('marca/{marca}', [MarcasController::class,'show']);
Route::get('publicacao/{publicacao}', [PublicacaosController::class,'show']);
Route::get('produto/{produto}', [ProdutosController::class,'show']);
Route::get('rank/{rank}', [RanksController::class,'show']);
Route::get('telefone/{telefone}', [TelefonesController::class,'show']);
Route::get('tipos/{tipos}', [TiposController::class,'show']);
Route::get('usuario/{usuario}', [UsuariosController::class,'show']);
Route::get('avaliacao/{avaliacao}', [AvaliacaoController::class,'show']);

Route::put('cidade', [CidadesController::class,'update']);
Route::put('uf', [UfsController::class,'update']);
Route::put('comercio', [ComerciosController::class,'update']);
Route::put('endereco', [EnderecosController::class,'update']);
Route::put('itenstelefonecomercio', [ItensTelefoneComerciosController::class,'update']);
Route::put('itenstelefoneusuario', [ItensTelefoneUsuariosController::class,'update']);
Route::put('marca', [MarcasController::class,'update']);
Route::put('publicacao', [PublicacaosController::class,'update']);
Route::put('produto', [ProdutosController::class,'update']);
Route::put('rank', [RanksController::class,'update']);
Route::put('telefone', [TelefonesController::class,'update']);
Route::put('tipos', [TiposController::class,'update']);
Route::put('usuario', [UsuariosController::class,'update']);
Route::put('avaliacao', [AvaliacaoController::class,'update']);

Route::delete('cidade', [CidadesController::class,'destroy']);
Route::delete('uf', [UfsController::class,'destroy']);
Route::delete('comercio', [ComerciosController::class,'destroy']);
Route::delete('endereco', [EnderecosController::class,'destroy']);
Route::delete('itenstelefonecomercio', [ItensTelefoneComerciosController::class,'destroy']);
Route::delete('itenstelefoneusuario', [ItensTelefoneUsuariosController::class,'destroy']);
Route::delete('marca', [MarcasController::class,'destroy']);
Route::delete('publicacao', [PublicacaosController::class,'destroy']);
Route::delete('produto', [ProdutosController::class,'destroy']);
Route::delete('rank', [RanksController::class,'destroy']);
Route::delete('telefone', [TelefonesController::class,'destroy']);
Route::delete('tipos', [TiposController::class,'destroy']);
Route::delete('usuario', [UsuariosController::class,'destroy']);
Route::delete('avaliacao', [AvaliacaoController::class,'destroy']);

Route::post('login', [UsuariosController::class,'login']);
