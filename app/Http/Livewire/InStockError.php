<?php

namespace App\Http\Livewire;

use Livewire\Component;

class InStockError extends Component
{
    protected $listeners = ['inStockError'];

    public function inStockError()
    {
    }

    public function render()
    {
        return view('livewire.in-stock-error');
    }
}
