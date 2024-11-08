<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index() {
        return view('website.index');
    }
    public function construction() {
        return view('website.construction');
    }
    public function financing() {
        return view('website.financing');
    }
    public function home_buying() {
        return view('website.home-buying-and-selling');
    }
    public function home_rehab () {
        return view('website.home-rehab');
    }
    public function wholesale () {
        return view('website.wholesale');
    }
    public function property_management () {
        return view('website.propertyManagement');
    }
    public function case_studies () {
        return view('website.CASE_STUDY.caseStudy');
    }
    public function case_studies_detail () {
        return view('website.CASE_STUDY.details');
    }


}
