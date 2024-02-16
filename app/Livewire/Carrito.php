<?php

namespace App\Livewire;


use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class Carrito extends Component
{


    protected $listeners = ['render' => 'render'];


    public function eliminar($id)
    {
        Cart::remove($id);
    }


    public function sumar($rowId)
    {
        // Obtener el producto del carrito usando el ID de fila proporcionado
        $product = Cart::get($rowId);

     // dd($product);

        // Incrementar la cantidad del producto en 1
        $qty = $product->qty + 1;

        // Actualizar la cantidad del producto en el carrito
        Cart::update($rowId,$qty);
    }







    public function restar($rowId)
    {
        // Obtener el producto del carrito usando el ID de fila proporcionado
        $product = Cart::get($rowId);

        // Incrementar la cantidad del producto en 1
        $qty = $product->qty - 1;

        // Actualizar la cantidad del producto en el carrito
        Cart::update($rowId,$qty);
    }

    public function render()
    {
        $content = Cart::content(); // Obtener los productos del carrito
        return view('livewire.carrito', compact('content'));
    }
}
