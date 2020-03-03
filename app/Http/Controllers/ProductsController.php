<?php


namespace App\Http\Controllers;


use Illuminate\Contracts\View\View;

class ProductsController
{
    public function index(): View
    {
        return view('products.index');
    }
}
