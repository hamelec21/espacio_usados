<?php

namespace App\Livewire\Administrador\Parametros\Tallas;

use App\Models\talla;
use Livewire\Component;

class CrearTalla extends Component
{
    public $nombre; // variables publicas del formularios
    public function save()
    {
        $this->validate([
            'nombre' => 'required',
        ]);

        // Verificar si ya existe un material con el mismo nombre
        $existingMaterial = talla::where('nombre', $this->nombre)->first();

        if ($existingMaterial) {
            // Si ya existe, puedes manejar el caso aquí, como mostrar un mensaje de error o redirigir de vuelta al formulario
            return redirect()->back()->with('error', 'La Talla ya existe');
        }
        talla::create([
            'nombre' => $this->nombre,
        ]);
        $this->reset(['nombre']);
        $this->dispatch('render');
        $this->dispatch('insert');
        return redirect()->route('show-tallas');
    }


    public function cancelar()
    {
        return redirect()->route('show-tallas');
    }
    public function render()
    {
        return view('livewire.administrador.parametros.tallas.crear-talla');
    }
}
