<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ComicsController;
use App\Http\Controllers\MangasController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CarroController;
use App\Http\Controllers\EditorialesController;
use Symfony\Component\Routing\Exception\RouteNotFoundException;

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

Route::get('/', HomeController::class)->name('home');

Route::get('comics', [ComicsController::class, "index"])->name('comics.index');

Route::get('mangas', [MangasController::class, "index"])->name('mangas.index');

Route::get('editorial/{editorial}', [EditorialesController::class, "index"])->name('editorial.index');

Route::get('login',[LoginController::class,"index"]);

Route::get('carro',[CarroController::class,"index"])->name('carro.index');

Route::get('productos', [ProductosController::class, "index"])->name('productos.index');

Route::get('productos/{producto}', [ProductosController::class, "show"])->name('productos.show');

Route::post('ajax', [CarroController::class, 'ajax'])->name('carro.ajax');

Route::get('finalizar-compra', [CarroController::class, 'finaliza'])->name('carro.finaliza');



// Route::get('productos/{id}', [ProductosController::class, "show"])->name('productos.show');

// Route::resource('productos', [ProductosController::class]);



// Route::get('comics', [ComicsController::class, "index"]);

//SEGUNDO PARAMETRO OPCIONAL LLEVA "?" AL FINAL Y SE DEFINE VALOR EN FUNCION
// Route::get('saludo/{nombre}/{apellido?}', function ($nombre,$apellido=NULL) {
//     //return "SALUDOS, $nombre $apellido";
//     if($apellido == NULL){
//         return "Saludos, nombre: $nombre";
//     }else{
//         return "SALUDOS, nombre: $nombre apellido: $apellido";
//     }
// });