<?php

namespace App\Livewire\Administrador\Parametros\Marcas;

use App\Models\Marca;
use Livewire\Component;
use Livewire\WithPagination;

class ShowMarca extends Component
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
      Marca::destroy($id);
    }
    public function render()
    {
        $marcas= Marca::buscar($this->search)
        ->orderBy('id','ASC')
        ->paginate(10);
        return view('livewire.administrador.parametros.marcas.show-marca',compact('marcas'));
    }
}
