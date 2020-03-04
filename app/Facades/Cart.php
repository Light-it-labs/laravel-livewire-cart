<?php


namespace App\Facades;


use Illuminate\Support\Facades\Facade;

class Cart extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'cart';
    }
}
