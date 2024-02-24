<?php

namespace App\Livewire\Administrador\Parametros\Colores;

use Livewire\Component;
use App\Models\color;

class CrearColor extends Component
{

    public $nombre; // variables publicas del formularios
    public $hex_code; // variables publicas del formularios
    public $colors; // variables publicas del formularios
    public function save()
    {
        $this->validate([
            'nombre' => 'required',
            'hex_code' => 'required',
        ]);
        color::create([
            'nombre' => $this->nombre,
            'hex_code' => $this->hex_code,
        ]);
        $this->reset(['nombre','hex_code']);
        $this->dispatch('render');
        $this->dispatch('insert');
        return redirect()->route('show-colores');
    }


    public function mount()
    {
       $this->colors = color::first();

       //dd($this->colors);
    }

    public function cancelar()
    {

        return redirect()->route('show-colores');
    }






    public function render()
    {

        return view('livewire.administrador.parametros.colores.crear-color');
    }
}
