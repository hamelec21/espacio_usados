<?php

namespace App\Livewire\Panel\Config\EstadoUsuario;

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
        return view('livewire.panel.config.estado-usuario.show-estado-usuario',compact('usuarios'));
    }

}
