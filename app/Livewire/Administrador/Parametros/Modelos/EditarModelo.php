<?php

namespace App\Livewire\Administrador\Parametros\Modelos;

use App\Models\Marca;
use App\Models\Modelo;
use Livewire\Component;

class EditarModelo extends Component
{
    public $modeloId; // variablr oculta en formulario
    public $nombre; // variables publicas del formularios
    public $marcas_id; // variables publicas del formularios


    public function mount($id)
    {
        $modelo = Modelo::find($id);
        if (!$modelo) {
            return redirect()->route('show-modelo')->with('error', 'Registro de Comuna no encontrado.');
        }
        $this->modeloId = $modelo->id;
        $this->marcas_id = $modelo->marcas_id;
        $this->nombre = $modelo->nombre;
    }

    public function editar()
    {
        $this->validate([
            'nombre' => 'required',
        ]);
        $modelo = Modelo::find($this->modeloId);
        if (!$modelo) {
            return redirect()->route('show-modelo')->with('error', 'Registro de Comuna no encontrado.');
        }
        $modelo->marcas_id = $this->marcas_id;
        $modelo->nombre = $this->nombre;
        $modelo->save();
        $this->dispatch('editar');
        return redirect()->route('show-modelos');
    }

    public function cancelar()
    {
        return redirect()->route('show-modelos');
    }

    public function render()
    {
        $marcas = Marca::all();
        return view('livewire.administrador.parametros.modelos.editar-modelo',compact('marcas'));
    }
}
