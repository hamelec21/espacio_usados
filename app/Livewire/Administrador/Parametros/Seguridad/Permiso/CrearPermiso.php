<?php

namespace App\Livewire\Administrador\Parametros\Seguridad\Permiso;

use App\Models\Permission;
use Livewire\Component;


class CrearPermiso extends Component
{
    public $nombre; // variables publicas del formularios
    public function save()
    {
        $this->validate([
            'nombre' => 'required',
        ]);
        Permission::create([
            'name' => $this->nombre,
            'guard_name' => 'web',
        ]);
        $this->reset(['nombre']);
        $this->dispatch('render');
        $this->dispatch('insert');
        return redirect()->route('show-permisos');
    }


    public function cancelar()
    {
        return redirect()->route('show-permisos');
    }
    public function render()
    {
        return view('livewire.administrador.parametros.seguridad.permiso.crear-permiso');
    }
}
