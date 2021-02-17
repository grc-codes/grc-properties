<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class StaticPagesController extends Controller
{
    public function home() {
        return view('start');
    }

    public function about() {
        return view('pages/about');
    }

    public function properties() {
        $properties = Property::all();
        return view('properties/all-properties', [
            'properties' => $properties
        ]);
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

    public function managerAccess() {
        return view('auth/login');
    }
}
