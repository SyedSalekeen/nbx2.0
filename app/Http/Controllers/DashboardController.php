<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard() {
        return view('admin.dashboard');
    }
    public function home_page() {
        return view('admin.home_page');
    }
    public function services() {
        return view('admin.services');
    }
}
