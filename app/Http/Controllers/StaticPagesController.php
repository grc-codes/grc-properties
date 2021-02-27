<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Unit;
use App\Models\Subscription;

class StaticPagesController extends Controller
{
    public function home() {
        return view('start');
    }

    public function subThankYou() {
        return view('pages/sub-thank-you');
    }

    public function storeSubscriber() {
        request()->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'string']
        ]);

        // New Subscription
        $subscription = new Subscription;
        $subscription->name = request('name');
        $subscription->email = request('email');
        $subscription->save();

        return redict('/thank-you');
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
    
    public function singleProperty($slug) {
        $property = Property::where('name', '=', $slug)->first();
        $units = Unit::where('property_id', '=', $property->id)->get();
        return view('properties/single-property', [
            'property' => $property,
            'units' => $units
        ]);
    }

    public function rentalApplication() {
        $available_units = Unit::where('tenant_id', '=', null)->get();
        return view('pages/rental-application', [
            'available_units' => $available_units
        ]);
    }

    public function contact() {
        return view('pages/contact');
    }

    public function managerAccess() {
        return view('auth/login');
    }
}
