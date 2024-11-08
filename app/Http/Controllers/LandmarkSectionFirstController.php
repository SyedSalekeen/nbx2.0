<?php

namespace App\Http\Controllers;

use App\Models\LandmarkSectionFirst;
use Illuminate\Http\Request;

class LandmarkSectionFirstController extends Controller
{
    public function index() {
        $landmarkSection = LandmarkSectionFirst::all();
        return view('admin.landmark_section_1.index',get_defined_vars());
    }

    public function create() {
        return view('admin.landmark_section_1.create');
    }

    public function store(Request $request) {
     
        $store = new LandmarkSectionFirst();
        $store->heading = $request->heading;
        $store->description = $request->description;
        $store->status = $request->status;
        if($request->hasFile('image')) {
            $imageName = random_int(100000, 999999) . '.' . $request->image->extension();
            $request->image->move(public_path('landmark_section'), $imageName);
            $store->image = $imageName;
        }
        $store->save();
        return redirect()->route('landmark_section_first');


    }

    public function edit($id) {

        $landmarkSection = LandmarkSectionFirst::find($id);
        return view('admin.landmark_section_1.edit',get_defined_vars());

    }

    public function update(Request $request, $id) {
        $store = LandmarkSectionFirst::find($id);
        $store->heading = $request->heading;
        $store->description = $request->description;
        $store->status = $request->status;
        if($request->hasFile('image')) {
            $imageName = random_int(100000, 999999) . '.' . $request->image->extension();
            $request->image->move(public_path('landmark_section'), $imageName);
            $store->image = $imageName;
        }
        $store->save();
        return redirect()->route('landmark_section_first');
    }
}
