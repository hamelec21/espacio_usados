<?php

namespace App\Livewire\Frontend\Productos;

use App\Models\Comuna;
use App\Models\Producto;
use App\Models\Region;
use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;



class CatalogoProductos extends Component
{
    public $search;
    public $filtro_comuna;
    public $filtro_region;

    protected $listeners = ['render' => 'render'];


    public function store($id,$nombre,$precio)
    {
        Cart::add($id,$nombre,$precio)->associate('\app\Models\Producto');
        session()->flash('succes_message','agregado al carrito');
        return redirect()->route('carrito');
    }

















    public function render()
    {
        $productos = Producto::buscar($this->search) // Suponiendo que tienes una función buscar en el modelo Producto
        ->regiones($this->filtro_region)
        ->comunas($this->filtro_comuna)
        ->orderBy('id', 'ASC')
        ->paginate(12);

        $regiones=Region::all();
        $comunas=Comuna::all();
        return view('livewire.frontend.productos.catalogo-productos',compact('productos','regiones','comunas'));
    }
}
