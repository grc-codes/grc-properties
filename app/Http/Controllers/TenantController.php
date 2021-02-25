<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tenant;
use App\Models\Unit;

class TenantController extends Controller {
    public function index() {
        $tenants = Tenant::paginate(10);
        foreach($tenants as $tenant) {
            $apartment_num = $tenant->unit_id;
            $apartment_num = Unit::find($apartment_num)->apartment_num;
            $tenant->apartment_num = $apartment_num . '-' . $apartment_num;
        }
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

    public function edit($slug) {
        return view('manager/tenants/edit');
    }
}