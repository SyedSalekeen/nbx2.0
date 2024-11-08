<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceConstruction;
use App\Models\ServiceConstructionTwo;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index () {
        $services = Service::all();
        return view('admin.service.index',get_defined_vars());
    }
    public function create() {
        $services = Service::all();

        return view('admin.service.create',get_defined_vars());
    }

    public function store(Request $request) {

        $store = new Service();
        $store->heading = $request->heading;
        $store->description = $request->description;

        if($request->hasFile('image')) {
            $imageName = random_int(100000, 999999) . '.' . $request->image->extension();
            $request->image->move(public_path('service_section'), $imageName);
            $store->image = $imageName;
        }
        $store->save();
        return redirect()->route('service_section');
    }

    public function edit($id) {
        $service = Service::find($id);
        return view('admin.service.edit',get_defined_vars());

    }

    public function update(Request $request, $id) {
        $store = Service::find($id);
        $store->heading = $request->heading;
        $store->description = $request->description;

        if($request->hasFile('image')) {
            $imageName = random_int(100000, 999999) . '.' . $request->image->extension();
            $request->image->move(public_path('service_section'), $imageName);
            $store->image = $imageName;
        }
        $store->save();
        return redirect()->route('service_section');
    }

    public function construction () {
        return view('admin.service.construction');
    }
    public function financing () {
        return view('admin.service.financing');
    }
    public function home_buying () {
        return view('admin.service.home-buying-secction');
    }
    public function service_section_construction_store (Request $request) {
     
      $service = Service::create([
            'heading' => $request->heading_middle,
            'description' => $request->description_middle,
        ]);

            // Step 2: Store the first section data in ServiceConstruction
            $firstSection = $request->sections[0]; // first section array
            $imagePath = $firstSection['image']->store('images', 'public'); // save the image

            ServiceConstruction::create([
                'name' => $firstSection['heading'],
                'description' => $firstSection['description'],
                'image' => $imagePath, // store image path
                'service_id' => $service->id, // associate with service
            ]);

            // Step 3: Store the second section data in ServiceConstructionTwo
            $secondSection = $request->sections[1]; // second section array
            $imagePathTwo = $secondSection['image']->store('images', 'public'); // save the image

            ServiceConstructionTwo::create([
                'name' => $secondSection['heading'],
                'description' => $secondSection['description'],
                'image' => $imagePathTwo, // store image path
                'service_id' => $service->id, // associate with service
            ]);
        
            // Redirect with success message
            return redirect()->route('all-services')->with('success', 'Data has been stored successfully!');
            }
            public function service_section_financing_store (Request $request) {
            
                    $service = Service::create([
                            'heading' => $request->heading_middle,
                            'description' => $request->description_middle,
                        ]);
        
                    // Step 2: Store the first section data in ServiceConstruction
                    $firstSection = $request->sections[0]; // first section array
                    $imagePath = $firstSection['image']->store('images', 'public'); // save the image
        
                    ServiceConstruction::create([
                        'name' => $firstSection['heading'],
                        'description' => $firstSection['description'],
                        'image' => $imagePath, // store image path
                        'service_id' => $service->id, // associate with service
                    ]);
        
                    // Step 3: Store the second section data in ServiceConstructionTwo
                    $secondSection = $request->sections[1]; // second section array
                    $imagePathTwo = $secondSection['image']->store('images', 'public'); // save the image
        
                    ServiceConstructionTwo::create([
                        'name' => $secondSection['heading'],
                        'description' => $secondSection['description'],
                        'image' => $imagePathTwo, // store image path
                        'service_id' => $service->id, // associate with service
                    ]);
                
                    // Redirect with success message
                    return redirect()->route('all-services')->with('success', 'Data has been stored successfully!');
         }
    // test

         public function service_section_home_buying_store (Request $request) {
            
            $service = Service::create([
                    'heading' => $request->heading_middle,
                    'description' => $request->description_middle,
                    'editor1' => $request->editor1,
                    'editor2' => $request->editor2,
                    'editor3' => $request->editor3,
                ]);

            // Step 2: Store the first section data in ServiceConstruction
            $firstSection = $request->sections[0]; // first section array
            $imagePath = $firstSection['image']->store('images', 'public'); // save the image

            ServiceConstruction::create([
                'name' => $firstSection['heading'],
                'description' => $firstSection['description'],
                'image' => $imagePath, // store image path
                'service_id' => $service->id, // associate with service
            ]);

            // Step 3: Store the second section data in ServiceConstructionTwo
            $secondSection = $request->sections[1]; // second section array
            $imagePathTwo = $secondSection['image']->store('images', 'public'); // save the image

            ServiceConstructionTwo::create([
                'name' => $secondSection['heading'],
                'description' => $secondSection['description'],
                'image' => $imagePathTwo, // store image path
                'service_id' => $service->id, // associate with service
            ]);
        
            // Redirect with success message
            return redirect()->route('all-services')->with('success', 'Data has been stored successfully!');
 }

    public function servicce_construction_edit($id) {
        // Fetch the service and related sections
        $service = Service::with('serviceConstruction', 'serviceConstructionTwo')->findOrFail($id);

        return view('admin.service.construction_edit', compact('service'));
    }

    public function service_section_construction_update(Request $request, $id)
{
    // Step 1: Find the service record by ID
    $service = Service::findOrFail($id);

    // Step 2: Update the middle section data (heading and description)
    $service->update([
        'heading' => $request->heading_middle,
        'description' => $request->description_middle,
    ]);

    // Step 3: Update the first section (ServiceConstruction)
    foreach ($request->sections as $index => $section) {
        // Find the section based on index and service ID
        $serviceConstruction = ServiceConstruction::where('service_id', $service->id)->skip($index)->first();

        if ($serviceConstruction) {
            // If a new image is uploaded, save it
            if (isset($section['image'])) {
                // Delete the old image if exists
                if ($serviceConstruction->image) {
                    Storage::disk('public')->delete($serviceConstruction->image);
                }

                $imagePath = $section['image']->store('images', 'public');
                $serviceConstruction->image = $imagePath;
            }

            // Update the other fields
            $serviceConstruction->name = $section['heading'];
            $serviceConstruction->description = $section['description'];
            $serviceConstruction->save();
        } else {
            // If no record exists, create a new one (if you want to add a new section)
            if (isset($section['image'])) {
                $imagePath = $section['image']->store('images', 'public');
            } else {
                $imagePath = null;
            }

            ServiceConstruction::create([
                'name' => $section['heading'],
                'description' => $section['description'],
                'image' => $imagePath,
                'service_id' => $service->id,
            ]);
        }
    }

    // Step 4: Update the second section (ServiceConstructionTwo) similarly if necessary

    // Redirect with success message
    return redirect()->route('all-services')->with('success', 'Service updated successfully!');
}

}
