<?php

namespace App\Cart;

use App\Product;

use Illuminate\Http\Request;

class Cart
{
    public $items = [];

    public $quantity = 0;
    public $price = 0;

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
     * Get total quantity of every product
     */
    public function getTotalQuantity()
    {

        $totalQuantity = 0;
        foreach ($this->items as $product) {
            $totalQuantity += $product['quantity'];
        }
        return $totalQuantity;
    }

    /**
     * Get total price of every product
     */
    public function getTotalPrice()
    {
        $totalPrice = 0;
        foreach ($this->items as $product) {
            $totalPrice += $product['price'];
        }
        return $totalPrice;
    }
}
