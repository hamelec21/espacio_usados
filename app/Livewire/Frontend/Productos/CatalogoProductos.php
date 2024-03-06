<?php

namespace App\Livewire\Frontend\Productos;

use App\Models\Comuna;
use App\Models\Producto;
use App\Models\Region;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class CatalogoProductos extends Component
{
    public $search;
    public $filtro_comuna;
    public $filtro_region;
    public $id, $nombre, $cantidad, $precio;
    public function store($id, $nombre, $cantidad, $precio)
    {
        $producto = Producto::find($id); // Utilizamos el método find() en el modelo Producto para buscar el producto por su ID
        Cart::add($id, $nombre, $cantidad, $precio)->associate($producto);
        session()->flash('success_message', 'Item added in Cart');
        return redirect()->route('carrito');
    }

    public function render()
    {
        $productos = Producto::buscar($this->search) // Suponiendo que tienes una función buscar en el modelo Producto
            ->regiones($this->filtro_region)
            ->comunas($this->filtro_comuna)
            ->orderBy('id', 'ASC')
            ->paginate(12);

        $regiones = Region::all();
        $comunas = Comuna::all();
        return view('livewire.frontend.productos.catalogo-productos', compact('productos', 'regiones', 'comunas'));
    }
}
