<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;

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

Route ::get('/clientes',[clientescontroller::class,'index'])->name('clientes.index');
Route ::post('/clientes',[clientescontroller::class,'store'])->name('clientes.store');
Route ::get('/clientes/create',[clientescontroller::class,'create'])->name('clientes.create');
Route ::delete('/clientes/{cliente}',[clientescontroller::class,'destroy'])->name('clientes.destroy');
Route ::put('/clientes/{cliente}',[clientescontroller::class,'update'])->name('clientes.update');
Route ::get('/clientes/{cliente}/edit',[clientescontroller::class,'edit'])->name('clientes.edit');

