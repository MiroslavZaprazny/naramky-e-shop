<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ShippingController extends Controller
{
    public function create()
    {
        if(Session::get('shoppingCart')->totalQuantity === 0)
        {
            abort(403);
        }

        return view('shipping.create', [
            'cart' => Session::get('shoppingCart')
        ]);
    }
}
