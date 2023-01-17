<?php

namespace App\Http\Controllers\Admin;

use App\Models\PostcodeGroup;
use Illuminate\Http\Request;

class PostcodeGroupController
{

    public function index()
    {
        $postcodesgroup = PostcodeGroup::all();
        return view('admin.postcodegroup.index', compact('postcodesgroup'));
    }


    public function create()
    {
        return view ('admin.postcodegroup.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'postcodegroup' => 'required',
        ]);
            $pcgroup = new PostcodeGroup();
            $pcgroup->group_name = $request->postcodegroup;
            $pcgroup->save();
        return redirect()->route('postcode-group.index');
    }



    public function show($id)
    {
        return abort(404);
    }


    public function edit($id)
    {
        $postCodeGroup = PostcodeGroup::find($id);
        return view('admin.postcodegroup.edit', compact('postCodeGroup'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'postcodegroup' => 'required',
        ]);

        $pcgroup = PostcodeGroup::find($id);
        $pcgroup->group_name = $request->postcodegroup;
        $pcgroup->save();
    return redirect()->route('postcode-group.index');
    }


    public function destroy($id)
    {
        $pcgroup = PostcodeGroup::find($id);
        $pcgroup->delete();
        return redirect()->route('postcode-group.index');
    }
}
