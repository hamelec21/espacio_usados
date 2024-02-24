<?php

namespace App\Livewire\Administrador\Parametros\Tallas;

use App\Models\talla;
use Livewire\Component;

class EditarTalla extends Component
{
    public $tallaId; // variablr oculta en formulario
    public $nombre; // variables publicas del formularios

    public function mount($id)
    {
        $talla = talla::find($id);
        if (!$talla) {
            return redirect()->route('show-tallas')->with('error', 'Registro de Comuna no encontrado.');
        }
        $this->tallaId = $talla->id;
        $this->nombre = $talla->nombre;
    }

    public function editar()
    {
        $this->validate([
            'nombre' => 'required',
        ]);
        $talla  = talla::find($this->tallaId);
        if (!$talla) {
            return redirect()->route('show-tallas')->with('error', 'Registro de Comuna no encontrado.');
        }
        $talla->nombre = $this->nombre;
        $talla->save();
        $this->dispatch('editar');
        return redirect()->route('show-tallas');
    }

    public function cancelar()
    {
        return redirect()->route('show-tallas');
    }
    public function render()
    {
        return view('livewire.administrador.parametros.tallas.editar-talla');
    }
}
