<?php

namespace App\Livewire\Administrador\Parametros\Tipoentrega;

use Livewire\Component;
use App\Models\TipoEntrega;
class EditarTipoEntrega extends Component
{
    public $tipoentregaId; // variablr oculta en formulario
    public $nombre; // variables publicas del formularios

    public function mount($id)
    {
        $tipoentrega = TipoEntrega::find($id);
        if (!$tipoentrega) {
            return redirect()->route('show-tipo-entrega')->with('error', 'Registro de Comuna no encontrado.');
        }
        $this->tipoentregaId = $tipoentrega->id;
        $this->nombre = $tipoentrega->nombre;
    }

    public function editar()
    {
        $this->validate([
            'nombre' => 'required',
        ]);
        $tipoentrega  = TipoEntrega::find($this->tipoentregaId);
        if (!$tipoentrega) {
            return redirect()->route('show-tipo-entrega')->with('error', 'Registro de Comuna no encontrado.');
        }
        $tipoentrega->nombre = $this->nombre;
        $tipoentrega->save();
        $this->dispatch('editar');
        return redirect()->route('show-tipo-entrega');
    }

    public function cancelar()
    {
        return redirect()->route('show-tipo-entrega');
    }

    public function render()
    {
        return view('livewire.administrador.parametros.tipoentrega.editar-tipo-entrega');
    }
}
