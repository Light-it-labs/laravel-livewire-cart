<?php

namespace App\Http\Livewire;

use App\Services\CartService;
use Livewire\Component;

class Cart extends Component
{
    public $cart;

    protected $cartService;

    public function __construct(string $id)
    {
        parent::__construct($id);
        $this->cartService = app(CartService::class);
    }

    public function mount(): void
    {
        $this->cart = $this->cartService->get();
    }

    public function render()
    {
        return view('livewire.cart');
    }
}
