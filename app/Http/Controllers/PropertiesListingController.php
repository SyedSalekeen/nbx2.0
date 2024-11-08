<?php

namespace App\Http\Controllers;

use App\Models\PropertiesListing;
use App\Models\PropertiesListingValues;
use App\Models\PropertyManagement;
use Illuminate\Http\Request;

class PropertiesListingController extends Controller
{
    public function index()
    {
        $properties = PropertiesListing::with( 'properties_values')->get();
        // dd($properties);
        return view('admin.property_listing.index', get_defined_vars());
    }

    public function create()
    {
        $properties = PropertyManagement::where("status", "1")->get();
        return view('admin.property_listing.create', get_defined_vars());
    }

    public function store(Request $request)
    {

       
        $store = new PropertiesListing();
        $store->hero_heading = $request->hero_heading;
        $store->sequence = $request->sequence;
        $store->optional_message_start = $request->optional_message_start;
        $store->optional_message_end = $request->optional_message_end;
        if($request->hasFile('uploadCover')) {
            $cover_imageName = random_int(100000, 999999) . '.' . $request->uploadCover->extension();
            $request->uploadCover->move(public_path('property_managment_listing'), $cover_imageName);
            $store->cover_image = $cover_imageName;
        }
        $store->save();


        $update = PropertiesListing::find($store->id);
        $update->url = "https://stagifi.com/nbxcapitalinvestment/property_listing/".$store->id;
        $update->save();

        // foreach ($request->links as $key => $link) {
        //     $storeValues = new PropertiesListingValues();
        //     $storeValues->properties_listing_id = $store->id;
        //     $storeValues->heading = $request->headings[$key];
        //     $storeValues->description = $request->descriptions[$key];
        //     // dd($link);
        //     if($link == null) {
        //         $imageName = random_int(100000, 999999) . '.' . $request->images_old[$key]->extension();
        //         $request->images_old[$key]->move(public_path('property_managment_listing'), $imageName);
        //         $storeValues->image = $imageName;
        //         $storeValues->image_type = "image";
        //     } else {
        //         $storeValues->image = $link;
        //         $storeValues->image_type = "link";
        //     }
        //     $storeValues->save();
        // }




        foreach ($request->links as $key => $link) {
            $storeValues = new PropertiesListingValues();
            $storeValues->properties_listing_id = $store->id;
         $storeValues->heading = $request->headings[$key];
            $storeValues->description = $request->descriptions[$key];


            // Check if both link and image are present
            if ($link != null && isset($request->images_old[$key]) && $request->images_old[$key] != null) {
                // Handle both link and image
                $storeValues->link = $link;
                $imageName = random_int(100000, 999999) . '.' . $request->images_old[$key]->extension();
                $request->images_old[$key]->move(public_path('property_managment_listing'), $imageName);
                $storeValues->image = $imageName;



                $storeValues->image_type = "link_with_image";
            } elseif ($link != null) {
                // Only link is present
                $storeValues->link = $link;
                $storeValues->image_type = "link";
            } elseif (isset($request->images_old[$key]) && $request->images_old[$key] != null && $request->images_old[$key]->isValid()) {
                // Only image is present
                $imageName = random_int(100000, 999999) . '.' . $request->images_old[$key]->extension();
                $request->images_old[$key]->move(public_path('property_managment_listing'), $imageName);
                $storeValues->image = $imageName;
                $storeValues->image_type = "image";
            }

            // Check if PDF is present
            if (isset($request->pdf_old[$key]) && $request->pdf_old[$key] != null && $request->pdf_old[$key]->isValid()) {
                // Move and store the PDF
                $pdfName = random_int(100000, 999999) . '.' . $request->pdf_old[$key]->extension();
                $request->pdf_old[$key]->move(public_path('property_managment_listing'), $pdfName);
                $storeValues->pdf = $pdfName;
                $storeValues->image_type = "pdf";
            }

            $storeValues->save();
        }

        return redirect('properties-listing');
    }

    public function edit($id)
    {

        $properties = PropertiesListing::where('id', $id)->with('properties_values')->first();
        // dd($properties);
        $dataCatArray = json_decode($properties->sequence, true);
        // dd($dataCatArray);
        return view('admin.property_listing.edit', get_defined_vars());

    }

