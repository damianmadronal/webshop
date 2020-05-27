<?php

namespace App\Cart;

use Illuminate\Http\Request;

class Cart
{
    private $items = [];

    private $quantity = 0;
    private $price = 0;

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->quantity = $oldCart->quantity;
            $this->price = $oldCart->price;
        }
    }

    public function add(Request $request, $product)
    {
        $newItem = [
            "id" => $product->id,
            "quantity" => $this->quantity
        ];

        if ($this->items && array_key_exists($product->id, $this->items)) {
            $newItem = $this->items[$product->id];
        }

        $newItem["quantity"]++;

        $this->items[$product->id] = $newItem;

        $request->session()->put('cart', $this);
    }
}
