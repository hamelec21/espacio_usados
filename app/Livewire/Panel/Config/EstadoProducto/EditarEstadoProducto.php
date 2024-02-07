<?php

namespace App\Livewire\Panel\Config\EstadoProducto;

use App\Models\EstadoProducto;
use Livewire\Component;

class EditarEstadoProducto extends Component
{
    public $estadoproductoId; // variablr oculta en formulario
    public $nombre; // variables publicas del formularios

    public function mount($id)
    {
        $estadoproducto = EstadoProducto::find($id);
        if (!$estadoproducto) {
            return redirect()->route('show-tipo-entrega')->with('error', 'Registro de Comuna no encontrado.');
        }
        $this->estadoproductoId = $estadoproducto->id;
        $this->nombre = $estadoproducto->nombre;
    }

    public function editar()
    {
        $this->validate([
            'nombre' => 'required',
        ]);
        $estadoproducto  = EstadoProducto::find($this->estadoproductoId);
        if (!$estadoproducto) {
            return redirect()->route('show-estado-producto')->with('error', 'Registro de Comuna no encontrado.');
        }
        $estadoproducto->nombre = $this->nombre;
        $estadoproducto->save();
        $this->dispatch('editar');
        return redirect()->route('show-estado-producto');
    }

    public function cancelar()
    {
        return redirect()->route('show-estado-producto');
    }
    public function render()
    {
        return view('livewire.panel.config.estado-producto.editar-estado-producto');
    }
}
