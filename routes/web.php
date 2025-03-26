<?php

use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;
use Monolog\Handler\RotatingFileHandler;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/productos',[ProductoController::class,'index'])->name('producto.index');
Route::get('/producto/nuevo',[productoController::class,'create'])->name('producto.create');
Route::get('/producto/ver/{producto}',[productoController::class,'show'])->name('producto.show');
Route::post('/producto/store',[productoController::class,'store'])->name('producto.store');
Route::delete('/producto/{producto}',[productoController::class,'destroy'])->name('producto.delete');
Route::get('/producto/editar/{producto}/',[productoController::class,'edit'])->name('producto.edit');
Route::patch('/producto/{producto}',[productoController::class,'update'])->name('producto.update');
Route::get('/categorias',[CategoriaController::class,'index'])->name('categoria.index');
Route::post('/categoria/store',[CategoriaController::class,'store'])->name('categoria.store');
Route::get('/categoria/edit/{categoria}',[CategoriaController::class,'edit'])->name('categoria.edit');
Route::delete('/categoria/{categoria}',[CategoriaController::class,'destroy'])->name('categoria.delete');
Route::patch('/categoria/{categoria}',[categoriaController::class,'update'])->name('categoria.update');
Route::get('/articulos',[ArticuloController::class,'index'])->name('articulo.index');
Route::get('/articulo/nuevo',[ArticuloController::class,'create'])->name('articulo.create');
Route::get('/articulo/ver/{articulo}',[ArticuloController::class,'show'])->name('articulo.show');
Route::post('/articulo/store',[ArticuloController::class,'store'])->name('articulo.store');
Route::delete('/articulo/{articulo}',[ArticuloController::class,'destroy'])->name('articulo.delete');
Route::get('/articulo/editar/{articulo}/',[ArticuloController::class,'edit'])->name('articulo.edit');
Route::patch('/articulo/{articulo}',[ArticuloController::class,'update'])->name('articulo.update');