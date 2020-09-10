<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Give back categories to view
     *
     * @return void
     */
    public function index()
    {
        // $categories = DB::table('category')->get();
        $categories = Category::all();

        return view("category_overview", ['categories' => $categories]);
    }
}
