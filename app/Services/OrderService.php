<?php

namespace App\Services;

use App\Models\Order;
use App\Models\OrderItem;
use App\Mail\OrderShippedAdmin;
use App\Mail\OrderShippedCustomer;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\StoreOrderRequest;
use App\Models\OrderCustomerPersonalInfo;

class OrderService
{
    public function calculatePrice($price, $shipping, $payment)
    {
        switch ($shipping) {
            case 'gls': {
                    $price += 4;
                    break;
                }
            case 'packeta-dobierka': {
                    $price += 3.30;
                    break;
                }
            default: {
                    throw new \Exception('Invalid Shipping Method');
                }
        }

        switch ($payment) {
            case 'cash': {
                    $price += 1;
                    break;
                }
            case 'card': {
                    break;
                }
            default: {
                    throw new \Exception('Invalid Payment Method');
                }
        }

        return $price;
    }

    public function handleOrder(StoreOrderRequest $request, int $price)
    {
        // dd($request->session());
        $order = Order::create([
            'shipping' => $request->input('shipping'),
            'payment' => $request->input('payment'),
            'total_price' => $price,
            'total_qty' => $request->session()->get('shoppingCart')->totalQuantity,
        ]);

        $customerInfo = OrderCustomerPersonalInfo::create([
            'order_id' => $order->id,
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'address' => $request->input('address'),
            'zip' => $request->input('zip'),
            'town' => $request->input('town'),
            'email' => $request->input('email'),
            'phone_number' => $request->input('phone_number'),
        ]);

        foreach ($request->session()->get('shoppingCart')->items as $braceletId => $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'bracelet_id' => $braceletId,
                'qty' =>  $item['qty'],
                'price' => $item['price']
            ]);
        }

        $this->sendMailing($order, $customerInfo);
    }

    private function sendMailing(Order $order, OrderCustomerPersonalInfo $customerInfo)
    {
        Mail::to($customerInfo)->send(new OrderShippedCustomer($order));
        Mail::to('nikikays.business@gmail.com')->send(new OrderShippedAdmin($order));
    }
}
