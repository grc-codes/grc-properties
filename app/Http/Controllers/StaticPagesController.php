<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Unit;
use App\Models\Message;
use App\Models\Subscription;
use App\Models\Application;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

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

        // New Subscriber
        $subscriber = new Subscription;
        $subscriber->name = request('name');
        $subscriber->email = request('email');
        $subscriber->save();

        return redirect('/thank-you#thank-you');
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
        $units = Unit::where('property_id', '=', $property->id);
        $available_units = $units->where('tenant_id', '=', null)->paginate(10);
        
        return view('properties/single-property', [
            'property' => $property,
            'units' => $available_units
        ]);
    }

    public function rentalApplication() {
        $available_units = Unit::where('tenant_id', '=', null)->get();
        return view('pages/rental-application', [
            'available_units' => $available_units
        ]);
    }

    public function storeRentalApp() {
        request()->validate([
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'email' => ['required', 'string'],
            'phone_number' => ['required', 'string'],
            'monthly_salary' => ['required'],
            'preferred_unit' => ['required']
        ]);

        // New Application
        $application = new Application;
        $application->first_name = request('first_name');
        $application->last_name = request('last_name');
        $application->email = request('email');
        $application->phone_number = request('phone_number');
        $application->monthly_salary = request('monthly_salary');
        $application->preferred_unit = request('preferred_unit');
        $application->save();


        return redirect('/rental-application/thank-you');
    }

    public function rentalAppThankYou() {
        return view('pages/application-thank-you');
    }

    public function contact() {
        return view('pages/contact');
    }

    public function storeMessage() {
        request()->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'string'],
            'phone_number' => ['required', 'string'],
            'how_did_you_hear' => ['required'],
            'moving_date' => ['required'],
            'budget' => ['required'],
            'rooms' => ['required'],
            'pets' => ['required'],
            'building' => ['required'],
            'tour' => ['required'],
            'comments' => ['required', 'string']
        ]);

        // New Message
        $message = new Message;
        $message->name = request('name');
        $message->email = request('email');
        $message->phone_number = request('phone_number');
        $message->how_did_you_hear = request('how_did_you_hear');
        $message->moving_date = request('moving_date');
        $message->budget = request('budget');
        $message->rooms = request('rooms');
        $message->pets = request('pets');
        $message->building = request('building');
        $message->tour = request('tour');
        $message->comments = request('comments');
        $message->save();

        return redirect('/contact/thank-you');
    }

    public function messageThankYou() {
        return view('pages/message-thank-you');
    }

    public function managerAccess() {
        return view('auth/login');
    }
}
