<?php

namespace App\Livewire\Vendedor\Productos;

use App\Models\Categoria;
use App\Models\Comuna;
use App\Models\EstadoProducto;
use App\Models\Marca;
use App\Models\Material;
use App\Models\Modelo;
use App\Models\Producto;
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
    public $productoId;
    public $nombre, $descripcion, $estado_productos_id, $tipo_entregas_id, $marcas_id, $modelos_id, $cantidad,
        $estado_publicaciones_id, $precio, $foto1, $foto2, $foto3, $foto4, $foto5, $tallas_id, $material_id,
        $color, $alto, $ancho, $profundidad, $peso, $imperfeccion, $foto6, $tiempouso_id;

    //variables para las marcas y modelos
    public $marcas;
    public $modelos = [];
    public $modelo;
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


    public function mount($id)
    {
        $producto = Producto::find($id);
        if (!$producto) {
            return redirect()->route('show-productos')->with('error', 'Registro de Comuna no encontrado.');
        }
        $this->productoId = $producto->id;
        $this->nombre = $producto->nombre;
        $this->descripcion = $producto->descripcion;
        $this->categorias_id = $producto->categorias_id;
        $this->subcategorias_id = $producto->subcategorias_id;
        $this->estado_productos_id = $producto->estado_productos_id;
        $this->tipo_entregas_id = $producto->tipo_entregas_id;
        $this->marcas_id = $producto->marcas_id;
        $this->modelos_id = $producto->modelos_id;
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
        $this->color = $producto->color;
        $this->imperfeccion = $producto->imperfeccion;
        $this->foto_imperfeccion = $producto->foto_imperfeccion;
        $this->tiempouso_id = $producto->tiempouso_id;

       //marcas
        $this->marcas = Marca::all();
        $this->modelos = Modelo::where('marcas_id', $this->marcas_id)->get();
        //carga las regiones
        $this->regiones = Region::all();
        $this->comunas = Comuna::where('regiones_id',$this->regiones_id)->get();

        //carga las categorias y subcategorias
        $this->categorias = Categoria::all();
        $this->subcategorias =SubCategoria::where('categorias_id',$this->categorias_id)->get();
    }


    public function updatedMarcasId($value)
    {
        $this->modelos = Modelo::where('marcas_id', $value)->get();
    }

    public function updatedCategoriasId($value)
    {
        $this->subcategorias = SubCategoria::where('categorias_id', $value)->get();
        $this->subcategoria = $this->subcategorias->first()->id ?? null;
    }
    public function updatedRegionesId($value)
    {
        $this->comunas = Comuna::where('regiones_id', $value)->get();
        $this->comuna = $this->comunas->first()->id ?? null;
    }

    public function editar()
    {
        $producto = Producto::find($this->productoId);
        if (!$producto) {
            return redirect()->route('show-usuario')->with('error', 'Registro de Producto no encontrado.');
        }
        // Actualizar los atributos del producto
        $producto->nombre = $this->nombre;
        $producto->descripcion = $this->descripcion;
        $producto->categorias_id = $this->categorias_id;
        $producto->subcategorias_id = $this->subcategorias_id;
        $producto->estado_productos_id = $this->estado_productos_id;
        $producto->tipo_entregas_id = $this->tipo_entregas_id;
        $producto->marcas_id = $this->marcas_id;
        $producto->modelos_id = $this->modelos_id;
        $producto->estado_publicaciones_id = $this->estado_publicaciones_id;
        $producto->precio = $this->precio;
        // Actualizar las imágenes solo si se proporcionan nuevas imágenes
        if ($this->foto1) {

            // Verifica si la imagen actual es diferente de la nueva
            if ($this->foto1 != $producto->foto1) {
                // Elimina la imagen actual
                Storage::delete($producto->foto1);
                // Almacena la nueva imagen
                $producto->foto1 = $this->foto1->store('public/imagen');
            }
        }

        if ($this->foto2) {
            // Verifica si la imagen actual es diferente de la nueva
            if ($this->foto2 != $producto->foto2) {
                // Elimina la imagen actual
                Storage::delete($producto->foto2);
                // Almacena la nueva imagen
                $producto->foto2 = $this->foto2->store('public/imagen');
            }
        }

        if ($this->foto3) {
            // Verifica si la imagen actual es diferente de la nueva
            if ($this->foto3 != $producto->foto3) {
                // Elimina la imagen actual
                Storage::delete($producto->foto3);
                // Almacena la nueva imagen
                $producto->foto3 = $this->foto3->store('public/imagen');
            }
        }

        if ($this->foto4) {
            // Verifica si la imagen actual es diferente de la nueva
            if ($this->foto4 != $producto->foto4) {
                // Elimina la imagen actual
                Storage::delete($producto->foto4);
                // Almacena la nueva imagen
                $producto->foto4 = $this->foto4->store('public/imagen');
            }
        }

        if ($this->foto5) {
            // Verifica si la imagen actual es diferente de la nueva
            if ($this->foto5 != $producto->foto5) {
                // Elimina la imagen actual
                Storage::delete($producto->foto5);
                // Almacena la nueva imagen
                $producto->foto5 = $this->foto5->store('public/imagen');
            }
        }

        if ($this->foto6) {
            // Verifica si la imagen actual es diferente de la nueva
            if ($this->foto6 != $producto->foto_imperfeccion) {
                // Elimina la imagen actual
                Storage::delete($producto->foto5);
                // Almacena la nueva imagen
                $producto->foto_imperfeccion = $this->foto6->store('public/imagen');
            }
        }
        $producto->precio = $this->precio;
        $producto->regiones_id = $this->regiones_id;
        $producto->comunas_id = $this->comunas_id;
        $producto->tallas_id = $this->tallas_id;
        $producto->material_id = $this->material_id;
        $producto->alto = $this->alto;
        $producto->ancho = $this->ancho;
        $producto->profundidad = $this->profundidad;
        $producto->peso = $this->peso;
        $producto->color = $this->color;
        $producto->imperfeccion = $this->imperfeccion;
        $producto->tiempouso_id = $this->tiempouso_id;
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
        $tallas = Talla::all();
        $tiempos = TiempoUso::all();
        return view('livewire.vendedor.productos.editar-productos', compact( 'entregas', 'estadopros', 'materiales', 'tallas', 'tiempos'));
    }
}
