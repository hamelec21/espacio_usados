<?php

namespace App\Livewire\Administrador\Parametros\Estadopublicacion;

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
            return redirect()->route('show-estado-publicaciones')->with('error', 'Registro de Comuna no encontrado.');
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
        return redirect()->route('show-estado-publicaciones');
    }

    public function cancelar()
    {
        return redirect()->route('show-estado-publicaciones');
    }
    public function render()
    {
        return view('livewire.administrador.parametros.estadopublicacion.editar-estado-publicacion');
    }
}
