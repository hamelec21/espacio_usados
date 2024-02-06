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
    return view('home');
});

Route::get('/detalle_producto', function () {
    return view('/detalle_producto');
});

Route::get('/favorito', function () {
    return view('/favorito');
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
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
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
|                   Rutas del  Modulo de usuario
|--------------------------------------------------------------------------
*/
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/usuario/perfil/editar',App\Livewire\Usuario\Perfil\Editar::class)->name('editar');
    Route::get('/usuario/productos/show-productos',App\Livewire\Usuario\Productos\ShowProductos::class)->name('show-productos');
    Route::get('/usuario/productos/crear-producto',App\Livewire\Usuario\Productos\CrearProducto::class)->name('crear-producto');
    Route::get('/usuario/productos/editar-producto/{id}',App\Livewire\Usuario\Productos\EditarProducto::class)->name('editar-productos');

    });

/*
|--------------------------------------------------------------------------
|                   Rutas del  Modulo de seguridad
|--------------------------------------------------------------------------
*/
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
Route::get('/panel/seguridad/show-role',App\Livewire\Panel\Seguridad\Rol\ShowRole::class)->name('show-role');
Route::get('/panel/seguridad/crer-role',App\Livewire\Panel\Seguridad\Rol\CrearRole::class)->name('crear-role');
Route::get('/panel/seguridad/editar-role/{id}',App\Livewire\Panel\Seguridad\Rol\EditarRole::class)->name('editar-role');

//rutas de permisos
Route::get('/panel/seguridad/permiso/show-permisos',App\Livewire\Panel\Seguridad\Permiso\ShowPermisos::class)->name('show-permisos');
Route::get('/panel/seguridad/permiso/crear-permiso',App\Livewire\Panel\Seguridad\Permiso\CrearPermiso::class)->name('crear-permiso');
Route::get('/panel/seguridad/permiso/editar-permiso/{id}',App\Livewire\Panel\Seguridad\Permiso\EditarPermiso::class)->name('editar-permiso');
//rutas de permisos
Route::get('/panel/seguridad/usuario/show-usuario',App\Livewire\Panel\Seguridad\Usuario\ShowUsuario::class)->name('show-usuario');
Route::get('/panel/seguridad/usuario/editar-usuario/{id}',App\Livewire\Panel\Seguridad\Usuario\EditarUsuario::class)->name('editar-usuario');
});
