<?php

namespace App\Http\Livewire;

use App\Product;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class Products extends Component
{
    use WithPagination;

    public function render(): View
    {
        return view('livewire.products', [
            'products' => Product::paginate(12),
        ]);
    }
}
