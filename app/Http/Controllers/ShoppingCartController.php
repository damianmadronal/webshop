<?php

namespace App\Http\Controllers;

use Session;
use App\Cart\Cart;
use DB;
use App\Order;


use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    /**
     * Give back cart items to view
     *
     * @return void
     */
    public function getCart()
    {
        $cart = new Cart();

        return view('shopping-cart')->with([
            'cart' => $cart->getCart()
        ]);
    }

    /**
     * Updates the quantity of a certain item in the shoppingcart
     *
     * @param Request $request
     * @param int $id
     * @return void
     */
    public function updateQuantity(Request $request, $id)
    {
        $cart = new Cart();
        $cart->setQuantity($request, $id, $request->input("quantityInput"));

        return view('shopping-cart')->with([
            'cart' => $cart
        ]);
    }

    /**
     * Deletes a certain item from the shoppingcart
     *
     * @param int $id
     * @return void
     */
    public function deleteItem($id)
    {
        $cart = new Cart();
        $cart->removeItem($id);

        return view('shopping-cart')->with([
            'cart' => $cart
        ]);
    }

    /**
     * Makes the order and saves the order details
     *
     * @return void
     */
    public function order()
    {
        $cart = Session::get('cart');

        Order::create([
            'cart' => serialize($cart),
            'user_id' => Auth()->user()->id
        ]);

        Session::forget('cart');

        $cart = Session::has('cart') ? Session::get('cart') : null;

        return view('shopping-cart')->with([
            'success', 'Succesfully placed order!',
            'cart' => $cart
        ]);
    }
}
