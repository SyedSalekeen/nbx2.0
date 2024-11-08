<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index() {
        $testimonials = Testimonial::all();
        return view('admin.testemonial.index',get_defined_vars());
    }

    public function create () {
        return view('admin.testemonial.create');
    }

    public function store (Request $request) {

        $store = new Testimonial();
        $store->heading = $request->heading;
        $store->description = $request->description;
        $store->status = $request->status;
        if($request->hasFile('image')) {
            $imageName = random_int(100000, 999999) . '.' . $request->image->extension();
            $request->image->move(public_path('testimonials'), $imageName);
            $store->image = $imageName;
        }
        $store->save();
        return redirect()->route('testemonials');
    }

    public function edit ($id) {
        $testimonials = Testimonial::find($id);
        return view('admin.testemonial.edit',get_defined_vars());

    }

    public function update(Request $request, $id) {
        $update = Testimonial::find($id);
        $update->heading = $request->heading;
        $update->description = $request->description;
        $update->status = $request->status;
        if($request->hasFile('image')) {
            $imageName = random_int(100000, 999999) . '.' . $request->image->extension();
            $request->image->move(public_path('testimonials'), $imageName);
            $update->image = $imageName;
        }
        $update->save();
        return redirect()->route('testemonials');
    }
}
