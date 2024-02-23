<?php

namespace App\Livewire\Administrador\Parametros\Marcas;

use App\Models\Marca;
use Livewire\Component;

class EditarMarca extends Component
{
    public $marcaId; // variablr oculta en formulario
    public $nombre; // variables publicas del formularios

    public function mount($id)
    {
        $marca = Marca::find($id);
        if (!$marca) {
            return redirect()->route('show-marca')->with('error', 'Registro de Comuna no encontrado.');
        }
        $this->marcaId = $marca->id;
        $this->nombre = $marca->nombre;
    }

    public function editar()
    {
        $this->validate([
            'nombre' => 'required',
        ]);
        $marca = Marca::find($this->marcaId);
        if (!$marca) {
            return redirect()->route('show-marca')->with('error', 'Registro de Comuna no encontrado.');
        }
        $marca->nombre = $this->nombre;
        $marca->save();
        $this->dispatch('editar');
        return redirect()->route('show-marca');
    }

    public function cancelar()
    {
        return redirect()->route('show-marca');
    }
    public function render()
    {
        return view('livewire.administrador.parametros.marcas.editar-marca');
    }
}
