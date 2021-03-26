<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tenant;
use App\Models\Unit;

class TenantController extends Controller {
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index() {
        $tenants = Tenant::paginate(10);
        return view('manager/tenants/all', [
            'tenants' => $tenants
        ]);
    }

    public function create() {
        $available_units = Unit::where('tenant_id', '=', null)->get();
        return view('manager/tenants/create', [
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

        // New Tenant
        $tenant = new Tenant;
        $tenant->first_name = request('first_name');
        $tenant->last_name = request('last_name');
        $tenant->email = request('email');
        $tenant->phone_number = request('phone_number');
        $tenant->monthly_salary = request('monthly_salary');
        $tenant->unit_id = Unit::where('apartment_num',request('unit'))->get('id')->first()->id;
        $tenant->apartment_num = request('unit');
        $tenant->save();

        // Add Tenant ID to Unit
        $tenant_id = Tenant::where('unit_id',$tenant->unit_id)->get('id')->first()->id;
        $unit = Unit::find($tenant->unit_id);
        $unit->tenant_id = $tenant_id;
        $unit->save();

        return redirect('/manager/tenants');
    }

    public function edit($id) {
        $tenant = Tenant::find($id);
        $available_units = Unit::where('tenant_id', '=', null)->get();
        $apartment_num = $tenant->unit_id;
        $apartment_num = Unit::find($apartment_num)->apartment_num;
        $tenant->apartment_num = $apartment_num;
        return view('manager/tenants/edit', [
            'tenant' => $tenant,
            'available_units' => $available_units
        ]);
    }

    public function update($id) {
        request()->validate([
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'email' => ['required', 'string'],
            'phone_number' => ['required', 'string'],
            'monthly_salary' => ['required', 'string'],
            'unit' => ['required']
        ]);

        $tenant = Tenant::find($id);
        $old_unit_id = $tenant->unit_id;

        // Update Tenant
        $tenant->first_name = request('first_name');
        $tenant->last_name = request('last_name');
        $tenant->email = request('email');
        $tenant->phone_number = request('phone_number');
        $tenant->monthly_salary = request('monthly_salary');
        $tenant->unit_id = Unit::where('apartment_num',request('unit'))->get('id')->first()->id;
        $tenant->save();

        // Update Units
        $tenant_id = Tenant::where('unit_id',$tenant->unit_id)->get('id')->first()->id;
        $unit = Unit::find($tenant->unit_id);
        $unit->tenant_id = $tenant_id;
        $unit->save();
        $old_unit = Unit::find($old_unit_id);
        $old_unit->tenant_id = null;
        $old_unit->save();

        return redirect('manager/tenants');
    }

    public function delete($id) {
        $tenant = Tenant::find($id);
        $tenant->delete();
        return redirect('/manager/tenants');
    }
}