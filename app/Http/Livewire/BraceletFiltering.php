<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BraceletFiltering extends Component
{
    public $category = 'All';

    protected $queryString = ['category'];

    public function setCategory(string $category)
    {
        $this->category = $category;
        $this->emit('queryStringWasUpdated', $this->category);
    }

    public function render()
    {
        return view('livewire.bracelet-filtering');
    }
}
