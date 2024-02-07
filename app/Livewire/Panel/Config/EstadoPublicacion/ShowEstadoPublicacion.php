<?php

namespace App\Livewire\Panel\Config\EstadoPublicacion;

use App\Models\EstadoPublicacion;
use Livewire\Component;
use Livewire\WithPagination;
class ShowEstadoPublicacion extends Component
{use WithPagination;
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
        return view('livewire.panel.config.estado-publicacion.show-estado-publicacion',compact('publicaciones'));
    }

}
