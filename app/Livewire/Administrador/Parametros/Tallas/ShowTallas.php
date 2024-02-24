<?php

namespace App\Livewire\Administrador\Parametros\Tallas;

use App\Models\talla;
use Livewire\Component;
use Livewire\WithPagination;
class ShowTallas extends Component
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
      talla::destroy($id);
    }
    public function render()
    {
        $tallas= talla::buscar($this->search)
        ->orderBy('id','ASC')
        ->paginate(10);
        return view('livewire.administrador.parametros.tallas.show-tallas',compact('tallas'));
    }

}
