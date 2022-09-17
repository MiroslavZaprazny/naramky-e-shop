<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use Livewire\Component;
use App\Models\Bracelet;
use Illuminate\Support\Facades\Session;

class ShowShoppingCart extends Component
{
    public $items;
    public $cart;

    public function mount()
    {
        if (Session::has('shoppingCart')) {
            $this->cart = collect(Session::get('shoppingCart'));
            $this->items = Session::get('shoppingCart')->items;
        }
    }

    public function removeItemFromShoppingCart($item)
    {
        $cart = new Cart(Session::get('shoppingCart'));
        $cart->remove($item['bracelet']);

        $this->cart = collect($cart);
        $this->items = $cart->items;

        if ($this->cart['totalQuantity'] === 0) {
            Session::forget('shoppingCart');
            $this->emit('itemWasRemovedFromCart');
        }

        Session::put('shoppingCart', $cart);
        $this->emit('itemWasRemovedFromCart');
    }

    public function addItemToShoppingCart($item)
    {
        $cart = new Cart(Session::get('shoppingCart'));
        $cart->add(new Bracelet($item['bracelet']));

        $this->cart = collect($cart);
        $this->items = $cart->items;

        Session::put('shoppingCart', $cart);
        $this->emit('itemWasAddedToCart');
    }

    public function render()
    {
        return view('livewire.show-shopping-cart');
    }
}
