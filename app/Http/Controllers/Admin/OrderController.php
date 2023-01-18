<?php

namespace App\Http\Controllers\Admin;

use App\Models\Postgroup;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\ServiceType;
use App\Models\CollectionOption;
use App\Models\DeliveryOption;
use Carbon\Carbon;
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
        $orderUpdate = Order::find($id);
        $serviceType = Servicetype::all();
        $collectionOption = CollectionOption::all();
        $deliveryOption = DeliveryOption::all();
        return view('admin.order.edit',compact('orderUpdate','serviceType','collectionOption','deliveryOption'));
    }


    public function update(Request $request, $id)
    {
        $collectionDate = $request->collectionDate;
        $serviceType = $request->serviceType;
        $collectFrom = $request->collectFrom;
        $deliverTo = $request->deliverTo;
        $miniQuantity = $request->miniQuantity;
        $quarterQuantity = $request->quarterQuantity;
        $halfQuantity = $request->halfQuantity;
        $lightQuantity = $request->lightQuantity;
        $fullQuantity = $request->fullQuantity;
        $collectionOption = $request->collectionOption;
        $deliveryOption = $request->deliveryOption;
        $liabilityCover = $request->liabilityCover;
        $email = $request->email;
        $colFirstName = $request->colFirstName;
        $colLastName = $request->colLastName;
        $orderNotes = $request->orderNotes;
        $colCountryCode = $request->colCountryCode;
        $colPhone = $request->colPhone;
        $colCompanyName = $request->colCompanyName;
        $colAddress = $request->colAddress;
        $colCity = $request->colCity;
        $colCountry = $request->colCountry;
        $deFirstName = $request->deFirstName;
        $deLastName = $request->deLastName;
        $deCountryCode = $request->deCountryCode;
        $dePhone = $request->dePhone;
        $deAddress = $request->deAddress;
        $productPrice = $request->productPrice;
        $grandTotal = $request->grandTotal;
        $vattax = $request->vattax;
        $deliveryStatus = $request->deliveryStatus;

        $orderUpdate = Order::find($id);
        $orderUpdate->collection_date = $collectionDate;
        $orderUpdate->service_type_id = $serviceType;
        $orderUpdate->collect_from = $collectFrom;
        $orderUpdate->deliver_to = $deliverTo;
        $orderUpdate->miniQuantity = $miniQuantity;
        $orderUpdate->quarterQuantity = $quarterQuantity;
        $orderUpdate->halfQuantity = $halfQuantity;
        $orderUpdate->lightQuantity = $lightQuantity;
        $orderUpdate->fullQuantity = $fullQuantity;
        $orderUpdate->collectionOption = $collectionOption;
        $orderUpdate->deliveryOption = $deliveryOption;
        $orderUpdate->liability_cover = $liabilityCover;
        $orderUpdate->email = $email;
        $orderUpdate->colFirstName = $colFirstName;
        $orderUpdate->colLastName = $colLastName;
        $orderUpdate->colCountryCode = $colCountryCode;
        $orderUpdate->colPhone = $colPhone;
        $orderUpdate->colCompanyName = $colCompanyName;
        $orderUpdate->colAddress = $colAddress;
        $orderUpdate->colCity = $colCity;
        $orderUpdate->colCountry = $colCountry;
        $orderUpdate->deFirstName = $deFirstName;
        $orderUpdate->deLastName = $deLastName;
        $orderUpdate->deCountryCode = $deCountryCode;
        $orderUpdate->dePhone = $dePhone;
        $orderUpdate->deAddress = $deAddress;
        $orderUpdate->productPrice = $productPrice;
        $orderUpdate->grandTotal = $grandTotal;
        $orderUpdate->vattax = $vattax;
        $orderUpdate->orderNotes = $orderNotes;
        $orderUpdate->deliveryStatus = $deliveryStatus;
        $orderUpdate->LastModified = Carbon::now()->format('Y-m-d H:i:s');
        $orderUpdate->save();

        return redirect()->route('orders.index');
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
