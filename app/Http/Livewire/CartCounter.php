<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Session;

class CartCounter extends Component
{
    public function render()
    {

        $cart_count= Session::get('cart')->totalQty;
        return view('livewire.cart-counter', compact('cart_count'));
    }
}
