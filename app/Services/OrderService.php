<?php

namespace App\Services;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Mail\OrderShippedAdmin;
use App\Mail\OrderShippedCustomer;
use App\Models\OrderCustomerPersonalInfo;
use Illuminate\Support\Facades\Mail;

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

        $this->sendMailing($order, $customerInfo);
    }

    private function sendMailing(Order $order, OrderCustomerPersonalInfo $customerInfo)
    {
        Mail::to($customerInfo)->send(new OrderShippedCustomer($order));
        Mail::to('nikakainzova@gmail.com')->send(new OrderShippedAdmin($order));
        Mail::to('miro.zaprazny8@gmail.com')->send(new OrderShippedAdmin($order));
    }
}
