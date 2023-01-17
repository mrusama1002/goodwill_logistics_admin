<?php

namespace App\Http\Controllers\Admin;

use App\Models\Postgroup;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController
{

    public function index()
    {
        $ordersList = Order::with('transaction', 'servicetype')->orderby('id', 'desc')->get();
        return view('admin.order.order-list', compact('ordersList'));
    }

    public function show($id)
    {
        $orderDetail = Order::with('transaction', 'orderdetail', 'coloption', 'deloption')->find($id);
        return view('admin.order.show', compact('orderDetail'));
    }


    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {

    }


    public function updateStatus(Request $request)
    {
        $request->validate([
            'orderNotes' => 'required',
            'deliveryStatus' => 'required'
        ]);

        $order = Order::where('id', $request->orderId)->first();
        $order->update([
            'orderNotes' => $request->orderNotes,
            'deliveryStatus' => $request->deliveryStatus,
            'lastUpdatedUserId' => $request->authId,
        ]);

        return redirect()->back()->with('success', 'Delivery Status has been updated!');

    }

}
