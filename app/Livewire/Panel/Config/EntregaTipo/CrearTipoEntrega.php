<?php

namespace App\Livewire\Panel\Config\EntregaTipo;

use App\Models\TipoEntrega;
use Livewire\Component;

class CrearTipoEntrega extends Component
{
    public $nombre; // variables publicas del formularios
    public function save()
    {
        $this->validate([
            'nombre' => 'required',
        ]);
        TipoEntrega::create([
            'nombre' => $this->nombre,
        ]);
        $this->reset(['nombre']);
        $this->dispatch('render');
        $this->dispatch('insert');
        return redirect()->route('show-tipo-entrega');
    }


    public function cancelar()
    {
        return redirect()->route('show-tipo-entrega');
    }

    public function render()
    {
        return view('livewire.panel.config.entrega-tipo.crear-tipo-entrega');
    }
}
