<?php

namespace App\Livewire\Panel\Config\EstadoUsuario;

use App\Models\EstadoUsuario;
use Livewire\Component;

class EditarEstadoUsuario extends Component
{
    public $estadousuarioId; // variablr oculta en formulario
    public $nombre; // variables publicas del formularios

    public function mount($id)
    {
        $estadousuario = EstadoUsuario::find($id);
        if (!$estadousuario) {
            return redirect()->route('show-estado-publicacion')->with('error', 'Registro de Comuna no encontrado.');
        }
        $this->estadousuarioId = $estadousuario->id;
        $this->nombre = $estadousuario->nombre;
    }

    public function editar()
    {
        $this->validate([
            'nombre' => 'required',
        ]);
        $estadousuario = EstadoUsuario::find($this->estadousuarioId);
        if (!$estadousuario) {
            return redirect()->route('show-estado-usuario')->with('error', 'Registro de Comuna no encontrado.');
        }
        $estadousuario->nombre = $this->nombre;
        $estadousuario->save();
        $this->dispatch('editar');
        return redirect()->route('show-estado-usuario');
    }

    public function cancelar()
    {
        return redirect()->route('show-estado-usuario');
    }
    public function render()
    {
        return view('livewire.panel.config.estado-usuario.editar-estado-usuario');
    }
}
