<?php

namespace App\Livewire\Panel\Config\Categorias;

use App\Models\Categoria;
use Livewire\Component;

class EditarCategoria extends Component
{
    public $categoriaId; // variablr oculta en formulario
    public $nombre; // variables publicas del formularios

    public function mount($id)
    {
        $categoria = Categoria::find($id);
        if (!$categoria) {
            return redirect()->route('show-categorias')->with('error', 'Registro de Comuna no encontrado.');
        }
        $this->categoriaId = $categoria->id;
        $this->nombre = $categoria->nombre;
    }

    public function editar()
    {
        $this->validate([
            'nombre' => 'required',
        ]);
        $categoria  = Categoria::find($this->categoriaId);
        if (!$categoria) {
            return redirect()->route('show-categorias')->with('error', 'Registro de Comuna no encontrado.');
        }
        $categoria->nombre = $this->nombre;
        $categoria->save();
        $this->dispatch('editar');
        return redirect()->route('show-categorias');
    }

    public function cancelar()
    {
        return redirect()->route('show-categorias');
    }
    public function render()
    {
        return view('livewire.panel.config.categorias.editar-categoria');
    }
}
