<?php

namespace App\Http\Livewire;

use App\Product;
use App\Services\CartService;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class Products extends Component
{
    use WithPagination;

    public $search;

    protected $updatesQueryString = ['search'];

    protected $cartService;

    public function __construct(string $id)
    {
        parent::__construct($id);
        $this->cartService = app(CartService::class);
    }

    public function mount(): void
    {
        $this->search = request()->query('search', $this->search);
    }

    public function addToCart(int $productId): void
    {
        $product = Product::where('id', $productId)->first();

        $this->cartService->add($product);
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
