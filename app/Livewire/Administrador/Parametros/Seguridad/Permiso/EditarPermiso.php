<?php

namespace App\Livewire\Administrador\Parametros\Seguridad\Permiso;

use App\Models\Permission;
use Livewire\Component;

class EditarPermiso extends Component
{
    public $permisoId; // variablr oculta en formulario
    public $name; // variables publicas del formularios

    public function mount($id)
    {
        $permiso = Permission::find($id);
        if (!$permiso) {
            return redirect()->route('show-permisos')->with('error', 'Registro de Comuna no encontrado.');
        }
        $this->permisoId = $permiso->id;
        $this->name = $permiso->name;
    }

    public function editar()
    {
        $this->validate([
            'name' => 'required',
        ]);
        $permiso = Permission::find($this->permisoId);
        if (!$permiso) {
            return redirect()->route('show-permisos')->with('error', 'Registro de Comuna no encontrado.');
        }
        $permiso->name = $this->name;
        $permiso->save();
        $this->dispatch('editar');
        return redirect()->route('show-permisos');
    }

    public function cancelar()
    {
        return redirect()->route('show-permisos');
    }
    public function render()
    {
        return view('livewire.administrador.parametros.seguridad.permiso.editar-permiso');
    }
}
