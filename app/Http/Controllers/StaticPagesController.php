<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home() {
        return view('start');
    }

    public function about() {
        return view('pages/about');
    }

    public function properties() {
        return view('properties/all-properties');
    }
    
    public function singleProperty($propName) {
        return view('properties/single-property', [
            'propName' => ucfirst($propName)
        ]);
    }

    public function rentalApplication() {
        return view('pages/rental-application');
    }

    public function contact() {
        return view('pages/contact');
    }

    public function residentAccess() {
        return view('auth/login');
    }
}
