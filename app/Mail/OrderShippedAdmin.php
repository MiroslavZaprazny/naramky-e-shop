<?php

namespace App\Mail;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\OrderCustomerPersonalInfo;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderShippedAdmin extends Mailable
{
    use Queueable, SerializesModels;

    public $order;
    public $customerPersonalInfo;
    public $orderItems;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
        $this->customerPersonalInfo = OrderCustomerPersonalInfo::where('order_id', $order->id)->first();
        $this->orderItems = OrderItem::where('order_id', $order->id)->get();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('kaysnature@info.sk', 'Kays Nature')
            ->subject("Nová objednávka č." . $this->order->id)
            ->markdown('mail.order-shipped-admin');
    }
}
