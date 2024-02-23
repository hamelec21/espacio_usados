<?php

namespace App\Livewire\Administrador\Parametros\Usuario;

use App\Models\User;
use Livewire\Component;

class EditarUsuario extends Component
{
    public $usuarioId; // variablr oculta en formulario
    public $estados_usuarios_id; // variables publicas del formularios

    public function mount($id)
    {
        $usuario = User::find($id);
        if (!$usuario) {
            return redirect()->route('show-usuario')->with('error', 'Registro de Comuna no encontrado.');
        }
        $this->usuarioId = $usuario->id;
        $this->estados_usuarios_id = $usuario->estados_usuarios_id;
    }

    public function editar()
    {
        $this->validate([
            'estados_usuarios_id' => 'required',
        ]);
        $usuario = User::find($this->usuarioId);
        if (!$usuario) {
            return redirect()->route('show-usuario')->with('error', 'Registro de Comuna no encontrado.');
        }
        $usuario->estados_usuarios_id = $this->estados_usuarios_id;
        $usuario->save();
        $this->dispatch('editar');
        return redirect()->route('show-usuario');
    }

    public function cancelar()
    {
        return redirect()->route('show-usuario');
    }
    public function render()
    {
        return view('livewire.administrador.parametros.usuario.editar-usuario');
    }
}
