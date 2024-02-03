<?php

namespace App\Livewire\Panel\Seguridad\Rol;

use App\Models\Role;
use Livewire\Component;

class EditarRole extends Component
{
    public $roleId; // variablr oculta en formulario
    public $name; // variables publicas del formularios

    public function mount($id)
    {
        $role = Role::find($id);
        if (!$role) {
            return redirect()->route('show-role')->with('error', 'Registro de Comuna no encontrado.');
        }
        $this->roleId = $role->id;
        $this->name = $role->name;
    }

    public function editar()
    {
        $this->validate([
            'name' => 'required',
        ]);
        $role = Role::find($this->roleId);
        if (!$role) {
            return redirect()->route('show-role')->with('error', 'Registro de Comuna no encontrado.');
        }
        $role->name = $this->name;
        $role->save();
        $this->dispatch('editar');
        return redirect()->route('show-role');
    }

    public function cancelar()
    {
        return redirect()->route('show-role');
    }
    public function render()
    {
        return view('livewire.panel.seguridad.rol.editar-role');
    }
}
