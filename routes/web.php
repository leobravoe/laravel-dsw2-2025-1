<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/tipoproduto", "App\Http\Controllers\TipoProdutoController@index");
Route::get("/tipoproduto/create", "App\Http\Controllers\TipoProdutoController@create");
Route::post("/tipoproduto", "App\Http\Controllers\TipoProdutoController@store");

Route::get("/produto", "App\Http\Controllers\ProdutoController@index");
Route::get("/produto/create", "App\Http\Controllers\ProdutoController@create");
Route::post("/produto", "App\Http\Controllers\ProdutoController@store");
