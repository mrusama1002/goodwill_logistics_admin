<?php

namespace App\Http\Controllers\Admin;

use App\Models\Postcode;
use App\Models\Postgroup;
use Illuminate\Http\Request;

class PostcodeController
{

    public function index()
    {
        $postcodes = Postcode::with('group')->get();
        return view('admin.postcode.index', compact('postcodes'));
    }


    public function create()
    {
        $postCodeGroupList = Postgroup::all();
        return view('admin.postcode.create', compact('postCodeGroupList'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'postcode' => 'required',
            'group' => 'required',
        ]);
        $postcodesLineBreak = explode("\r\n", $request->postcode);

        foreach ($postcodesLineBreak as $postCodes) {
            $postCodeExist = Postcode::where('post_code', $postCodes)->first();
            if ($postCodeExist) {
                return redirect()->back()->with('message', 'Post Code Already Exist');
            }
            Postcode::create([
                'post_code' => $postCodes,
                'group_id' => $request->group
            ]);
        }
        return redirect()->route('postcode.index');

    }


    public function show($id)
    {
        return abort(404);
    }


    public function edit($id)
    {

        $postcode = Postcode::where('id', $id)->first();
        $postCodeGroupList = Postgroup::all();
        return view('admin.postcode.edit', compact('postcode', 'postCodeGroupList'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'postcode' => 'required',
            'group' => 'required',
        ]);

        $postcode = Postcode::where('id', $id)->first();
        $postcode->update([
            'post_code' => $request->postcode,
            'group' => $request->group,
        ]);
        return redirect()->route('postcode.index');
    }


    public function destroy($id)
    {
        $postcode = Postcode::where('id', $id)->first();
        $postcode->delete();
        return redirect()->route('postcode.index');
    }
}
