<?php

namespace App\Livewire\Panel\Config\Categorias;

use App\Models\Categoria;
use Livewire\Component;

class CrearCategoria extends Component
{

    public $nombre; // variables publicas del formularios
    public function save()
    {
        $this->validate([
            'nombre' => 'required',
        ]);
        Categoria::create([
            'nombre' => $this->nombre,
        ]);
        $this->reset(['nombre']);
        $this->dispatch('render');
        $this->dispatch('insert');
        return redirect()->route('show-categorias');
    }


    public function cancelar()
    {
        return redirect()->route('show-categorias');
    }


    public function render()
    {
        return view('livewire.panel.config.categorias.crear-categoria');
    }
}
