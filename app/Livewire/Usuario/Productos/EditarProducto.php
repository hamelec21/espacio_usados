<?php

namespace App\Livewire\Usuario\Productos;

use App\Models\Categoria;
use App\Models\EstadoProducto;
use App\Models\Marca;
use App\Models\Modelo;
use App\Models\Producto;
use App\Models\TipoEntrega;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class EditarProducto extends Component
{
    use WithFileUploads;
    public $productoId;
    public $producto;
    public $marcas;
    public $modelos = [];
    public $modelo;
    public $images = [];
    public $caracteres;
    public $nombre, $descripcion, $categorias_id, $estado_productos_id, $tipo_entregas_id, $marcas_id, $modelos_id,
        $estado_publicaciones_id, $precio, $foto1, $foto2, $foto3, $foto4, $foto5;


    public function mount($id)
    {
        $producto = Producto::find($id);
        if (!$producto) {
            return redirect()->route('show-usuario')->with('error', 'Registro de Comuna no encontrado.');
        }
        $this->productoId = $producto->id;
        $this->nombre = $producto->nombre;
        $this->descripcion = $producto->descripcion;
        $this->categorias_id = $producto->categorias_id;
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

        $this->marcas = Marca::all();
        $this->modelos = Modelo::where('marcas_id', $this->marcas_id)->get();
    }


    public function updatedMarcasId($value)
    {
        $this->modelos = Modelo::where('marcas_id', $value)->get();
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
                $producto->foto1 = $this->foto1->store('images', 'public');
            }
        }

        if ($this->foto2) {
            // Verifica si la imagen actual es diferente de la nueva
            if ($this->foto2 != $producto->foto2) {
                // Elimina la imagen actual
                Storage::delete($producto->foto2);
                // Almacena la nueva imagen
                $producto->foto2 = $this->foto2->store('images', 'public');
            }
        }

        if ($this->foto3) {
            // Verifica si la imagen actual es diferente de la nueva
            if ($this->foto3 != $producto->foto3) {
                // Elimina la imagen actual
                Storage::delete($producto->foto3);
                // Almacena la nueva imagen
                $producto->foto3 = $this->foto3->store('images', 'public');
            }
        }

        if ($this->foto4) {
            // Verifica si la imagen actual es diferente de la nueva
            if ($this->foto4 != $producto->foto4) {
                // Elimina la imagen actual
                Storage::delete($producto->foto4);
                // Almacena la nueva imagen
                $producto->foto4 = $this->foto4->store('images', 'public');
            }
        }

        if ($this->foto5) {
            // Verifica si la imagen actual es diferente de la nueva
            if ($this->foto5 != $producto->foto5) {
                // Elimina la imagen actual
                Storage::delete($producto->foto5);
                // Almacena la nueva imagen
                $producto->foto5 = $this->foto5->store('images', 'public');
            }
        }












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
        $categorias = Categoria::all();
        $entregas = TipoEntrega::all();
        $estadopros = EstadoProducto::all();
        return view('livewire.usuario.productos.editar-producto', compact('categorias', 'entregas', 'estadopros'));
    }
}
