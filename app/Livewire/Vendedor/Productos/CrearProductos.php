<?php

namespace App\Livewire\Vendedor\Productos;

use App\Livewire\Frontend\Productos\Producto;
use App\Models\Categoria;
use App\Models\Comuna;
use App\Models\EstadoProducto;
use App\Models\Marca;
use App\Models\Material;
use App\Models\ProductoVendedor;
use App\Models\Region;
use App\Models\SubCategoria;
use App\Models\Talla;
use App\Models\TiempoUso;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Livewire\Component;

class CrearProductos extends Component
{
    use WithFileUploads;
    public $caracteres;
    public $nombre, $descripcion, $estado_productos_id, $marca, $cantidad,
        $estado_publicaciones_id, $precio, $foto1, $foto2, $foto3, $foto4, $foto5, $tallas_id, $material_id,
        $alto, $ancho, $profundidad, $peso, $tiempouso_id;

    //variables para las marcas y modelos
    public $marcas;
    public $images = [];
    //variables para las regiones y comunas
    public $comunas = [];
    public $regiones_id;
    public $comunas_id;
    public $comuna;
    public $regiones;

    //variables para las carga de categorias y subcategorias
    public $subcategorias = [];
    public $categorias_id;
    public $subcategorias_id;
    public $subcategoria;
    public $categorias;

    //nuevas variables
         public $nuevaMarca;


    public function mount()
    {
        //carga las marcas
        $this->marcas = Marca::all();
        //carga las regiones
        $this->regiones = Region::all();
        $this->comunas = collect();
        //carga las categorias y subcategorias
        $this->categorias = Categoria::all();
        $this->subcategorias = collect();

    }

    public function guardarMarca()
    {}

    public function save()
    {
        // Verificar si la marca ya existe en la base de datos
        $marcaExistente = Marca::where('nombre', $this->nuevaMarca)->first();
         // Obtener el ID de la marca existente o crear una nueva marca
        $marcaId = $marcaExistente ? $marcaExistente->id : Marca::create(['nombre' => $this->nuevaMarca])->id;
        // Limpiar el campo de entrada
        $this->nuevaMarca = '';




        

        // Almacenar las imágenes
        $path1 = $this->foto1->store('public/imagen');
        $path2 = $this->foto2->store('public/imagen');
        $path3 = $this->foto3->store('public/imagen');
        $path4 = $this->foto4->store('public/imagen');
        $path5 = $this->foto5->store('public/imagen');

        // Crear el producto con los datos proporcionados
        ProductoVendedor::create([
            'sku' => 12234, // Asignar el SKU generado
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'categorias_id' => $this->categorias_id,
            'subcategorias_id' => $this->subcategorias_id,
            'marcas_id' => $marcaId, // Usar el ID de la marca
            'estado_publicaciones_id' => 1,
            'estado_productos_id' => $this->estado_productos_id,
            'precio' => $this->precio,
            'cantidad' => $this->cantidad,
            'users_id' => auth()->user()->id,
            'foto1' => $path1,
            'foto2' => $path2,
            'foto3' => $path3,
            'foto4' => $path4,
            'foto5' => $path5,
            'regiones_id' => $this->regiones_id,
            'comunas_id' => $this->comunas_id,
            'tallas_id' => $this->tallas_id,
            'material_id' => $this->material_id,
            'alto' => $this->alto,
            'ancho' => $this->ancho,
            'profundidad' => $this->profundidad,
            'peso' => $this->peso,
            'tiempouso_id' => $this->tiempouso_id,
        ]);

        // Resetear los campos del formulario después de crear el producto
        $this->reset([
            'nombre', 'descripcion', 'categorias_id', 'estado_productos_id',
            'marca',  'estado_publicaciones_id',
            'foto1', 'foto2', 'foto3', 'foto4', 'foto5', 'regiones_id', 'comunas_id', 'alto', 'ancho', 'profundidad', 'peso','tiempouso_id'
        ]);

        // Redirigir a la ruta deseada después de crear el producto
        return redirect()->route('show-productos');
    }


    public function updatedCategoriasId($value)
    {
        $this->subcategorias = SubCategoria::where('categorias_id', $value)->get();
        $this->subcategoria = $this->subcategorias->first()->id ?? null;
    }



    public function updatedRegionesId($value)
    {

        $this->comunas = Comuna::where('regiones_id', $value)->orderBy('nombre', 'asc')->get();
        $this->comuna = $this->comunas->first()->id ?? null;
    }



    public function cancelar()
    {
        return redirect()->route('show-productos');
    }

    public function render()
    {

        $estadopros = EstadoProducto::all();
        $materiales = Material::all();
        $tallas = Talla::all();
        $tiempos = TiempoUso::all();
        return view('livewire.vendedor.productos.crear-productos', compact('estadopros', 'materiales', 'tallas', 'tiempos'));
    }
}
