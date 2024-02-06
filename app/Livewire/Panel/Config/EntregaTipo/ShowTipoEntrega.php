<?php

namespace App\Livewire\Panel\Config\EntregaTipo;

use App\Models\TipoEntrega;
use Livewire\Component;
use Livewire\WithPagination;

class ShowTipoEntrega extends Component
{
    use WithPagination;
    public $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    protected $listeners = ['render' => 'render'];

    public function destroy($id)
    {
      TipoEntrega::destroy($id);
    }

    public function render()
    {
        $tipoentregas= TipoEntrega::buscar($this->search)
        ->orderBy('id','ASC')
        ->paginate(10);
         return view('livewire.panel.config.entrega-tipo.show-tipo-entrega',compact('tipoentregas'));
    }

}
