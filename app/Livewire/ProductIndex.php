<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductIndex extends Component
{
    use WithPagination;

    public $search;

    public function render()
    {
        // fitur search (dinonaktifkan) karena tidak bisa berfungsi
        // if ($this->search == null) {
        //     $products = Product::where('nama', 'like', '%'.$this->search.'%')->paginate(8);
        // } else {
        //     $products = Product::paginate(8);
        // }

        $products = Product::paginate(8);
        return view('livewire.product-index', [
            'products' => $products
        ]);
    }
}
