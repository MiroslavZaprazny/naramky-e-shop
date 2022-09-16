<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Component;

class ShoppingCartButton extends Component
{
    public $quantity;

    protected $listeners = ['itemWasAddedToCart'];

    public function itemWasAddedToCart()
    {
        $this->quantity = Session::get('shoppingCart')->totalQuantity;
    }

    public function render()
    {
        return view('livewire.shopping-cart-button');
    }
}
