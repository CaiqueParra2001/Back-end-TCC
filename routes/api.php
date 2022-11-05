<?php

use App\Http\Controllers\BusinessController;
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

Route::post("user", [UsuariosController::class, "store"]);
Route::get("user", [UsuariosController::class, "index"]);
Route::post("business", [BusinessController::class, "store"]);
Route::get("business", [BusinessController::class, "index"]);