    public function delete($id) {
        PropertiesListing::find($id)->delete();
        PropertiesListingValues::where('properties_listing_id',$id)->delete();
        return redirect('properties-listing');

    }

    public function update(Request $request, $id) {
   
        // dd($request->all());
        $store =  PropertiesListing::find($id);
        $store->hero_heading = $request->hero_heading;
        $store->optional_message_start = $request->optional_message_start;
        $store->optional_message_end = $request->optional_message_end;
          if($request->hasFile('uploadCover')) {
            $cover_imageName = random_int(100000, 999999) . '.' . $request->uploadCover->extension();
            $request->uploadCover->move(public_path('property_managment_listing'), $cover_imageName);
            $store->cover_image = $cover_imageName;
        }
        $store->sequence = $request->sequence;
        if($request->featured) {
            $store->featured = $request->featured;

        } else {
            $store->featured = "0";

        }
        $store->save();

        $update = PropertiesListingValues::where("properties_listing_id", $id)->get();
        // dd($update);
        foreach($update as $key1 => $update1) {
            $find = PropertiesListingValues::find($update1->id);
            $find->heading = $request->headings_old[$key1];
            $find->description = $request->descriptions_old[$key1];
            if($request->links_old[$key1] == null) {
                if ($request->hasFile('images_old.' . $key1)) {
                    $imageName = random_int(100000, 999999) . '.' . $request->images_old[$key1]->extension();
                    $request->images_old[$key1]->move(public_path('property_managment_listing'), $imageName);
                    $find->image = $imageName;
                    $find->image_type = "image";

                }

                if ($request->hasFile('pdf_old.' . $key1)) {
                    $imageName = random_int(100000, 999999) . '.' . $request->pdf_old[$key1]->extension();
                    $request->pdf_old[$key1]->move(public_path('property_managment_listing'), $imageName);
                    $find->image = $imageName;
                    $find->image_type = "pdf";

                }
            } else {
                $find->link = $request->links_old[$key1];
                $find->image_type = "link";
            }
            $find->save();
        }
        if($request->images) {




        foreach ($request->links as $key => $link) {



            // dd($request->images[$key]->extension());
            $storeValues = new PropertiesListingValues();
            $storeValues->heading = $request->headings[$key];
            $storeValues->description = $request->descriptions[$key];
            $storeValues->properties_listing_id = $id;

            // Check if both link and image are present
            if ($link != null && isset($request->images[$key]) && $request->images[$key] != null) {
                // Handle both link and image
                $storeValues->link = $link;
                $imageName = random_int(100000, 999999) . '.' . $request->images[$key]->extension();
                $request->images[$key]->move(public_path('property_managment_listing'), $imageName);
                $storeValues->image = $imageName;



                $storeValues->image_type = "link_with_image";
            } elseif ($link != null) {
                // Only link is present
                $storeValues->link = $link;
                $storeValues->image_type = "link";
            } elseif (isset($request->images[$key]) && $request->images[$key] != null && $request->images[$key]->isValid()) {
                // Only image is present
                $imageName = random_int(100000, 999999) . '.' . $request->images[$key]->extension();
                $request->images[$key]->move(public_path('property_managment_listing'), $imageName);
                $storeValues->image = $imageName;
                $storeValues->image_type = "image";
            }

            // Check if PDF is present
            if (isset($request->pdf[$key]) && $request->pdf[$key] != null && $request->pdf[$key]->isValid()) {
                // Move and store the PDF
                $pdfName = random_int(100000, 999999) . '.' . $request->pdf[$key]->extension();
                $request->pdf[$key]->move(public_path('property_managment_listing'), $pdfName);
                $storeValues->pdf = $pdfName;
                $storeValues->image_type = "pdf";
            }
            $storeValues->save();
        }
       

    }
        return redirect('properties-listing');


    }
    public function preview($id) {
        $properties = PropertiesListing::where('id', $id)->with('properties_values')->first();
        // dd($properties);
        $dataCatArray = json_decode($properties->sequence, true);
        // dd($dataCatArray);
        return view('admin.property_listing.preview', get_defined_vars());
    }
    }
