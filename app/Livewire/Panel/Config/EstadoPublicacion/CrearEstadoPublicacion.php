<?php

namespace App\Livewire\Panel\Config\EstadoPublicacion;

use App\Models\EstadoPublicacion;
use Livewire\Component;

class CrearEstadoPublicacion extends Component
{
    public $nombre; // variables publicas del formularios
    public function save()
    {
        $this->validate([
            'nombre' => 'required',
        ]);
        EstadoPublicacion::create([
            'nombre' => $this->nombre,
        ]);
        $this->reset(['nombre']);
        $this->dispatch('render');
        $this->dispatch('insert');
        return redirect()->route('show-estado-publicacion');
    }


    public function cancelar()
    {
        return redirect()->route('show-estado-publicacion');
    }

    public function render()
    {
        return view('livewire.panel.config.estado-publicacion.crear-estado-publicacion');
    }
}
