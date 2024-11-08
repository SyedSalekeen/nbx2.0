<?php

namespace App\Http\Controllers;

use App\Models\LandmarkSectionSecond;
use Illuminate\Http\Request;

class LandmarkSectionSecondController extends Controller
{
    public function index() {
        $landmarkSection = LandmarkSectionSecond::all();
        return view('admin.landmark_section_2.index',get_defined_vars());
    }

    public function create() {
        return view('admin.landmark_section_2.create');
    }

    public function store(Request $request) {
     
        $store = new LandmarkSectionSecond();
        $store->heading = $request->heading;
        $store->description = $request->description;
        $store->status = $request->status;
        if($request->hasFile('image')) {
            $imageName = random_int(100000, 999999) . '.' . $request->image->extension();
            $request->image->move(public_path('landmark_section'), $imageName);
            $store->image = $imageName;
        }
        $store->save();
        return redirect()->route('landmark_section_second');


    }

    public function edit($id) {

        $landmarkSection = LandmarkSectionSecond::find($id);
        return view('admin.landmark_section_2.edit',get_defined_vars());

    }

    public function update(Request $request, $id) {
        $store = LandmarkSectionSecond::find($id);
        $store->heading = $request->heading;
        $store->description = $request->description;
        $store->status = $request->status;
        if($request->hasFile('image')) {
            $imageName = random_int(100000, 999999) . '.' . $request->image->extension();
            $request->image->move(public_path('landmark_section'), $imageName);
            $store->image = $imageName;
        }
        $store->save();
        return redirect()->route('landmark_section_second');
    }
}
