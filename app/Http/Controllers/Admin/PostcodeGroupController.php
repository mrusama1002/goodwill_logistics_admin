<?php

namespace App\Http\Controllers\Admin;

use App\Models\Postgroup;
use Illuminate\Http\Request;

class PostcodeGroupController
{

    public function index()
    {
        $postcodesgroup = Postgroup::all();
        return view('admin.postcodegroup.index', compact('postcodesgroup'));
    }


    public function create()
    {
        return view ('admin.postcodegroup.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'zones' => 'required',
        ]);
            $pcgroup = new Postgroup();
            $pcgroup->group_name = $request->zones;
            $pcgroup->save();
        return redirect()->route('postcode-group.index');
    }



    public function show($id)
    {
        return abort(404);
    }


    public function edit($id)
    {
        $postCodeGroup = Postgroup::find($id);
        return view('admin.postcodegroup.edit', compact('postCodeGroup'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'postcodegroup' => 'required',
        ]);

        $pcgroup = Postgroup::find($id);
        $pcgroup->group_name = $request->postcodegroup;
        $pcgroup->save();
    return redirect()->route('postcode-group.index');
    }


    public function destroy($id)
    {
        $pcgroup = Postgroup::find($id);
        $pcgroup->delete();
        return redirect()->route('postcode-group.index');
    }
}
