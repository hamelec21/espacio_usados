<?php

namespace App\Livewire\Frontend\Categorias;

use App\Models\Categoria;
use Livewire\Component;

class ShowCategoria extends Component
{
    public function render()
    {
        $categorias=Categoria::all();
        return view('livewire.frontend.categorias.show-categoria',compact('categorias'));
    }
}
