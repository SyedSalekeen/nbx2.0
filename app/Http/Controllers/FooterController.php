<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use App\Models\Footer;
use App\Models\LeadsContact;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function index() {
        $footer = Footer::find(1);
        return view('admin.footer.index',get_defined_vars());
    }

    public function update(Request $request) {

        $store = Footer::find(1);
        $store->heading = $request->heading;
        $store->location = $request->location;
        $store->contact = $request->contact;
        $store->email = $request->email;
        $store->instagram = $request->instagram;
        $store->facebook = $request->facebook;
        if ($request->hasFile('logo')) {
            $imageName = random_int(100000, 999999) . '.' . $request->logo->extension();
            $request->logo->move(public_path('home_rehab'), $imageName);
            $store->logo = $imageName;

        }

        $store->save();
        return redirect()->route('footer');

    }

    public function contact_us_message() {
        // $contacts = ContactUs::all();
        $leads = LeadsContact::all();
        return view('admin.contact.index',get_defined_vars());
    }

    public function lead_details($id) {

        $leads = LeadsContact::where('id',$id)->with('services_check')->first();
        return view('admin.contact.details',get_defined_vars());

    }
}
