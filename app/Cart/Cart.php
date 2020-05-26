<?php

namespace App\Cart;

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

    public function add($id)
    {
        $newItem = [
            'id' => $id,
            'quantity' => $this->quantity,
        ];

        if (array_key_exists($id, $this->items)) {
            $newItem = $this->items[$id];
        }
        $newItem['quantity']++;

        $this->items[$id] = $newItem;
    }
}
