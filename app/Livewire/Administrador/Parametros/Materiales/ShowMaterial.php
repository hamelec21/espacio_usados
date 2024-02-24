<?php

namespace App\Livewire\Administrador\Parametros\Materiales;

use App\Models\Material;
use Livewire\Component;
use Livewire\WithPagination;

class ShowMaterial extends Component
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
      Material::destroy($id);
    }
    public function render()
    {
        $materiales= Material::buscar($this->search)
        ->orderBy('id','ASC')
        ->paginate(10);
        return view('livewire.administrador.parametros.materiales.show-material',compact('materiales'));
    }

}
