<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;
use App\Models\Message;
use App\Models\Application;
use App\Models\Unit;
use App\Models\Tenant;
use App\Models\Property;

class ManagerController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function dashboard() {
        $monthly_revenue = 0;
        $tenants = Tenant::all();
        foreach($tenants as $tenant) {
            $unit_rent = Unit::where('id','=',$tenant->unit_id)->first()->rent_price;
            $monthly_revenue = $monthly_revenue + $unit_rent;
        }
        $all_units = Unit::all()->count();
        $occupied_units = Unit::where('tenant_id','!=',null)->count();
        $vacant_units = Unit::where('tenant_id','=',null)->count();
        $occupancy_rate = $occupied_units / $all_units;
        $vacancy_rate = $vacant_units / $all_units;

        return view('/manager/dashboard', [
            'monthly_revenue' => $monthly_revenue,
            'occupancy_rate' => $occupancy_rate,
            'vacancy_rate' => $vacancy_rate
        ]);
    }

    public function estimatedTotalRevenue() {
        $tenants= Tenant::all();
        $monthly_revenue = 0;
        foreach($tenants as $tenant) {
            $unit_rent = Unit::where('id','=',$tenant->unit_id)->first()->rent_price;
            $monthly_revenue = $monthly_revenue + $unit_rent;
        }
        $total_revenue = [];
        foreach(range(0,5) as $idx) {
            $revenue = $monthly_revenue * ($idx + 1);
            array_push($total_revenue, $revenue);
        }
        return $total_revenue;
    }

    public function revenueByProperty() {
        $revenue_by_property = [];
        $properties = Property::all();
        $tenants = Tenant::all();
        foreach($properties as $property) {
            $units_in_property = Unit::where('property_id','=',$property->id)->get();
            $tenants_in_property = $units_in_property->where('tenant_id','!=',null);
            $revenue = 0;
            foreach($tenants_in_property as $tenant) {
                $revenue = $revenue + $tenant->rent_price;
            }
            array_push($revenue_by_property,[$property->name, $revenue]);
        }
        return $revenue_by_property;
    }

    public function register() {
        return view('/manager/register');
    }

    public function login() {
        return view('/manager/login');
    }

    public function showSubscriptions() {
        $subscriptions = Subscription::paginate(5);
        return view('/manager/messages/email-list', [
            'subscriptions' => $subscriptions
        ]);
    }

    public function deleteSubscription($id) {
        $subscription = Subscription::find($id);
        $subscription->delete();
        return redirect('/manager/email-list');
    }

    public function siteMessages() {
        $messages = Message::paginate(10);
        return view('/manager/messages/messages', [
            'messages' => $messages
        ]);
    }

    public function siteMessage($id) {
        $message = Message::where('id', '=', $id)->first();
        return view('/manager/messages/message', [
            'message' => $message 
        ]);
    }

    public function rentalApps() {
        $applications = Application::paginate(5);
        return view('/manager/messages/rental-applications', [
            'applications' => $applications
        ]);
    }

    public function newTenant($id) {
        $application = Application::find($id);
        $available_units = Unit::where('tenant_id', '=', null)->get();
        return view('manager/tenants/create-from-application', [
            'application' => $application,
            'available_units' => $available_units
        ]);
    }
}
