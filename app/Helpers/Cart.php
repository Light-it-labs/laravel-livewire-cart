<?php


namespace App\Helpers;


class Cart
{
    public function __construct()
    {
        if(request()->session()->get('cart') === null)
            $this->set([
                'products' => [],
                'total' => 0
            ]);
    }

    public function add($product): void
    {
        $cart = $this->get();
        array_push($cart['products'], $product);
        $cart['total'] += $product->price;
        $this->set($cart);
    }

    public function remove($productId): void
    {
        $cart = $this->get();

        array_splice($cart['products'], array_search($productId, array_column($cart['products'], 'id')), 1);

        $this->set($cart);
    }

    public function get(): ?array
    {
        return request()->session()->get('cart');
    }

    private function set($cart): void
    {
        request()->session()->put('cart', $cart);
    }
}
