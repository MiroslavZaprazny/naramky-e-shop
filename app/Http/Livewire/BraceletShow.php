<?php

namespace App\Http\Livewire;

use App\Models\Bracelet;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class BraceletShow extends Component
{
    public Bracelet $bracelet;

    public function render()
    {
        return view('livewire.bracelet-show');
    }
}
