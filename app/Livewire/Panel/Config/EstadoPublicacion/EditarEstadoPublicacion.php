<?php

namespace App\Livewire\Panel\Config\EstadoPublicacion;

use App\Models\EstadoPublicacion;
use Livewire\Component;

class EditarEstadoPublicacion extends Component
{
    public $estadopublicacionId; // variablr oculta en formulario
    public $nombre; // variables publicas del formularios

    public function mount($id)
    {
        $estadopublicacion = EstadoPublicacion::find($id);
        if (!$estadopublicacion) {
            return redirect()->route('show-estado-publicacion')->with('error', 'Registro de Comuna no encontrado.');
        }
        $this->estadopublicacionId = $estadopublicacion->id;
        $this->nombre = $estadopublicacion->nombre;
    }

    public function editar()
    {
        $this->validate([
            'nombre' => 'required',
        ]);
        $estadopublicacion  = EstadoPublicacion::find($this->estadopublicacionId);
        if (!$estadopublicacion) {
            return redirect()->route('show-estado-producto')->with('error', 'Registro de Comuna no encontrado.');
        }
        $estadopublicacion->nombre = $this->nombre;
        $estadopublicacion->save();
        $this->dispatch('editar');
        return redirect()->route('show-estado-publicacion');
    }

    public function cancelar()
    {
        return redirect()->route('show-estado-publicacion');
    }
    public function render()
    {
        return view('livewire.panel.config.estado-publicacion.editar-estado-publicacion');
    }
}
