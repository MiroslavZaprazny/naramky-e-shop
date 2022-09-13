<?php

namespace App\Http\Livewire;

use App\Models\Bracelet;
use Livewire\Component;

class BraceletIndex extends Component
{
    private $category = 'All';

    protected $listeners = ['queryStringWasUpdated'];

    public function queryStringWasUpdated($category)
    {
        $this->category = $category;
        $this->hydrate();
    }

    public function render()
    {
        return view('livewire.bracelet-index', [
            'bracelets' => Bracelet::when($this->category && $this->category !== 'All', function ($query) {
                return $query->where('category_name', $this->category);
            })->latest('id')->paginate(10)
        ]);
    }
}
