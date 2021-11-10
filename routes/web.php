<?php

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

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\FacturaController;
// use App\Http\Controllers\DetFacturaController;



Route::get('/', function () {
    return view('welcome');
});

// :::::::::: ROUTES CATEGORIAS >>>>>>>>>>>>>>>>
Route::get('/api/categoria', [CategoriaController::class, 'index']);
Route::get('/api/categoria/getCateg', [CategoriaController::class, 'getCategoria']);
Route::post('/api/categoria/registrar', [CategoriaController::class, 'store']);
Route::put('/api/categoria/actualizar', [CategoriaController::class, 'update']);
Route::post('/api/categoria/eliminar', [CategoriaController::class, 'destroy']);


// :::::::::: ROUTES CLIENTES >>>>>>>>>>>>>>>>
Route::get('/api/cliente', [ClienteController::class, 'index']);
Route::post('/api/cliente/registrar', [ClienteController::class, 'store']);
Route::put('/api/cliente/actualizar', [ClienteController::class, 'update']);
Route::post('/api/cliente/eliminar', [ClienteController::class, 'destroy']);



// :::::::::: ROUTES MARCAS >>>>>>>>>>>>>>>>
Route::get('/api/marca', [MarcaController::class, 'index']);
Route::get('/api/marca/getmarca', [MarcaController::class, 'getMarca']);
Route::post('/api/marca/registrar', [MarcaController::class, 'store']);
Route::put('/api/marca/actualizar', [MarcaController::class, 'update']);
Route::post('/api/marca/eliminar', [MarcaController::class, 'destroy']);



// :::::::::: ROUTES PRODUCTOS >>>>>>>>>>>>>>>>
Route::get('/api/producto', [ProductoController::class, 'index']);
Route::post('/api/producto/registrar', [ProductoController::class,'store']);
Route::put('/api/producto/actualizar', [ProductoController:: class, 'update']);
Route::post('/api/producto/eliminar', [ProductoController:: class, 'destroy']);




// :::::::::: ROUTES FACTURAS >>>>>>>>>>>>>>>>
Route::get('/api/factura', [FacturaController:: class, 'index']);
Route::post('/api/factura/registrar', [FacturaController:: class, 'store']);
Route::put('/api/factura/actualizar', [FacturaController:: class, 'update']);
Route::post('/api/factura/eliminar', [FacturaController:: class, 'destroy']);




// :::::::::: ROUTES DETFACTURAS >>>>>>>>>>>>>>>>
// Route::get('/api/detfact', [DetFacturaController:: class, 'index']);
// Route::post('/api/detfact/registrar', [DetFacturaController:: class, 'store']);
Route::put('/api/detfact/actualizar', [DetFacturaController:: class, 'update']);
// Route::post('/api/detfact/eliminar', [DetFacturaController:: class, 'destroy']);



