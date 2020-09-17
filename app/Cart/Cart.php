<?php

namespace App\Cart;

use App\Product;
use Session;

use Illuminate\Http\Request;

class Cart
{
    private $items = [];
    private $quantity = 0;
    private $price = 0;

    public function __construct()
    {
        if ($this->getCart()) {
            $this->items = $this->getCart()->items;
            $this->quantity = $this->getCart()->quantity;
            $this->price = $this->getCart()->price;
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
     * Sets the quantity of a certain item in the shopping cart
     *
     * @param int $id
     * @param int $quantity
     * @return void
     */
    public function setQuantity(Request $request, $id, $quantity)
    {
        if ($quantity <= 0) {
            $this->removeItem($request, $id);
            return;
        }

        $this->quantity -= $this->items[$id]['quantity'];
        $this->quantity += $quantity;

        $this->price -= $this->items[$id]['price'];
        $this->price += $quantity * $this->items[$id]['price'];

        if ($this->quantity == 0) {
            $this->items[$id]['price'] = $quantity * $this->items[$id]['price'];
        } else {
            $this->items[$id]['price'] = $quantity * ($this->items[$id]['price'] /
                $this->items[$id]['quantity']);
        }

        $this->items[$id]['quantity'] = $quantity;

        $request->session()->put('cart', $this);
    }

    /**
     * Deleted a certain item from the shoppingcart
     *
     * @param int $id
     * @return void
     */
    public function removeItem(Request $request, $id)
    {
        unset($this->items[$id]);

        if (empty($this->items)) {
            Session::forget("cart");
        } else {
            $request->session()->put('cart', $this);
        }
    }

    /**
     * Gets the total quantity of all products in the shoppingcart
     *
     * @return $totalQuantity
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
     * Gets the total price of every product in the shoppingcart
     *
     * @return $totalPrice
     */
    public function getTotalPrice()
    {
        $totalPrice = 0;
        foreach ($this->items as $product) {
            $totalPrice += $product['price'];
        }
        return $totalPrice;
    }

    /**
     * Gets the cart
     *
     * @return void
     */
    public function getCart()
    {
        return Session::has('cart') ? Session::get('cart') : null;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function getquantity()
    {
        return $this->quantity;
    }

    public function getPrice()
    {
        return $this->price;
    }
}
