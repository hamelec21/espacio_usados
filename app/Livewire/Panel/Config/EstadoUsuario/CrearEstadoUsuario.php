<?php

namespace App\Livewire\Panel\Config\EstadoUsuario;

use App\Models\EstadoUsuario;
use Livewire\Component;

class CrearEstadoUsuario extends Component
{
    public $nombre; // variables publicas del formularios
    public function save()
    {
        $this->validate([
            'nombre' => 'required',
        ]);
        EstadoUsuario::create([
            'nombre' => $this->nombre,
        ]);
        $this->reset(['nombre']);
        $this->dispatch('render');
        $this->dispatch('insert');
        return redirect()->route('show-estado-usuario');
    }


    public function cancelar()
    {
        return redirect()->route('show-estado-usuario');
    }
    public function render()
    {
        return view('livewire.panel.config.estado-usuario.crear-estado-usuario');
    }
}
