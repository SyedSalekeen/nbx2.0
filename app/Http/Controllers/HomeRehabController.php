<?php

namespace App\Http\Controllers;

use App\Models\HomeRehab;
use Illuminate\Http\Request;

class HomeRehabController extends Controller
{
    public function index()
    {
        $homeRehabs = HomeRehab::all();
        return view('admin.home_rehab.index', get_defined_vars());
    }
    public function create()
    {
        return view('admin.home_rehab.create', get_defined_vars());
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $store = new HomeRehab();
        $store->heading = $request->heading;
        $store->description = $request->description;
        $imageName = random_int(100000, 999999) . '.' . $request->image->extension();
        $request->image->move(public_path('home_rehab'), $imageName);
        $store->image = $imageName;
        $store->status = $request->status;
        $store->save();
        return redirect('home-rehabs');
    }

    public function edit($id)
    {
        $homeRehab = HomeRehab::find($id);
        return view('admin.home_rehab.edit', get_defined_vars());
    }
    public function update(Request $request, $id)
    {
        $update =  HomeRehab::find($id);
        $update->heading = $request->heading;
        $update->description = $request->description;
        if ($request->hasFile('image')) {
            $imageName = random_int(100000, 999999) . '.' . $request->image->extension();
            $request->image->move(public_path('home_rehab'), $imageName);
            $update->image = $imageName;
        }
        $update->status = $request->status;
        $update->save();
        return redirect('home-rehabs');
    }

    public function remove($id)
    {

        HomeRehab::find($id)->delete();
        return redirect('home-rehabs');
    }
}
