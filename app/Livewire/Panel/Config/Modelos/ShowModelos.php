<?php

namespace App\Livewire\Panel\Config\Modelos;

use App\Models\Modelo;
use Livewire\Component;
use Livewire\WithPagination;

class ShowModelos extends Component
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
      Modelo::destroy($id);
    }

    public function render()
    {
        $modelos= Modelo::buscar($this->search)
        ->orderBy('id','ASC')
        ->paginate(10);
        return view('livewire.panel.config.modelos.show-modelos',compact('modelos'));
    }

}
