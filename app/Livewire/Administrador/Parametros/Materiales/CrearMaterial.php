<?php

namespace App\Livewire\Administrador\Parametros\Materiales;

use App\Models\Material;
use Livewire\Component;

class CrearMaterial extends Component
{
    public $nombre; // variables publicas del formularios
    public function save()
    {
        $this->validate([
            'nombre' => 'required',
        ]);

        // Verificar si ya existe un material con el mismo nombre
        $existingMaterial = Material::where('nombre', $this->nombre)->first();

        if ($existingMaterial) {
            // Si ya existe, puedes manejar el caso aquí, como mostrar un mensaje de error o redirigir de vuelta al formulario
            return redirect()->back()->with('error', 'El material ya existe');
        }
        Material::create([
            'nombre' => $this->nombre,
        ]);
        $this->reset(['nombre']);
        $this->dispatch('render');
        $this->dispatch('insert');
        return redirect()->route('show-material');
    }


    public function cancelar()
    {
        return redirect()->route('show-material');
    }
    public function render()
    {
        return view('livewire.administrador.parametros.materiales.crear-material');
    }
}
