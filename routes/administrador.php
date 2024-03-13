<?php

use Illuminate\Support\Facades\Route;

/*
/*
|--------------------------------------------------------------------------
|                   Rutas del  Modulo de administrador
|--------------------------------------------------------------------------
*/

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    /*ruta del Dashboard*/
    Route::get('administrador/dashboard', App\Livewire\Administrador\Dashboard::class)->name('administrador.dashboard');

    /*rutas para las tallas*/
    Route::get('administrador/parametros/tallas/show-tallas', App\Livewire\Administrador\Parametros\Tallas\ShowTallas::class)->name('show-tallas');
    Route::get('administrador/parametros/tallas/crear-talla', App\Livewire\Administrador\Parametros\Tallas\CrearTalla::class)->name('crear-talla');
    Route::get('administrador/parametros/tallas/editar-talla/{id}', App\Livewire\Administrador\Parametros\Tallas\EditarTalla::class)->name('editar-talla');

    /*rutas para las colores*/
    Route::get('administrador/parametros/colores/show-colores', App\Livewire\Administrador\Parametros\Colores\ShowColores::class)->name('show-colores');
    Route::get('administrador/parametros/colores/crear-color', App\Livewire\Administrador\Parametros\Colores\CrearColor::class)->name('crear-color');
    Route::get('administrador/parametros/colores/editar-color/{id}', App\Livewire\Administrador\Parametros\Colores\EditarColor::class)->name('editar-color');

    /*rutas para las materiales*/
    Route::get('administrador/parametros/materiales/show-material', App\Livewire\Administrador\Parametros\Materiales\ShowMaterial::class)->name('show-material');
    Route::get('administrador/parametros/materiales/crear-material', App\Livewire\Administrador\Parametros\Materiales\CrearMaterial::class)->name('crear-material');
    Route::get('administrador/parametros/materiales/editar-material/{id}', App\Livewire\Administrador\Parametros\Materiales\EditarMaterial::class)->name('editar-material');

    /*rutas para las categorias*/
    Route::get('administrador/parametros/categorias/show-categorias', App\Livewire\Administrador\Parametros\Categorias\ShowCategorias::class)->name('show-categorias');
    Route::get('administrador/parametros/categorias/crear-categoria', App\Livewire\Administrador\Parametros\Categorias\CrearCategoria::class)->name('crear-categoria');
    Route::get('administrador/parametros/categorias/editar-categoria/{id}', App\Livewire\Administrador\Parametros\Categorias\EditarCategoria::class)->name('editar-categoria');

    /*rutas para las subcategorias*/
    Route::get('administrador/parametros/subcategoria/show-subcategoria', App\Livewire\Administrador\Parametros\Subcategoria\ShowSubcategorias::class)->name('show-subcategoria');
    Route::get('administrador/parametros/subcategoria/crear-subcategoria', App\Livewire\Administrador\Parametros\Subcategoria\CrearSubcategoria::class)->name('crear-subcategoria');
    Route::get('administrador/parametros/subcategoria/editar-subcategoria/{id}', App\Livewire\Administrador\Parametros\Subcategoria\EditarSubcategoria::class)->name('editar-subcategoria');

    /*ruta estado producto*/
    Route::get('administrador/parametros/estadoproducto/show-estado-producto', App\Livewire\Administrador\Parametros\Estadoproducto\ShowEstadoProducto::class)->name('show-estado-producto');
    Route::get('administrador/parametros/estadoproducto/crear-estado-producto', App\Livewire\Administrador\Parametros\Estadoproducto\CrearEstadoProducto::class)->name('crear-estado-producto');
    Route::get('administrador/parametros/estadoproducto/editar-estado-producto/{id}', App\Livewire\Administrador\Parametros\Estadoproducto\EditarEstadoProducto::class)->name('editar-estado-producto');

    /*ruta estado publicacion*/
    Route::get('administrador/parametros/estadopublicacion/show-estado-publicacion', App\Livewire\Administrador\Parametros\Estadopublicacion\ShowEstadoPublicaciones::class)->name('show-estado-publicacion');
    Route::get('administrador/parametros/estadopublicacion/crear-estado-publicacion', App\Livewire\Administrador\Parametros\Estadopublicacion\CrearEstadoPublicacion::class)->name('crear-estado-publicacion');
    Route::get('administrador/parametros/estadopublicacion/editar-estado-publicacion/{id}', App\Livewire\Administrador\Parametros\Estadopublicacion\EditarEstadoPublicacion::class)->name('editar-estado-publicacion');

    /*ruta estado usuario*/
    Route::get('administrador/parametros/estadousuario/show-estado-usuario', App\Livewire\Administrador\Parametros\Estadousuario\ShowEstadoUsuario::class)->name('show-estado-usuario');
    Route::get('administrador/parametros/estadousuario/crear-estado-usuario', App\Livewire\Administrador\Parametros\Estadousuario\CrearEstadoUsuario::class)->name('crear-estado-usuario');
    Route::get('administrador/parametros/estadousuario/editar-estado-usuario/{id}', App\Livewire\Administrador\Parametros\Estadousuario\EditarEstadoUsuario::class)->name('editar-estado-usuario');

    /*ruta marca*/
    Route::get('administrador/parametros/marcas/show-marca', App\Livewire\Administrador\Parametros\Marcas\ShowMarca::class)->name('show-marca');
    Route::get('administrador/parametros/marcas/crear-marca', App\Livewire\Administrador\Parametros\Marcas\CrearMarca::class)->name('crear-marca');
    Route::get('administrador/parametros/marcas/editar-marca/{id}', App\Livewire\Administrador\Parametros\Marcas\EditarMarca::class)->name('editar-marca');

    /*ruta modelos*/
    Route::get('administrador/parametros/modelos/show-modelos', App\Livewire\Administrador\Parametros\Modelos\ShowModelos::class)->name('show-modelos');
    Route::get('administrador/parametros/modelos/crear-modelo', App\Livewire\Administrador\Parametros\Modelos\CrearModelo::class)->name('crear-modelo');
    Route::get('administrador/parametros/modelos/editar-modelo/{id}', App\Livewire\Administrador\Parametros\Modelos\EditarModelo::class)->name('editar-modelo');

    /*ruta tipo entregas*/
    Route::get('administrador/parametros/tipoentrega/show-tipo-entregas', App\Livewire\Administrador\Parametros\Tipoentrega\ShowTipoEntregas::class)->name('show-tipo-entregas');
    Route::get('administrador/parametros/tipoentrega/crear-tipo-entrega', App\Livewire\Administrador\Parametros\Tipoentrega\CrearTipoEntrega::class)->name('crear-tipo-entrega');
    Route::get('administrador/parametros/tipoentrega/editar-tipo-entrega/{id}', App\Livewire\Administrador\Parametros\Tipoentrega\EditarTipoEntrega::class)->name('editar-tipo-entrega');

    /*ruta tipo usuarios*/
    Route::get('administrador/parametros/usuario/show-usuario', App\Livewire\Administrador\Parametros\Usuario\ShowUsuario::class)->name('show-usuario');
    Route::get('administrador/parametros/usuario/editar-usuario/{id}', App\Livewire\Administrador\Parametros\Usuario\EditarUsuario::class)->name('editar-usuario');
});

/*Rutas de Seguridad*/

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    /*ruta de permiso*/
    Route::get('administrador/parametros/seguridad/permiso/show-permisos', App\Livewire\Administrador\Parametros\Seguridad\Permiso\ShowPermisos::class)->name('show-permisos');
    Route::get('administrador/parametros/seguridad/permiso/crear-permiso', App\Livewire\Administrador\Parametros\Seguridad\Permiso\CrearPermiso::class)->name('crear-permiso');
    Route::get('administrador/parametros/seguridad/permiso/editar-permiso/{id}', App\Livewire\Administrador\Parametros\Seguridad\Permiso\CrearPermiso::class)->name('editar-permiso');

    /*ruta de role*/
    Route::get('administrador/parametros/seguridad/rol/show-role', App\Livewire\Administrador\Parametros\Seguridad\Rol\ShowRole::class)->name('show-role');
    Route::get('administrador/parametros/seguridad/rol/crear-role', App\Livewire\Administrador\Parametros\Seguridad\Rol\CrearRole::class)->name('crear-role');
    Route::get('administrador/parametros/seguridad/rol/editar-role/{id}', App\Livewire\Administrador\Parametros\Seguridad\Rol\EditarRole::class)->name('editar-role');
});
