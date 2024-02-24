<?php

namespace App\Livewire\Administrador\Parametros\Subcategoria;

use App\Models\Categoria;
use App\Models\SubCategoria;
use Livewire\Component;

class EditarSubcategoria extends Component
{
    public $subcategoriaId; // variablr oculta en formulario
    public $nombre; // variables publicas del formularios
    public $categorias_id; // variables publicas del formularios


    public function mount($id)
    {
        $subcategorias = SubCategoria::find($id);
        if (!$subcategorias) {
            return redirect()->route('show-subcategoria')->with('error', 'Registro de Comuna no encontrado.');
        }
        $this->subcategoriaId = $subcategorias->id;
        $this->categorias_id = $subcategorias->categorias_id;
        $this->nombre = $subcategorias->nombre;
    }

    public function editar()
    {
        $this->validate([
            'nombre' => 'required',
        ]);
        $subcategorias = SubCategoria::find($this->categorias_id);
        if (!$subcategorias) {
            return redirect()->route('show-subcategoria')->with('error', 'Registro de Comuna no encontrado.');
        }
        $subcategorias->categorias_id = $this->categorias_id;
        $subcategorias->nombre = $this->nombre;
        $subcategorias->save();
        $this->dispatch('editar');
        return redirect()->route('show-subcategoria');
    }

    public function cancelar()
    {
        return redirect()->route('show-subcategoria');
    }
    public function render()
    {
        $categorias =Categoria::all();
        return view('livewire.administrador.parametros.subcategoria.editar-subcategoria',compact('categorias'));
    }
}
