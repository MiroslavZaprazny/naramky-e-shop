<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\OrderService;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StoreOrderRequest;

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

        (new User)->charge($price * 100, $request->paymentId);

        $orderService->handleOrder($request, $price);

        Session::forget('shoppingCart');

        return redirect(route('order.completed', uniqid()));
    }

    public function completed()
    {
        return view('order.completed');
    }
}
