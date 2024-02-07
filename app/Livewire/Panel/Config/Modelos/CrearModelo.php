<?php

namespace App\Livewire\Panel\Config\Modelos;

use App\Models\Marca;
use App\Models\Modelo;
use Livewire\Component;

class CrearModelo extends Component
{
    public $marca; // variables publicas del formularios
    public $nombre; // variables publicas del formularios
    public function save()
    {
        $this->validate([
            'nombre' => 'required',
        ]);
        Modelo::create([
            'marcas_id' => $this->marca,
            'nombre' => $this->nombre,
        ]);
        $this->reset(['marca','nombre']);
        $this->dispatch('render');
        $this->dispatch('insert');
        return redirect()->route('show-modelos');
    }


    public function cancelar()
    {
        return redirect()->route('show-modelos');
    }
    public function render()
    {
        $marcas = Marca::all();
        return view('livewire.panel.config.modelos.crear-modelo',compact('marcas'));
    }
}
