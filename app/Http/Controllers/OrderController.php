<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Order;

class OrderController extends Controller
{
    /**
     * Shows the order list with every order a user has made
     *
     * @return void
     */
    public function index()
    {
        $userId = Auth::user()->id;

        $orders = Order::where('user_id', $userId)->get();

        return view('orders', ['orders' => $orders]);
    }
}
