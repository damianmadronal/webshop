<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class OrderController extends Controller
{
    public function index()
    {
        $userId = Auth::user()->id;
        // dd($userId);

        $orders = DB::table('orders')->where('user_id', $userId)->get();


        return view('orders', ['orders' => $orders]);
    }
}
