<?php

namespace App\Livewire\Panel\Seguridad\Usuario;

use App\Models\status_usuario;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class ShowUsuario extends Component
{
    use WithPagination;
    public $search;
    public $filtro_estado;
    public $usuarioId;
    public function updatingfiltro_estado()
    {
        $this->resetPage();
    }
    public function updatingSearch()
    {
        $this->resetPage();
    }

    protected $listeners = ['render' => 'render'];

    public function destroy($id)
    {
      User::destroy($id);
    }

    public function render()
    {
        $usuarios= User::buscar($this->search)
        ->estados($this->filtro_estado)
        ->orderBy('id','ASC')
        ->paginate(10);
        return view('livewire.panel.seguridad.usuario.show-usuario',compact('usuarios'));
    }
}
