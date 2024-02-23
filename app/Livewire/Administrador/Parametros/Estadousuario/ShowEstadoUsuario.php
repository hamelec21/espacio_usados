<?php

namespace App\Livewire\Administrador\Parametros\Estadousuario;

use App\Models\EstadoUsuario;
use Livewire\Component;
use Livewire\WithPagination;

class ShowEstadoUsuario extends Component
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
      EstadoUsuario::destroy($id);
    }
    public function render()
    {
        $usuarios= EstadoUsuario::buscar($this->search)
        ->orderBy('id','ASC')
        ->paginate(10);
        return view('livewire.administrador.parametros.estadousuario.show-estado-usuario',compact('usuarios'));
    }
}
