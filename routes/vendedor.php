<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    //ruta acceso al dashboard
    Route::get('/vendedor/dashboard', App\Livewire\Vendedor\Dashboard::class)->name('dashboard');
    //rutas para los productos
    Route::get('/vendedor/productos/show-productos', App\Livewire\Vendedor\Productos\ShowProductos::class)->name('show-productos');
    Route::get('/vendedor/productos/crear-productos', App\Livewire\Vendedor\Productos\CrearProductos::class)->name('crear-productos');
    Route::get('/vendedor/productos/editar-productos/{id}', App\Livewire\Vendedor\Productos\EditarProductos::class)->name('editar-productos');
    //ruta para el perfil
    Route::get('/vendedor/perfil/editar-perfil', App\Livewire\Vendedor\Perfil\EditarPerfil::class)->name('editar-perfil');
});
