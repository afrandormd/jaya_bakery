<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;
use App\Models\Product;

class Home extends Component
{
    public function render()
    {
        return view('livewire.home', [
            'products' => Product::take(4)->get(),
            'categories' => Category::all()
        ]);
    }
}
