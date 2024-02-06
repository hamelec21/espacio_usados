<?php

namespace App\Livewire\Panel\Config\Categorias;

use App\Models\Categoria;
use Livewire\Component;
use Livewire\WithPagination;

class ShowCategorias extends Component
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
      Categoria::destroy($id);
    }

    public function render()
    {
        $categorias= Categoria::buscar($this->search)
        ->orderBy('id','ASC')
        ->paginate(10);
        return view('livewire.panel.config.categorias.show-categorias',compact('categorias'));
    }









}
