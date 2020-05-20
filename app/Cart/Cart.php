<?php

namespace App\Cart;

class Cart
{
    private $items = [];

    public function __construct()
    {
        $this->items = ['brood', 'melk'];
    }

    public function getItems()
    {
        return $this->items;
    }
}
