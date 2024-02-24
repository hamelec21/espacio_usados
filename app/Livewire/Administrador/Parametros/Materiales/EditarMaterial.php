<?php

namespace App\Livewire\Administrador\Parametros\Materiales;

use App\Models\Material;
use Livewire\Component;

class EditarMaterial extends Component
{
    public $materialId; // variablr oculta en formulario
    public $nombre; // variables publicas del formularios

    public function mount($id)
    {
        $material = Material::find($id);
        if (!$material) {
            return redirect()->route('show-material')->with('error', 'Registro de Comuna no encontrado.');
        }
        $this->materialId = $material->id;
        $this->nombre = $material->nombre;
    }

    public function editar()
    {
        $this->validate([
            'nombre' => 'required',
        ]);
        $material  = Material::find($this->materialId);
        if (!$material) {
            return redirect()->route('show-material')->with('error', 'Registro de Comuna no encontrado.');
        }
        $material->nombre = $this->nombre;
        $material->save();
        $this->dispatch('editar');
        return redirect()->route('show-material');
    }

    public function cancelar()
    {
        return redirect()->route('show-material');
    }
    public function render()
    {
        return view('livewire.administrador.parametros.materiales.editar-material');
    }
}
