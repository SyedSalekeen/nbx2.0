<?php

namespace App\Http\Controllers;

use App\Models\PropertyManagement;
use App\Models\Service;
use Illuminate\Http\Request;

class PropertyManagementController extends Controller
{
    public function index() {
        $properties = PropertyManagement::all();
        return view('admin.property_management.index',get_defined_vars());
    }
    public function create() {
        $services = Service::all();

        return view('admin.property_management.create',get_defined_vars());
    }

    public function store (Request $request) {
        // dd($request->all());

        $store = new PropertyManagement();
        $store->heading = $request->heading;
        $store->description = $request->description;
        $imageName = random_int(100000, 999999).'.'.$request->image->extension();
        $request->image->move(public_path('property_managment'), $imageName);
        $store->image = $imageName;
        $store->status = $request->status;
        $store->services = $request->services;
        $store->save();
        return redirect('all-services');
    }

    public function edit($id) {
        $property = PropertyManagement::find($id);
        return view('admin.property_management.edit',get_defined_vars());
    }
    public function update(Request $request, $id) {
        $update =  PropertyManagement::find($id);
        $update->heading = $request->heading;
        $update->description = $request->description;
        if($request->hasFile('image')) {
        $imageName = random_int(100000, 999999).'.'.$request->image->extension();
        $request->image->move(public_path('property_managment'), $imageName);
        $update->image = $imageName;
    }
        $update->status = $request->status;
        $update->services = $request->services;

        $update->save();
        return redirect('all-services');
    }

    public function remove($id) {

        PropertyManagement::find($id)->delete();
        return redirect('all-services');

    }
}
