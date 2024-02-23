<?php

namespace App\Livewire\Administrador\Parametros\Seguridad\Permiso;

use App\Models\Permission;
use Livewire\Component;
use Livewire\WithPagination;

class ShowPermisos extends Component
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
      Permission::destroy($id);
    }

    public function render()
    {
        $permisos= Permission::buscar($this->search)
        ->orderBy('id','ASC')
        ->paginate(10);
        return view('livewire.administrador.parametros.seguridad.permiso.show-permisos',compact('permisos'));
    }
}
