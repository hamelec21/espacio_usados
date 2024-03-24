<?php

namespace App\Livewire\Administrador\Parametros\Categorias;

use App\Models\Categoria;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditarCategoria extends Component
{
    use WithFileUploads;
    public $categoriaId; // variablr oculta en formulario
    public $nombre; // variables publicas del formularios
    public $foto; // variables publicas del formularios
    public $categorias = [];

    public function mount($id)
    {
        $categoria = Categoria::find($id);
        if (!$categoria) {
            return redirect()->route('show-categorias')->with('error', 'Registro de Comuna no encontrado.');
        }
        $this->categoriaId = $categoria->id;
        $this->nombre = $categoria->nombre;
        $this->foto = $categoria->foto;
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
        // Actualizar las imágenes solo si se proporcionan nuevas imágenes
        if ($this->foto) {

            // Verifica si la imagen actual es diferente de la nueva
            if ($this->foto != $categoria->foto) {
                // Elimina la imagen actual
                Storage::delete($categoria->foto);
                // Almacena la nueva imagen
                $categoria->foto = $this->foto->store('public/categorias');
            }
        }
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
        return view('livewire.administrador.parametros.categorias.editar-categoria');
    }
}
