<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('tcc', function () {
    return view('tcc');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('produtos','ProductsController@index');
Route::post('produtos','ProductsController@store');
Route::get('produtos/{produto}','ProductsController@show');
Route::get('produtos/{produto}/edit','ProductsController@edit');
Route::patch('produtos/{produto}','ProductsController@update');
Route::delete('produtos/{produto}','ProductsController@destroy');
