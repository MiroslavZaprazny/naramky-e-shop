<?php

namespace App\Http\Livewire;

use App\Models\Bracelet;
use Livewire\Component;

class BraceletShow extends Component
{
    public Bracelet $bracelet;

    public function mount(Bracelet $bracelet)
    {
        $this->bracelet = $bracelet;
    }

    public function render()
    {
        return view('livewire.bracelet-show');
    }
}
