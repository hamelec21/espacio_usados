<?php

namespace App\Livewire\Usuario\Productos;

use App\Models\Producto;
use Livewire\Component;
use Livewire\WithPagination;

class ShowProductos extends Component
{
    use WithPagination;
    public $search;

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
        $productos= Producto::buscar($this->search)
        ->orderBy('id','ASC')
        ->paginate(10);
        return view('livewire.usuario.productos.show-productos',compact('productos'));
    }
}
