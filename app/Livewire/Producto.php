<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Producto extends Component
{
    public $producto;
    public $marca;
    public $categoria;

    public function mount($id)
    {
        $this->producto = DB::table('productos')->where('id', $id)->first();
        $this->marca = DB::table('marcas')->where('id',$this->producto->marcas_id)->first();
        $this->categoria= DB::table('categorias')->where('id',$this->producto->categorias_id)->first();
    }

    public function render()
    {
        return view('livewire.producto');
    }
}
