<?php

namespace App\Http\Controllers\Admin;

use App\Models\Postcode;
use App\Models\Postgroup;
use Illuminate\Http\Request;

class PostcodeController
{

    public function index()
    {
        $postcodes = Postgroup::with('postcodes')->get();
        // dd($postcodes);
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
        $postCodeGroupList = Postgroup::with('postcodes')->find($id);
        return view('admin.postcode.edit', compact('postCodeGroupList'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'postcode' => 'required',
            'group' => 'required',
        ]);
        foreach($request->postcodeID as $key => $postcodeid){
        $postcode = Postcode::where('id', $postcodeid);
        $postcode->update([
            'post_code' => $request->postcode[$key],
        ]);
    }
    return redirect()->route('postcode.index');
    }

    public function delete($id)
    {
        $postcode = Postcode::where('id', $id)->first();
        $postcode->delete();
        return redirect()->back();
    }
}
