<?php


namespace App\Helpers;


class Cart
{
    public function __construct()
    {
        $session = request()->session();

        if($session->get('cart') === null) {
            $session->put('cart', [
                'items' => [],
                'total' => 0
            ]);
        }
    }

    public function add($product): void
    {
        $cart = request()->session()->get('cart');
        array_push($cart['items'], $product);
        $cart['total'] += $product->price;
        request()->session()->put('cart', $cart);
    }

    public function get(): array
    {
        return request()->session()->get('cart');
    }
}
