<?php

namespace App\Http\Controllers;

use App\Cart\Cart;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
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
        $categoryName = Category::where('id', $id)->pluck('name');
        $products = Product::where('category_id', $id)->get();

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
        $product = Product::where('id', $id)->get();


        return view('product', ['product' => $product[0]]);
    }

    /**
     * Adds a product to the shoppingcart
     *
     * @param Request $request
     * @param int $id
     * @return void
     */
    public function add(Request $request, $id)
    {
        $cart = new Cart();
        // $request->Session()->flush();

        $cart->add($request, Product::find($id));

        return back()->with('success', 'Succesfully added item to cart!');
    }
}
