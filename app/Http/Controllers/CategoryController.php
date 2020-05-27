<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
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
     * Give back categories to view
     *
     * @return void
     */
    public function index()
    {
        $categories = DB::table('category')->get();

        return view("category_overview", ['categories' => $categories]);
    }
}
