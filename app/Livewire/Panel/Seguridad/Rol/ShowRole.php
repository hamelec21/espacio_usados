<?php

namespace App\Livewire\Panel\Seguridad\Rol;

use App\Models\Role;
use Livewire\Component;
use Livewire\WithPagination;

class ShowRole extends Component
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
      Role::destroy($id);
    }

    public function render()
    {
        $roles= Role::buscar($this->search)
        ->orderBy('id','ASC')
        ->paginate(10);
        return view('livewire.panel.seguridad.rol.show-role',compact('roles'));
    }
}

