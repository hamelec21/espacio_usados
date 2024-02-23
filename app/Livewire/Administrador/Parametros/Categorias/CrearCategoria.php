<?php

namespace App\Livewire\Administrador\Parametros\Categorias;
use App\Models\Categoria;
use Livewire\Component;
use Livewire\WithFileUploads;


class CrearCategoria extends Component
{
    use WithFileUploads;

    public $nombre; // variables publicas del formularios
    public $foto; // variables publicas del formularios
    public $categorias = [];
    public function save()
    {
        $this->validate([
            'nombre' => 'required',
            'foto' => 'required',
        ]);
        Categoria::create([
            $path = $this->foto->store('categorias', 'public'),
            'nombre' => $this->nombre,
            'foto' => $path,
        ]);
        $this->reset(['nombre','foto']);
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
        return view('livewire.administrador.parametros.categorias.crear-categoria');
    }
}
