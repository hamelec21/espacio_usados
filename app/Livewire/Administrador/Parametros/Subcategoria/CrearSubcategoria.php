<?php

namespace App\Livewire\Administrador\Parametros\Subcategoria;

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
        return view('livewire.administrador.parametros.subcategoria.crear-subcategoria',compact('categorias'));
    }
}
