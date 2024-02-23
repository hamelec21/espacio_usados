<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/usuario/perfil/editar', App\Livewire\Usuario\Perfil\Editar::class)->name('editar');
    Route::get('/vendedor/productos/show-productos', App\Livewire\Vendedor\Productos\ShowProductos::class)->name('show-productos');
    Route::get('/vendedor/productos/crear-productos', App\Livewire\Vendedor\Productos\CrearProductos::class)->name('crear-productos');
    Route::get('/vendedor/productos/editar-productos/{id}', App\Livewire\Vendedor\Productos\EditarProductos::class)->name('editar-productos');
    Route::get('/usuario/mis-ventas', App\Livewire\Usuario\MisVentas::class)->name('mis-ventas');

});
