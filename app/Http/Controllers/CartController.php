<?php


namespace App\Http\Controllers;


use Illuminate\Contracts\View\View;

class CartController
{
    public function index(): View
    {
        return view('cart.index');
    }
}
