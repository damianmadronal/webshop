<?php

namespace App\Http\Controllers;

use Session;
use App\Cart\Cart;

use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getCart()
    {
        if (!Session::has('cart')) {
            return view('shopping-cart')->with(['products' => null]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shopping-cart')->with([
            'products' => $cart->items,
            'totalPrice' => $cart->price,
            'totalQuantity' => $cart->quantity
        ]);
    }
}
