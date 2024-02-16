<?php

namespace App\Livewire;

use App\Models\Producto;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class DetalleProducto extends Component
{

    public $producto;
    public $marca;
    public $categoria;
    public $id, $nombre, $cantidad, $precio;

    public function mount($id)
    {
        $this->id=$id;
        $this->producto = DB::table('productos')->where('id', $id)->first();
        $this->marca = DB::table('marcas')->where('id',$this->producto->marcas_id)->first();
        $this->categoria= DB::table('categorias')->where('id',$this->producto->categorias_id)->first();
    }


    public function store($id, $nombre, $cantidad, $precio)
    {


       $producto = Producto::find($id); // Utilizamos el método find() en el modelo Producto para buscar el producto por su ID

        Cart::add($id, $nombre, $cantidad, $precio)->associate($producto);

        session()->flash('success_message', 'Item added in Cart');
        return redirect()->route('carrito');
    }




    public function render()
    {
        return view('livewire.detalle-producto');
    }
}
