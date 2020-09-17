<?php

namespace App\Http\Controllers;

use Session;
use App\Cart\Cart;
use DB;
use App\Order;
use App\OrdersProduct;


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
            'cart' => $cart->getCart()
        ]);
    }

    /**
     * Deletes a certain item from the shoppingcart
     *
     * @param int $id
     * @return void
     */
    public function deleteItem(Request $request, $id)
    {
        $cart = new Cart();
        $cart->removeItem($request, $id);

        return view('shopping-cart')->with([
            'cart' => $cart->getCart()
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

        $cart = new cart();
        $user = auth()->user();

        $order = new Order();
        $order->total_price = $cart->getTotalPrice();
        $order->user_id = $user->id;
        $order->save();

        foreach ($cart->getItems() as $item) {
            $orderProduct = new OrdersProduct;
            $orderProduct->product_id = $item['item']['id'];
            $orderProduct->order_id = $order->id;
            $orderProduct->quantity = $item['quantity'];
            $orderProduct->price = $item['price'];
            $orderProduct->save();
        }

        Session::forget('cart');

        $cart = Session::has('cart') ? Session::get('cart') : null;

        return view('shopping-cart')->with([
            'success', 'Succesfully placed order!',
            'cart' => $cart
        ]);
    }
}
