<?php

namespace App\Http\Controllers;

use Session;
use App\Cart\Cart;
use DB;


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

    /**
     * Give back cart items to view
     *
     * @return void
     */
    public function getCart()
    {
        $cart = Session::has('cart') ? Session::get('cart') : null;
        // $cart = new Cart($oldCart);
        return view('shopping-cart')->with([
            'cart' => $cart
        ]);
    }

    public function updateQuantity(Request $request, $id)
    {
        $newQuantity = $request->input('quantityInput');

        $oldCart = Session::get('cart');

        $oldCart->quantity -= $oldCart->items[$id]['quantity'];
        $oldCart->quantity += $newQuantity;

        $oldCart->price -= $oldCart->items[$id]['price'];
        $oldCart->price += $newQuantity * $oldCart->items[$id]['price'];

        if ($oldCart->quantity == 0) {
            $oldCart->items[$id]['price'] = $newQuantity * $oldCart->items[$id]['price'];
        } else {
            $oldCart->items[$id]['price'] = $newQuantity * ($oldCart->items[$id]['price']  / $oldCart->items[$id]['quantity']);
        }

        $oldCart->items[$id]['quantity'] = $newQuantity;
        // $oldCart->items[$id]['price'] = $newQuantity * $oldCart->items[$id]['price'];

        // $cart = new Cart($oldCart);

        if ($oldCart->items[$id]['quantity'] < 1) {
            return redirect()->route("product.delete", [$id]);
        }

        return view('shopping-cart')->with([
            'cart' => $oldCart
        ]);
    }

    public function deleteItem($id)
    {
        $oldCart = Session::get('cart');

        unset($oldCart->items[$id]);


        if (empty($oldCart->items)) {
            Session::forget("cart");
        }

        $cart = Session::has('cart') ? Session::get('cart') : null;

        return view('shopping-cart')->with([
            'cart' => $cart
        ]);
    }

    public function order()
    {
        $cart = Session::get('cart');

        $content = [
            "cart" => serialize($cart),
            "user_id" => 1
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
