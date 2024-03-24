<?php

namespace App\Livewire\Vendedor\Productos;

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
use App\Models\TipoEntrega;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class EditarProductos extends Component
{
    use WithFileUploads;

    public $caracteres;
    public $nombre, $descripcion, $estado_productos_id, $marcas_id, $cantidad,
        $estado_publicaciones_id, $precio, $foto1, $foto2, $foto3, $foto4, $foto5, $tallas_id, $material_id,
        $alto, $ancho, $profundidad, $peso, $tiempouso_id;

    //variables para las marcas
    public $marcas;
    public $images = [];


    //variables para las regiones y comunas
    public $comunas = [];
    public $regiones_id;
    public $comunas_id;
    public $comuna;
    public $regiones;
    public $productoId;

    //variables para las carga de categorias y subcategorias
    public $subcategorias = [];
    public $categorias_id;
    public $subcategorias_id;
    public $subcategoria;
    public $categorias;

    public function mount($id)
    {
        $producto =  ProductoVendedor::find($id);
        if (!$producto) {
            return redirect()->route('show-productos')->with('error', 'Registro de Comuna no encontrado.');
        }
        $this->productoId = $producto->id;
        $this->nombre = $producto->nombre;
        $this->cantidad = $producto->cantidad;
        $this->descripcion = $producto->descripcion;
        $this->categorias_id = $producto->categorias_id;
        $this->subcategorias_id = $producto->subcategorias_id;
        $this->estado_productos_id = $producto->estado_productos_id;
        $this->marcas_id = $producto->marcas_id;
        $this->estado_publicaciones_id = $producto->estado_publicaciones_id;
        $this->precio = $producto->precio;
        $this->foto1 = $producto->foto1;
        $this->foto2 = $producto->foto2;
        $this->foto3 = $producto->foto3;
        $this->foto4 = $producto->foto4;
        $this->foto5 = $producto->foto5;
        $this->regiones_id = $producto->regiones_id;
        $this->comunas_id = $producto->comunas_id;
        $this->tallas_id = $producto->tallas_id;
        $this->material_id = $producto->material_id;
        $this->alto = $producto->alto;
        $this->ancho = $producto->ancho;
        $this->profundidad = $producto->profundidad;
        $this->peso = $producto->peso;
        $this->tiempouso_id = $producto->tiempouso_id;
        //marcas
        $this->marcas = Marca::all();
        //carga las regiones
        $this->regiones = Region::all();
        $this->comunas = Comuna::where('regiones_id', $this->regiones_id)->get();
        //carga las categorias y subcategorias
        $this->categorias = Categoria::all();
        $this->subcategorias = SubCategoria::where('categorias_id', $this->categorias_id)->get();
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

    public function editar()
    {
        $producto = ProductoVendedor::find($this->productoId);
        if (!$producto) {
            return redirect()->route('show-usuario')->with('error', 'Registro de Producto no encontrado.');
        }

        // Verificar que se proporcionen imágenes antes de intentar guardarlas
        if (count($this->images) > 5) {
            $this->addError('images', 'No puedes cargar más de 5 imágenes.');
            return;
        }

        // Verificar si la imagen actual es diferente de la nueva y actualizar solo las que han cambiado
        $photoPaths = [];
        for ($i = 0; $i < count($this->images); $i++) {
            if ($this->images[$i] !== null) {
                $photoPaths[] = $this->images[$i]->store('public/producto');
                $producto["foto" . ($i + 1)] = $photoPaths[$i];
            }
        }

        // Actualizar los demás datos del producto
        $producto->update([
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'cantidad' => $this->cantidad,
            'categorias_id' => $this->categorias_id,
            'subcategorias_id' => $this->subcategorias_id,
            'estado_productos_id' => $this->estado_productos_id,
            'marcas_id' => $this->marcas_id,
            'estado_publicaciones_id' => $this->estado_publicaciones_id,
            'precio' => $this->precio,
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

        // Guardar los cambios en la base de datos
        $producto->save();

        $this->dispatch('editar');

        return redirect()->route('show-productos');
    }



    public function cancelar()
    {
        return redirect()->route('show-productos');
    }

    public function render()
    {

        $entregas = TipoEntrega::all();
        $estadopros = EstadoProducto::all();
        $materiales = Material::all();
        $tallas = Talla::where('subcategorias_id', $this->subcategoria)->get();
        $tiempos = TiempoUso::all();
        return view('livewire.vendedor.productos.editar-productos', compact('estadopros', 'materiales', 'tallas', 'tiempos'));
    }
}
