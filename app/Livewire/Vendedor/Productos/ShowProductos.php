<?php

namespace App\Livewire\Vendedor\Productos;


use App\Models\EstadoProducto;
use App\Models\Producto;
use Livewire\Component;
use Livewire\WithPagination;

class ShowProductos extends Component
{

    use WithPagination;
    public $search;
    public $filtro_estado;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    protected $listeners = ['render' => 'render'];

    public function destroy($id)
    {
        Producto::destroy($id);
    }
    public function render()
    {
        // Obtener el ID del usuario autenticado
        $usuarioId = auth()->user()->id;
        // Buscar los productos del usuario autenticado
        $productos = Producto::where('users_id', $usuarioId)
            ->buscar($this->search) // Suponiendo que tienes una función buscar en el modelo Producto
            ->estados($this->filtro_estado)
            ->orderBy('id', 'ASC')
            ->paginate(10);

        $estado_pros = EstadoProducto::all();
        return view('livewire.vendedor.productos.show-productos', compact('productos', 'estado_pros'));
    }
}
