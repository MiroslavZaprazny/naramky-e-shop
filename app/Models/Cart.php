<?php

namespace App\Models;

use App\Models\Bracelet;

class Cart
{
    public $items = null;
    public $totalQuantity = 0;
    public $totalPrice = 0;


    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQuantity = $oldCart->totalQuantity;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add(Bracelet $bracelet)
    {
        $storedItem = [
            'qty' => 0,
            'price' => $bracelet->price,
            'bracelet' => $bracelet
        ];

        if ($this->items) {
            if (array_key_exists($bracelet->id, $this->items)) {
                $storedItem = $this->items[$bracelet->id];
            }
        }

        $storedItem['qty']++;
        $storedItem['price'] = $bracelet->price * $storedItem['qty'];
        $this->items[$bracelet->id] = $storedItem;

        $this->totalPrice += $bracelet->price;
        $this->totalQuantity++;
    }

    public function remove($item)
    {
        $this->items[$item['id']]['qty']--;
        $this->items[$item['id']]['price'] -= $this->items[$item['id']]['bracelet']['price'];

        $this->totalQuantity--;
        $this->totalPrice -= $this->items[$item['id']]['bracelet']['price'];

        if ($this->items[$item['id']]['qty'] <= 0) {
            unset($this->items[$item['id']]);
        }
    }
}
