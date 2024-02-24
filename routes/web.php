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
/*
|--------------------------------------------------------------------------
|                   Rutas del  frontend publicas
|--------------------------------------------------------------------------
*/

//productos detalle

Route::get('/detalle-producto/{id}', App\Livewire\DetalleProducto::class)->name('detalle-producto');

Route::get('/', function () {
    return view('home');
});


//modificar la ruta
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/perfil-usuario', function () {
        return view('perfil-usuario');
    })->name('perfil-usuario');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/mi-cuenta', function () {
        return view('mi-cuenta');
    })->name('mi-cuenta');
});



/*
|--------------------------------------------------------------------------
|                   Rutas de los Dashboard
|--------------------------------------------------------------------------
*/


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard-usuario', function () {
        return view('dashboard-usuario');
    })->name('dashboard-usuario');
});


/*
|--------------------------------------------------------------------------
|                   Rutas del  carrito
|--------------------------------------------------------------------------
*/
Route::get('/carrito', function () {
    return view('/carrito');
});
Route::get('/carrito', App\Livewire\Carrito::class)->name('carrito');




