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
use Carbon\Carbon;

class PalletController
{
    public function index()
    {
        $palletrates = Postgroup::with('palletrates')->whereHas('palletrates')->get();
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
        // $request->validate([
        //     'group_id' => 'required|unique:palletrate',
        // ]);
        $groupID = $request->group_id;
        $qtys = $request->qty;
        $mini = $request->mini;
        $miniUR = $request->mini_ur;
        $qtr = $request->quater;
        $qtrUR = $request->quater_ur;
        $half = $request->half;
        $halfUR = $request->half_ur;
        $light = $request->light;
        $lightUR = $request->light_ur;
        $full = $request->full;
        $fullUR = $request->full_ur;

        if($qtys){
            foreach ($qtys as $key => $qty) {
               if($mini){
                if($mini[$key]){
                $pallet = new Palletrate();
                $pallet->group_id = $groupID;
                $pallet->service_type_id = 1;
                $pallet->product_id = 1;
                $pallet->quantity = $qty;
                $pallet->price = $mini[$key];
                $pallet->created_date = Carbon::now();
                $pallet->updated_date = Carbon::now();
                $pallet->save();
                }
               }
               if($miniUR){
                if($miniUR[$key]){
                $pallet = new Palletrate();
                $pallet->group_id = $groupID;
                $pallet->service_type_id = 2;
                $pallet->product_id = 1;
                $pallet->quantity = $qty;
                $pallet->price = $miniUR[$key];
                $pallet->created_date = Carbon::now();
                $pallet->updated_date = Carbon::now();
                $pallet->save();
                }
               }
               if($qtr){
                if($qtr[$key]){
                $pallet = new Palletrate();
                $pallet->group_id = $groupID;
                $pallet->service_type_id = 1;
                $pallet->product_id = 2;
                $pallet->quantity = $qty;
                $pallet->price = $qtr[$key];
                $pallet->created_date = Carbon::now();
                $pallet->updated_date = Carbon::now();
                $pallet->save();
                }
               }
               if($qtrUR){
                if($qtrUR[$key]){
                $pallet = new Palletrate();
                $pallet->group_id = $groupID;
                $pallet->service_type_id = 2;
                $pallet->product_id = 2;
                $pallet->quantity = $qty;
                $pallet->price = $qtrUR[$key];
                $pallet->created_date = Carbon::now();
                $pallet->updated_date = Carbon::now();
                $pallet->save();
                }
               }
               if($half){
                if($half[$key]){
                $pallet = new Palletrate();
                $pallet->group_id = $groupID;
                $pallet->service_type_id = 1;
                $pallet->product_id = 3;
                $pallet->quantity = $qty;
                $pallet->price = $half[$key];
                $pallet->created_date = Carbon::now();
                $pallet->updated_date = Carbon::now();
                $pallet->save();
                }
               }
               if($halfUR){
                if($halfUR[$key]){
                $pallet = new Palletrate();
                $pallet->group_id = $groupID;
                $pallet->service_type_id = 2;
                $pallet->product_id = 3;
                $pallet->quantity = $qty;
                $pallet->price = $halfUR[$key];
                $pallet->created_date = Carbon::now();
                $pallet->updated_date = Carbon::now();
                $pallet->save();
                }
               }
               if($light){
                if($light[$key]){
                $pallet = new Palletrate();
                $pallet->group_id = $groupID;
                $pallet->service_type_id = 1;
                $pallet->product_id = 4;
                $pallet->quantity = $qty;
                $pallet->price = $light[$key];
                $pallet->created_date = Carbon::now();
                $pallet->updated_date = Carbon::now();
                $pallet->save();
                }
               }
               if($lightUR){
                if($lightUR[$key]){
                $pallet = new Palletrate();
                $pallet->group_id = $groupID;
                $pallet->service_type_id = 2;
                $pallet->product_id = 4;
                $pallet->quantity = $qty;
                $pallet->price = $lightUR[$key];
                $pallet->created_date = Carbon::now();
                $pallet->updated_date = Carbon::now();
                $pallet->save();
                }
               }
               if($full){
                if($full[$key]){
                $pallet = new Palletrate();
                $pallet->group_id = $groupID;
                $pallet->service_type_id = 1;
                $pallet->product_id = 5;
                $pallet->quantity = $qty;
                $pallet->price = $full[$key];
                $pallet->created_date = Carbon::now();
                $pallet->updated_date = Carbon::now();
                $pallet->save();
                }
               }
               if($fullUR){
                if($fullUR[$key]){
                $pallet = new Palletrate();
                $pallet->group_id = $groupID;
                $pallet->service_type_id = 2;
                $pallet->product_id = 5;
                $pallet->quantity = $qty;
                $pallet->price = $fullUR[$key];
                $pallet->created_date = Carbon::now();
                $pallet->updated_date = Carbon::now();
                $pallet->save();
                }
               }
            }
        }
        return redirect()->route('pallet.index');
    }


    public function show($id)
    {
    }


