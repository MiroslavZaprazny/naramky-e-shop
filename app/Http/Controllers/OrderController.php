<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Services\OrderService;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function create()
    {
        if (Session::get('shoppingCart')->totalQuantity === 0) {
            abort(403);
        }

        return view('order.create', [
            'cart' => Session::get('shoppingCart')
        ]);
    }

    public function store(StoreOrderRequest $request, OrderService $orderService)
    {
        $price = $orderService->calculatePrice(
            $request->session()->get('shoppingCart')->totalPrice,
            $request->input('shipping'),
            $request->input('payment')
        );

        $orderService->sendOrder($request, $price);

        Session::forget('shoppingCart');

        return redirect(route('bracelet.index'));
    }
}
