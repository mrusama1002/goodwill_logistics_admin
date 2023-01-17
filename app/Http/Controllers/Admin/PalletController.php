<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Palletrate;
use App\Models\ServiceType;
use \App\Models\Postgroup;
use \App\Models\Product;
use \App\Models\Postcode;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

class PalletController
{
    public function index()
    {
        $palletrates = Palletrate::with('serviceType', 'postCode', 'group')->get();
        return view('admin.palletrate.index', compact('palletrates'));
    }

    public function create()

    {
        $Servicetypes = ServiceType::all();
        $groups = Postgroup::all();
        $products = Product::all();
        return view('admin.palletrate.create', compact('Servicetypes', 'groups', 'products'));
    }

    public function store(Request $request)
    {
        Palletrate::create([
            'price' => $request->price,
            'quantity' => $request->qty,
            'product_id' => $request->product_id,
            'service_type_id' => $request->service_type_id,
            'group_id' => $request->group_id,
        ]);
        return redirect()->route('pallet.index');
    }


    public function show($id)
    {
    }


    public function edit($id)
    {
        $palletrate = Palletrate::find($id);
        
        $Servicetypes = ServiceType::all();
        $groups = Postgroup::all();
        $products = Product::all();
        return view('admin.palletrate.edit', compact('palletrate','Servicetypes', 'groups', 'products'));
    }


    public function update(Request $request, $id)
    {
        $palletrate = Palletrate::find($id);
        $palletrate->price = $request->price;
        $palletrate->quantity = $request->qty;
        $palletrate->product_id = $request->product_id;
        $palletrate->service_type_id = $request->service_type_id;
        $palletrate->group_id = $request->group_id;
        
        $palletrate->save();
        return redirect()->route('pallet.index');
    }


    public function destroy($id)
    {
    }
}
