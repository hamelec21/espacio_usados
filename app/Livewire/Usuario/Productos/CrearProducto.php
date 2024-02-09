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
use Illuminate\Support\Str;

class CrearProducto extends Component
{
    use WithFileUploads;
    public $marcas;
    public $modelos = [];
    public $modelo;
    public $images = [];
    public $caracteres;
    public $nombre, $descripcion, $categorias_id, $estado_productos_id, $tipo_entregas_id, $marcas_id, $modelos_id,
            $estado_publicaciones_id, $precio, $foto1, $foto2, $foto3, $foto4, $foto5;

            public function save()
            {
                // Generar SKU automáticamente
                $sku = $this->generarSKU();

                // Almacenar las imágenes
                $path1 = $this->foto1->store('images', 'public');
                $path2 = $this->foto2->store('images', 'public');
                $path3 = $this->foto3->store('images', 'public');
                $path4 = $this->foto4->store('images', 'public');
                $path5 = $this->foto5->store('images', 'public');

                // Crear el producto con los datos proporcionados
                Producto::create([
                    'nombre' => $this->nombre,
                    'users_id' => auth()->user()->id,
                    'regiones_id' => auth()->user()->regiones_id,
                    'comunas_id' => auth()->user()->comunas_id,
                    'descripcion' => $this->descripcion,
                    'categorias_id' => $this->categorias_id,
                    'estado_productos_id' => $this->estado_productos_id,
                    'tipo_entregas_id' => $this->tipo_entregas_id,
                    'marcas_id' => $this->marcas_id,
                    'modelos_id' => $this->modelos_id,
                    'estado_publicaciones_id' => 1,
                    'precio' => $this->precio,
                    'sku' => $sku, // Asignar el SKU generado
                    'foto1' => $path1,
                    'foto2' => $path2,
                    'foto3' => $path3,
                    'foto4' => $path4,
                    'foto5' => $path5,
                ]);

                // Resetear los campos del formulario después de crear el producto
                $this->reset([
                    'nombre', 'descripcion', 'categorias_id', 'estado_productos_id',
                    'tipo_entregas_id', 'marcas_id', 'modelos_id', 'estado_publicaciones_id',
                    'foto1', 'foto2', 'foto3', 'foto4', 'foto5',
                ]);

                // Despachar eventos si es necesario
                $this->dispatch('render');
                $this->dispatch('insert');

                // Redirigir a la ruta deseada después de crear el producto
                return redirect()->route('show-productos');
            }

            // Función para generar SKU automáticamente
            public function generarSKU() {
                // Longitud del SKU deseada
                $longitud = 8;

                // Caracteres permitidos para el SKU
                $caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

                // Generar SKU aleatorio
                $sku = Str::random($longitud);

                // Verificar si el SKU ya existe en la tabla de productos
                $sku_existente = Producto::where('sku', $sku)->exists();

                // Si el SKU existe, generar uno nuevo hasta que sea único
                while ($sku_existente) {
                    $sku = Str::random($longitud);
                    $sku_existente = Producto::where('sku', $sku)->exists();
                }

                return $sku;
            }



    public function mount()
    {
        $this->marcas = Marca::all();
        $this->modelos = collect();
    }
    public function updatedMarcasId($value)
    {
        $this->modelos = Modelo::where('marcas_id', $value)->get();
        // dd($this->modelos);
        $this->modelo = $this->modelos->first()->id ?? null;
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
        return view('livewire.usuario.productos.crear-producto', compact('categorias', 'entregas', 'estadopros'));
    }
}
