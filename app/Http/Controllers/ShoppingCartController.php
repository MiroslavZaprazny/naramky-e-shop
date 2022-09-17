<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;

class ShoppingCartController extends Controller
{
    public function show()
    {
        return view('shopping-cart.show');
    }
}
