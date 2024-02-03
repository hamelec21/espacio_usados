<?php

namespace App\Livewire\Panel\Seguridad\Rol;

use App\Models\Role;
use Livewire\Component;

class CrearRole extends Component
{

    public $nombre; // variables publicas del formularios
    public function save()
    {
        $this->validate([
            'nombre' => 'required',
        ]);
        Role::create([
            'name' => $this->nombre,
            'guard_name' => 'web',
        ]);
        $this->reset(['nombre']);
        $this->dispatch('render');
        $this->dispatch('insert');
        return redirect()->route('show-role');
    }


    public function cancelar()
    {
        return redirect()->route('show-role');
    }

    public function render()
    {
        return view('livewire.panel.seguridad.rol.crear-role');
    }
}
