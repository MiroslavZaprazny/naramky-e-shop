<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Bracelet;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;

class AddToShoppingCartForm extends Component
{
    public Bracelet $bracelet;

    public function addToShoppingCart()
    {
        $oldCart = Session::has('shoppingCart') ? Session::get('shoppingCart') : null;

        $cart = new Cart($oldCart);
        $cart->add($this->bracelet);

        Session::put('shoppingCart', $cart);

        $this->emit('itemWasAddedToCart');
    }

    public function render()
    {
        return view('livewire.add-to-shopping-cart-form');
    }
}
