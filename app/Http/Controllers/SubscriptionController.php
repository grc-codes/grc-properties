<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscription;
use App\Models\Unit;

class SubscriptionController extends Controller {
    public function index() {
        $subscriptions = Subscription::paginate(10);
        return view('manager/messages/email-list', [
            'subscriptions' => $subscriptions
        ]);
    }

    public function create() {
        $available_units = Unit::where('subscription_id', '=', null)->get();
        return view('manager/subscriptions/create', [
            'available_units' => $available_units
        ]);
    }

    public function store() {
        request()->validate([
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'email' => ['required', 'string'],
            'phone_number' => ['required', 'string'],
            'monthly_salary' => ['required', 'string'],
            'unit' => ['required']
        ]);

        // New subscription
        $subscription = new subscription;
        $subscription->first_name = request('first_name');
        $subscription->last_name = request('last_name');
        $subscription->email = request('email');
        $subscription->phone_number = request('phone_number');
        $subscription->monthly_salary = request('monthly_salary');
        $subscription->unit_id = Unit::where('apartment_num',request('unit'))->get('id')->first()->id;
        $subscription->save();

        // Add subscription ID to Unit
        $subscription_id = subscription::where('unit_id',$subscription->unit_id)->get('id')->first()->id;
        $unit = Unit::find($subscription->unit_id);
        $unit->subscription_id = $subscription_id;
        $unit->save();

        return redirect('/manager/subscriptions');
    }

    public function delete($id) {
        $subscription = subscription::find($id);
        $subscription->delete();
        return redirect('/manager/subscriptions');
    }
}