<?php

namespace App\Livewire\Panel\Config\EstadoProducto;

use App\Models\EstadoProducto;
use Livewire\Component;
use Livewire\WithPagination;

class ShowEstadoProducto extends Component
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
      EstadoProducto::destroy($id);
    }

    public function render()
    {
        $estadoproductos= EstadoProducto::buscar($this->search)
        ->orderBy('id','ASC')
        ->paginate(10);
        return view('livewire.panel.config.estado-producto.show-estado-producto',compact('estadoproductos'));
    }

}