    public function edit($id)
    {
        $palletrate = Palletrate::where('group_id',$id)->get();
        // dd($palletrate);
        $groups = Postgroup::all();
        return view('admin.palletrate.edit', compact('palletrate','groups'));
    }


    public function update(Request $request, $id)
    {
        // dd($request->all());
        $groupID = $request->group_id;
        $qtys = $request->qty;
        $mini = $request->mini;
        $miniUR = $request->mini_ur;
        $qtr = $request->quater;
        $qtrUR = $request->quater_ur;
        $half = $request->half;
        $halfUR = $request->half_ur;
        $light = $request->light;
        $lightUR = $request->light_ur;
        $full = $request->full;
        $fullUR = $request->full_ur;

        if($qtys){
        foreach ($qtys as $key => $qty) {
           if($mini){
            if($mini[$key]){
            $pallet = Palletrate::where('group_id',$groupID)->where('service_type_id',1)->where('product_id',1)->where('quantity',$qty)->first();
            if($pallet){
            $pallet->group_id = $groupID;
            $pallet->service_type_id = 1;
            $pallet->product_id = 1;
            $pallet->quantity = $qty;
            $pallet->price = $mini[$key];
            $pallet->created_date = Carbon::now();
            $pallet->updated_date = Carbon::now();
            $pallet->save();
            }else{
            $pallet = new Palletrate();
            $pallet->group_id = $groupID;
            $pallet->service_type_id = 1;
            $pallet->product_id = 1;
            $pallet->quantity = $qty;
            $pallet->price = $mini[$key];
            $pallet->created_date = Carbon::now();
            $pallet->updated_date = Carbon::now();
            $pallet->save();
            }
            }
           }
           if($miniUR){
            if($miniUR[$key]){
                $pallet = Palletrate::where('group_id',$groupID)->where('service_type_id',2)->where('product_id',1)->where('quantity',$qty)->first();
                if($pallet){
                $pallet->group_id = $groupID;
                $pallet->service_type_id = 2;
                $pallet->product_id = 1;
                $pallet->quantity = $qty;
                $pallet->price = $miniUR[$key];
                $pallet->created_date = Carbon::now();
                $pallet->updated_date = Carbon::now();
                $pallet->save();
                }else{
                $pallet = new Palletrate();
                $pallet->group_id = $groupID;
                $pallet->service_type_id = 2;
                $pallet->product_id = 1;
                $pallet->quantity = $qty;
                $pallet->price = $miniUR[$key];
                $pallet->created_date = Carbon::now();
                $pallet->updated_date = Carbon::now();
                $pallet->save();
                }
            }
           }
           if($qtr){
            if($qtr[$key]){
                $pallet = Palletrate::where('group_id',$groupID)->where('service_type_id',1)->where('product_id',2)->where('quantity',$qty)->first();
                if($pallet){
                $pallet->group_id = $groupID;
                $pallet->service_type_id = 1;
                $pallet->product_id = 2;
                $pallet->quantity = $qty;
                $pallet->price = $qtr[$key];
                $pallet->created_date = Carbon::now();
                $pallet->updated_date = Carbon::now();
                $pallet->save();
                }else{
                $pallet = new Palletrate();
                $pallet->group_id = $groupID;
                $pallet->service_type_id = 1;
                $pallet->product_id = 2;
                $pallet->quantity = $qty;
                $pallet->price = $qtr[$key];
                $pallet->created_date = Carbon::now();
                $pallet->updated_date = Carbon::now();
                $pallet->save();
                }
            }
           }
           if($qtrUR){
            if($qtrUR[$key]){
                $pallet = Palletrate::where('group_id',$groupID)->where('service_type_id',2)->where('product_id',2)->where('quantity',$qty)->first();
                if($pallet){
                $pallet->group_id = $groupID;
                $pallet->service_type_id = 2;
                $pallet->product_id = 2;
                $pallet->quantity = $qty;
                $pallet->price = $qtrUR[$key];
                $pallet->created_date = Carbon::now();
                $pallet->updated_date = Carbon::now();
                $pallet->save();
                }else{
                $pallet = new Palletrate();
                $pallet->group_id = $groupID;
                $pallet->service_type_id = 2;
                $pallet->product_id = 2;
                $pallet->quantity = $qty;
                $pallet->price = $qtrUR[$key];
                $pallet->created_date = Carbon::now();
                $pallet->updated_date = Carbon::now();
                $pallet->save();
                }
            }
           }
           if($half){
            if($half[$key]){
                $pallet = Palletrate::where('group_id',$groupID)->where('service_type_id',1)->where('product_id',3)->where('quantity',$qty)->first();
                if($pallet){
                $pallet->group_id = $groupID;
                $pallet->service_type_id = 1;
                $pallet->product_id = 3;
                $pallet->quantity = $qty;
                $pallet->price = $half[$key];
                $pallet->created_date = Carbon::now();
                $pallet->updated_date = Carbon::now();
                $pallet->save();
                }else{
                $pallet = new Palletrate();
                $pallet->group_id = $groupID;
                $pallet->service_type_id = 1;
                $pallet->product_id = 3;
                $pallet->quantity = $qty;
                $pallet->price = $half[$key];
                $pallet->created_date = Carbon::now();
                $pallet->updated_date = Carbon::now();
                $pallet->save();
                }
            }
           }
           if($halfUR){
            if($halfUR[$key]){
                $pallet = Palletrate::where('group_id',$groupID)->where('service_type_id',2)->where('product_id',3)->where('quantity',$qty)->first();
                if($pallet){
                $pallet->group_id = $groupID;
                $pallet->service_type_id = 2;
                $pallet->product_id = 3;
                $pallet->quantity = $qty;
                $pallet->price = $halfUR[$key];
                $pallet->created_date = Carbon::now();
                $pallet->updated_date = Carbon::now();
                $pallet->save();
                }else{
                    // dd('asdas',$mini[$key],$groupID);
                $pallet = new Palletrate();
                $pallet->group_id = $groupID;
                $pallet->service_type_id = 2;
                $pallet->product_id = 3;
                $pallet->quantity = $qty;
                $pallet->price = $halfUR[$key];
                $pallet->created_date = Carbon::now();
                $pallet->updated_date = Carbon::now();
                $pallet->save();
                }
            }
           }
           if($light){
            if($light[$key]){
                $pallet = Palletrate::where('group_id',$groupID)->where('service_type_id',1)->where('product_id',4)->where('quantity',$qty)->first();
                if($pallet){
                $pallet->group_id = $groupID;
                $pallet->service_type_id = 1;
                $pallet->product_id = 4;
                $pallet->quantity = $qty;
                $pallet->price = $light[$key];
                $pallet->created_date = Carbon::now();
                $pallet->updated_date = Carbon::now();
                $pallet->save();
                }else{
                $pallet = new Palletrate();
                $pallet->group_id = $groupID;
                $pallet->service_type_id = 1;
                $pallet->product_id = 4;
                $pallet->quantity = $qty;
                $pallet->price = $light[$key];
                $pallet->created_date = Carbon::now();
                $pallet->updated_date = Carbon::now();
                $pallet->save();
                }
            }
           }
           if($lightUR){
            if($lightUR[$key]){
                $pallet = Palletrate::where('group_id',$groupID)->where('service_type_id',2)->where('product_id',4)->where('quantity',$qty)->first();
                if($pallet){
                $pallet->group_id = $groupID;
                $pallet->service_type_id = 2;
                $pallet->product_id = 4;
                $pallet->quantity = $qty;
                $pallet->price = $lightUR[$key];
                $pallet->created_date = Carbon::now();
                $pallet->updated_date = Carbon::now();
                $pallet->save();
                }else{
                $pallet = new Palletrate();
                $pallet->group_id = $groupID;
                $pallet->service_type_id = 2;
                $pallet->product_id = 4;
                $pallet->quantity = $qty;
                $pallet->price = $lightUR[$key];
                $pallet->created_date = Carbon::now();
                $pallet->updated_date = Carbon::now();
                $pallet->save();
                }
            }
           }
           if($full){
            if($full[$key]){
                $pallet = Palletrate::where('group_id',$groupID)->where('service_type_id',1)->where('product_id',5)->where('quantity',$qty)->first();
                if($pallet){
                $pallet->group_id = $groupID;
                $pallet->service_type_id = 1;
                $pallet->product_id = 5;
                $pallet->quantity = $qty;
                $pallet->price = $full[$key];
                $pallet->created_date = Carbon::now();
                $pallet->updated_date = Carbon::now();
                $pallet->save();
                }else{
                $pallet = new Palletrate();
                $pallet->group_id = $groupID;
                $pallet->service_type_id = 1;
                $pallet->product_id = 5;
                $pallet->quantity = $qty;
                $pallet->price = $full[$key];
                $pallet->created_date = Carbon::now();
                $pallet->updated_date = Carbon::now();
                $pallet->save();
                }
            }
           }
           if($fullUR){
            if($fullUR[$key]){
                $pallet = Palletrate::where('group_id',$groupID)->where('service_type_id',2)->where('product_id',5)->where('quantity',$qty)->first();
                if($pallet){
                $pallet->group_id = $groupID;
                $pallet->service_type_id = 2;
                $pallet->product_id = 5;
                $pallet->quantity = $qty;
                $pallet->price = $fullUR[$key];
                $pallet->created_date = Carbon::now();
                $pallet->updated_date = Carbon::now();
                $pallet->save();
                }else{
                $pallet = new Palletrate();
                $pallet->group_id = $groupID;
                $pallet->service_type_id = 2;
                $pallet->product_id = 5;
                $pallet->quantity = $qty;
                $pallet->price = $fullUR[$key];
                $pallet->created_date = Carbon::now();
                $pallet->updated_date = Carbon::now();
                $pallet->save();
                }
            }
           }
        }
    }
        return redirect()->route('pallet.index');
    }


    public function destroy($id)
    {
    }
}
