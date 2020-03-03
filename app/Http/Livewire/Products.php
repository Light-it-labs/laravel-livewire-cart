<?php

namespace App\Http\Livewire;

use App\Product;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class Products extends Component
{
    use WithPagination;

    public $search;

    protected $updatesQueryString = ['search'];

    public function mount(): void
    {
        $this->search = request()->query('search', $this->search);
    }

    public function render(): View
    {
        if($this->search === null)
            return view('livewire.products', [
                'products' => Product::paginate(12),
            ]);

        return view('livewire.products', [
            'products' => Product::where('name', 'like', '%' . $this->search . '%')->paginate(12),
        ]);
    }
}
