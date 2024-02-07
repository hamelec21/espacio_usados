<?php

namespace App\Livewire\Panel\Config\EstadoProducto;

use App\Models\EstadoProducto;
use Livewire\Component;

class CrearEstadoProducto extends Component
{
    public $nombre; // variables publicas del formularios
    public function save()
    {
        $this->validate([
            'nombre' => 'required',
        ]);
        EstadoProducto::create([
            'nombre' => $this->nombre,
        ]);
        $this->reset(['nombre']);
        $this->dispatch('render');
        $this->dispatch('insert');
        return redirect()->route('show-estado-producto');
    }


    public function cancelar()
    {
        return redirect()->route('show-estado-producto');
    }

    public function render()
    {
        return view('livewire.panel.config.estado-producto.crear-estado-producto');
    }
}
