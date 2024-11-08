<?php

namespace App\Http\Controllers;

use App\Models\Advantage;
use Illuminate\Http\Request;

class AdvantageController extends Controller
{
    public function index () {
        $advantages = Advantage::all();
        return view('admin.advantage.index',get_defined_vars());
    }

    public function craete() {
        return view('admin.advantage.create');

    }

    public function store(Request $request) {
        // dd($request->all());
        $store = new Advantage();
        $store->heading = $request->heading;
        $store->description = $request->description;
        $store->status = $request->status;
        $store->save();
        return redirect()->route('advantage');

    }

    public function edit($id) {
        $advantage = Advantage::find($id);
        return view('admin.advantage.edit',get_defined_vars());

    }

    public function update(Request $request, $id) {
        $store = Advantage::find($id);
        $store->heading = $request->heading;
        $store->description = $request->description;
        $store->status = $request->status;
        $store->save();
        return redirect()->route('advantage');
    }
}
