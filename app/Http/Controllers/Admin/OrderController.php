<?php

namespace App\Http\Controllers\Admin;

use App\Models\Postgroup;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController
{

    public function index()
    {
        $ordersList = Order::with('transaction','servicetype')->orderby('id','desc')->get();
        return view ('admin.order.order-list',compact('ordersList'));
    }


    public function create()
    {
       
    }


    public function store(Request $request)
    {
       
    }
        



    public function show($id)
    {
        $orderDetail = Order::with('transaction','orderdetail','coloption','deloption')->find($id);
        // dd($orderDetail);
        return view('admin.order.show',compact('orderDetail'));
    }


    public function edit($id)
    {
        
    }


    public function update(Request $request, $id)
    {

    }


    public function destroy($id)
    {

    }
}
