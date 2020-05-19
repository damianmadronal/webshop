<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    public function ProductOverview($id)
    {
        $categoryName = DB::table('category')->get()->where('id', $id)->pluck('name');
        $products = DB::table('product')->get()->where('category_id', $id);

        return view('product_overview', ['products' => $products, 'categoryName' => $categoryName]);
    }

    public function index($id)
    {
        $product = DB::table('product')->get()->where('id', $id)[$id - 1];

        return view('product', ['product' => $product]);
    }
}
