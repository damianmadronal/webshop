<?php

namespace App\Cart;

use App\Product;

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

    /**
     * Add item to the Cart session
     *
     * @param Request $request
     * @param Product $product
     * @return void
     */
    public function add(Request $request, Product $product)
    {
        $newItem = [
            'quantity' => 0,
            'price' => $product->price,
            'item' => $product
        ];

        if ($this->items && array_key_exists($product->id, $this->items)) {
            $newItem = $this->items[$product->id];
        }

        $newItem["quantity"]++;
        $newItem['price'] = $product->price * $newItem['quantity'];
        $this->items[$product->id] = $newItem;
        $this->quantity++;
        $this->price += $product->price;

        $request->session()->put('cart', $this);
    }

    /**
     * Get all items from items array
     *
     * @return void
     */
    public function getAll()
    {
        return $this->items;
    }
}
