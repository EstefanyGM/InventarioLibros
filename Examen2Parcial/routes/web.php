<?php

use App\Http\Livewire\InventarioLibros\Editar;
use App\Http\Livewire\InventarioLibros\IndexLibros;
use App\Http\Livewire\InventarioLibros\Mostrar;
use App\Models\Libro;
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

Route::get('/Libros', IndexLibros::class)->name('index.libro');
Route::get('/Libros/{libro}/editar', Editar::class)->name('editar.libro');
Route::get('/Libros/{libro}/mostrar', Mostrar::class)->name('mostrar.libro');
