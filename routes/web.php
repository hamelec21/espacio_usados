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

/*
/*
|--------------------------------------------------------------------------
|                   Rutas del  Modulo de config app
|--------------------------------------------------------------------------
*/
Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    /*rutas para las categorias*/
    Route::get('panel/config/categorias/show-categorias', App\Livewire\Panel\Config\Categorias\ShowCategorias::class)->name('show-categorias');
    Route::get('panel/config/categorias/crear-categoria', App\Livewire\Panel\Config\Categorias\CrearCategoria::class)->name('crear-categoria');
    Route::get('panel/config/categorias/editar-categoria/{id}', App\Livewire\Panel\Config\Categorias\EditarCategoria::class)->name('editar-categoria');
      /*rutas para las subcategorias*/
      Route::get('panel/config/sub-categoria/show-subcategorias', App\Livewire\Panel\Config\SubCategoria\ShowSubcategorias::class)->name('show-subcategorias');
      Route::get('panel/config/sub-categoria/crear-subcategoria', App\Livewire\Panel\Config\SubCategoria\CrearSubcategoria::class)->name('crear-subcategoria');
      Route::get('panel/config/sub-categoria/editar-subcategoria/{id}', App\Livewire\Panel\Config\SubCategoria\EditarSubcategoria::class)->name('editar-subcategoria');

    /*!ruta para entreaga tipo */
    Route::get('panel/config/entrega-tipo/show-tipo-entrega', App\Livewire\Panel\Config\EntregaTipo\ShowTipoEntrega::class)->name('show-tipo-entrega');
    Route::get('panel/config/entrega-tipo/crear-tipo-entrega', App\Livewire\Panel\Config\EntregaTipo\CrearTipoEntrega::class)->name('crear-tipo-entrega');
    Route::get('panel/config/entrega-tipo/editar-tipo-entrega/{id}', App\Livewire\Panel\Config\EntregaTipo\EditarTipoEntrega::class)->name('editar-tipo-entrega');
    /* ruta para las Estados Productos */
    Route::get('panel/config/estado-producto/show-estado-producto', App\Livewire\Panel\Config\EstadoProducto\ShowEstadoProducto::class)->name('show-estado-producto');
    Route::get('panel/config/estado-producto/crear-estado-producto', App\Livewire\Panel\Config\EstadoProducto\CrearEstadoProducto::class)->name('crear-estado-producto');
    Route::get('panel/config/estado-producto/editar-estado-producto/{id}', App\Livewire\Panel\Config\EstadoProducto\EditarEstadoProducto::class)->name('editar-estado-producto');
    /* ruta para las Estados publicacion */
    Route::get('panel/config/estado-publicacion/show-estado-publicacion', App\Livewire\Panel\Config\EstadoPublicacion\ShowEstadoPublicacion::class)->name('show-estado-publicacion');
    Route::get('panel/config/estado-publicacion/crear-estado-publicacion', App\Livewire\Panel\Config\EstadoPublicacion\CrearEstadoPublicacion::class)->name('crear-estado-publicacion');
    Route::get('panel/config/estado-publicacion/editar-estado-publicacion/{id}', App\Livewire\Panel\Config\EstadoPublicacion\EditarEstadoPublicacion::class)->name('editar-estado-publicacion');
    /* ruta para las Estados de usuario */
    Route::get('panel/config/estado-usuario/show-estado-usuario', App\Livewire\Panel\Config\EstadoUsuario\ShowEstadoUsuario::class)->name('show-estado-usuario');
    Route::get('panel/config/estado-usuario/crear-estado-usuario', App\Livewire\Panel\Config\EstadoUsuario\CrearEstadoUsuario::class)->name('crear-estado-usuario');
    Route::get('panel/config/estado-usuario/editar-estado-usuario/{id}', App\Livewire\Panel\Config\EstadoUsuario\EditarEstadoUsuario::class)->name('editar-estado-usuario');
    /* ruta para las Marcas */
    Route::get('panel/config/marcas/show-marcas', App\Livewire\Panel\Config\Marcas\ShowMarcas::class)->name('show-marcas');
    Route::get('panel/config/marcas/crear-marca', App\Livewire\Panel\Config\Marcas\CrearMarca::class)->name('crear-marca');
    Route::get('panel/config/marcas/editar-marca/{id}', App\Livewire\Panel\Config\Marcas\EditarMarca::class)->name('editar-marca');
    /* ruta para las Marcas */
    Route::get('panel/config/modelos/show-modelos', App\Livewire\Panel\Config\Modelos\ShowModelos::class)->name('show-modelos');
    Route::get('panel/config/modelos/crear-modelo', App\Livewire\Panel\Config\Modelos\CrearModelo::class)->name('crear-modelo');
    Route::get('panel/config/modelos/editar-modelo/{id}', App\Livewire\Panel\Config\Modelos\EditarModelo::class)->name('editar-modelo');
});

/*
|--------------------------------------------------------------------------
|                   Rutas del  Modulo de seguridad
|--------------------------------------------------------------------------
*/
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/panel/seguridad/show-role', App\Livewire\Panel\Seguridad\Rol\ShowRole::class)->name('show-role');
    Route::get('/panel/seguridad/crer-role', App\Livewire\Panel\Seguridad\Rol\CrearRole::class)->name('crear-role');
    Route::get('/panel/seguridad/editar-role/{id}', App\Livewire\Panel\Seguridad\Rol\EditarRole::class)->name('editar-role');

    //rutas de permisos
    Route::get('/panel/seguridad/permiso/show-permisos', App\Livewire\Panel\Seguridad\Permiso\ShowPermisos::class)->name('show-permisos');
    Route::get('/panel/seguridad/permiso/crear-permiso', App\Livewire\Panel\Seguridad\Permiso\CrearPermiso::class)->name('crear-permiso');
    Route::get('/panel/seguridad/permiso/editar-permiso/{id}', App\Livewire\Panel\Seguridad\Permiso\EditarPermiso::class)->name('editar-permiso');
    //rutas de permisos
    Route::get('/panel/seguridad/usuario/show-usuario', App\Livewire\Panel\Seguridad\Usuario\ShowUsuario::class)->name('show-usuario');
    Route::get('/panel/seguridad/usuario/editar-usuario/{id}', App\Livewire\Panel\Seguridad\Usuario\EditarUsuario::class)->name('editar-usuario');
});
