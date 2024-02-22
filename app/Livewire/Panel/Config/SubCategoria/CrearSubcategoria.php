<?php

namespace App\Livewire\Panel\Config\SubCategoria;

use App\Models\Categoria;
use App\Models\SubCategoria;
use Livewire\Component;

class CrearSubcategoria extends Component
{
    public $categoria; // variables publicas del formularios
    public $nombre; // variables publicas del formularios
    public function save()
    {
        $this->validate([
            'nombre' => 'required',
        ]);
        SubCategoria::create([
            'categorias_id' => $this->categoria,
            'nombre' => $this->nombre,
        ]);
        $this->reset(['categoria','nombre']);
        $this->dispatch('render');
        $this->dispatch('insert');
        return redirect()->route('show-subcategorias');
    }


    public function cancelar()
    {
        return redirect()->route('show-subcategorias');
    }
    public function render()
    {
        $categorias =Categoria::all();
        return view('livewire.panel.config.sub-categoria.crear-subcategoria',compact('categorias'));
    }
}
