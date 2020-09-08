<?php

namespace App\Http\Controllers;

use Session;
use App\Cart\Cart;
use DB;


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
            'cart' => $cart
        ]);
    }

    public function updateQuantity(Request $request, $id)
    {
        $cart = new Cart();
        $cart->setQuantity($request, $id, $request->input("quantityInput"));

        return view('shopping-cart')->with([
            'cart' => $cart
        ]);
    }

    public function deleteItem($id)
    {
        $cart = new Cart();
        $cart->removeItem($id);

        return view('shopping-cart')->with([
            'cart' => $cart
        ]);
    }

    public function order()
    {
        $cart = Session::get('cart');

        $content = [
            "cart" => serialize($cart),
            "user_id" => Auth()->user()->id
        ];

        DB::table("orders")->insert($content);

        Session::forget('cart');

        $cart = Session::has('cart') ? Session::get('cart') : null;

        return view('shopping-cart')->with([
            'cart' => $cart,
            'success', 'Succesfully placed order!'
        ]);
    }
}
