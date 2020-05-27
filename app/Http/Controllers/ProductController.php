<?php

namespace App\Http\Controllers;

use App\Cart\Cart;
use Illuminate\Http\Request;
use App\Product;
use DB;

use Session;

class ProductController extends Controller
{
    /**
     * Gives back products and category name to view
     *
     * @param int $id
     * @return void
     */
    public function productOverview($id)
    {
        $categoryName = DB::table('category')->get()->where('id', $id)->pluck('name');
        $products = DB::table('product')->get()->where('category_id', $id);

        return view('product_overview', ['products' => $products, 'categoryName' => $categoryName]);
    }

    /**
     * Gives back products to view
     *
     * @param int $id
     * @return void
     */
    public function productIndex($id)
    {
        $product = DB::table('product')->get()->where('id', $id)[$id - 1];

        return view('product', ['product' => $product]);
    }

    /**
     * cool
     *
     * @param Request $request
     * @param int $id
     * @return void
     */
    public function add(Request $request, $id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($request, Product::find($id));
        // $request->session()->flush();
        dd($request->session()->get('cart'));

        return back()->with('success', 'Succesfully added item to cart!');
    }
}
