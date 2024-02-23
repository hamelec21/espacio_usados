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
    Route::get('/dashboard-administrador', function () {
        return view('dashboard-administrador');
    })->name('dashboard-administrador');
});

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


/*
|--------------------------------------------------------------------------
|                   Rutas del  Modulo de usuario
|--------------------------------------------------------------------------
*/
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/usuario/perfil/editar', App\Livewire\Usuario\Perfil\Editar::class)->name('editar');
    Route::get('/usuario/productos/show-productos', App\Livewire\Usuario\Productos\ShowProductos::class)->name('show-productos');
    Route::get('/usuario/productos/crear-producto', App\Livewire\Usuario\Productos\CrearProducto::class)->name('crear-producto');
    Route::get('/usuario/productos/editar-producto/{id}', App\Livewire\Usuario\Productos\EditarProducto::class)->name('editar-producto');
    Route::get('/usuario/mis-ventas', App\Livewire\Usuario\MisVentas::class)->name('mis-ventas');

});

