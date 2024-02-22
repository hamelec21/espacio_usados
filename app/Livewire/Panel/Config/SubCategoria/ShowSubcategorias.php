<?php

namespace App\Livewire\Panel\Config\SubCategoria;

use App\Models\SubCategoria;
use Livewire\Component;
use Livewire\WithPagination;

class ShowSubcategorias extends Component
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
      SubCategoria::destroy($id);
    }

    public function render()
    {
        $subcategorias= SubCategoria::buscar($this->search)
        ->orderBy('id','ASC')
        ->paginate(10);
        return view('livewire.panel.config.sub-categoria.show-subcategorias',compact('subcategorias'));
    }

}
