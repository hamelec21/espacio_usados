<?php

namespace App\Livewire\Administrador\Parametros\Marcas;

use App\Models\Marca;
use Livewire\Component;

class CrearMarca extends Component
{
    public $nombre; // variables publicas del formularios
    public function save()
    {
        $this->validate([
            'nombre' => 'required',
        ]);
        Marca::create([
            'nombre' => $this->nombre,
        ]);
        $this->reset(['nombre']);
        $this->dispatch('render');
        $this->dispatch('insert');
        return redirect()->route('show-marca');
    }


    public function cancelar()
    {
        return redirect()->route('show-marca');
    }
    public function render()
    {
        return view('livewire.administrador.parametros.marcas.crear-marca');
    }
}
