<?php

namespace App\Livewire\Administrador\Parametros\Estadopublicacion;


use App\Models\EstadoPublicacion;
use Livewire\Component;
use Livewire\WithPagination;

class ShowEstadoPublicaciones extends Component
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
      EstadoPublicacion::destroy($id);
    }
    public function render()
    {
        $publicaciones= EstadoPublicacion::buscar($this->search)
        ->orderBy('id','ASC')
        ->paginate(10);
        return view('livewire.administrador.parametros.estadopublicacion.show-estado-publicaciones',compact('publicaciones'));
    }
}
