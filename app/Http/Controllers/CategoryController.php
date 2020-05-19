<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = DB::table('category')->get();

        return view("category_overview", ['categories' => $categories]);
    }
}
