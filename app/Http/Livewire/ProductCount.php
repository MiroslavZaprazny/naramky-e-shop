<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Session;

class ProductCount extends Component
{
    public $quantity;
    public $responsiveDesign = false;

    protected $listeners = ['itemWasAddedToCart', 'itemWasRemovedFromCart'];

    public function itemWasAddedToCart()
    {
        $this->quantity = Session::get('shoppingCart')->totalQuantity;
    }

    public function itemWasRemovedFromCart()
    {
        $this->quantity = Session::get('shoppingCart')->totalQuantity;
    }

    public function render()
    {
        return view('livewire.product-count');
    }
}
