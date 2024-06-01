<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class Navbar extends Component
{
    public function render()
    {
        return view('livewire.navbar', [
            'categories' => Category::all()
        ]);
    }
}
