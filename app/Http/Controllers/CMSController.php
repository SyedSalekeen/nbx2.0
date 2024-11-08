<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\CaseStudies;
use App\Models\CMS;
use App\Models\Service;
use Illuminate\Http\Request;

class CMSController extends Controller
{
    public function index () {
        $cmspages = CMS::all();
        return view('admin.cms.index',get_defined_vars());
    }

    public function create() {
        $services = Service::all();

        return view('admin.cms.create',get_defined_vars());
    }

    public function store (Request $request) {
        // dd($request->all());

        $store = new CMS();
        $store->heading = $request->heading;
        $store->description = $request->description;
        $store->type = $request->type;

        $imageName = random_int(100000, 999999) . '.' . $request->image->extension();
        $request->image->move(public_path('cms_image'), $imageName);
        $store->image = $imageName;
        $store->save();
        return redirect()->route('cms');

    }

    public function edit($id) {
        $cms = CMS::find($id);
        return view('admin.cms.edit',get_defined_vars());

    }

    public function update(Request $request, $id) {
        $update = CMS::find($id);
        $update->heading = $request->heading;
        $update->description = $request->description;
        // $store->type = $request->type;
        if($request->hasFile('image')) {
            $imageName = random_int(100000, 999999) . '.' . $request->image->extension();
            $request->image->move(public_path('cms_image'), $imageName);
            $update->image = $imageName;
        }
        $update->save();
        return redirect()->route('cms');
    }

    public function case_studies() {
        $caseStudeis = CaseStudies::all();
        return view('admin.case_studies.index',get_defined_vars());
    }

    public function case_studies_create() {
        return view('admin.case_studies.create');
    }
    public function case_studies_store(Request $request) {
        // dd($request->all());
        $store = new CaseStudies();
        $store->heading = $request->heading;
        $store->description = $request->description;
        $store->long_description = $request->long_description;
        $store->status = $request->status;

        if($request->hasFile('image')) {
            $imageName = random_int(100000, 999999) . '.' . $request->image->extension();
            $request->image->move(public_path('case_studies'), $imageName);
            $store->image = $imageName;
        }
        $store->save();
        return redirect()->route('case_studies');

    }

    public function case_studies_edit($id) {
        $caseStudie = CaseStudies::find($id);
        return view('admin.case_studies.edit',get_defined_vars());

    }

    public function case_studies_update(Request $request, $id) {
        $update = CaseStudies::find($id);
        $update->heading = $request->heading;
        $update->description = $request->description;
        $update->long_description = $request->long_description;
        $update->status = $request->status;

        if($request->hasFile('image')) {
            $imageName = random_int(100000, 999999) . '.' . $request->image->extension();
            $request->image->move(public_path('case_studies'), $imageName);
            $update->image = $imageName;
        }
        $update->save();
        return redirect()->route('case_studies');
    }

    public function update_about_us() {
        $aboutUs = AboutUs::find(1);
        return view('admin.about_us.create',get_defined_vars());
    }

    public function about_us_save(Request $request) {
        $update = AboutUs::find(1);
        $update->sub_heading = $request->sub_heading;
        $update->long_description = $request->long_description;
        $update->save();
        return redirect()->back();
    }

    public function home() {
        return view('admin.services');
    }
}
