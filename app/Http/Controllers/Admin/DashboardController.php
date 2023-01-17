<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Order;

class DashboardController
{

 public function index()
 {
    $orders = Order::orderby('id','DESC')->get();
    return view('admin/dashboard',compact('orders'));
 }
}
