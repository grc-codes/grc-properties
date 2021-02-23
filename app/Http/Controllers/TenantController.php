<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tenant;
use App\Models\Unit;

class TenantController extends Controller {
    public function index() {
        $tenants = Tenant::all();
        foreach($tenants as $tenant) {
            $unit_num = $tenant->unit_id;
            $unit_prefix = Unit::find($unit_num)->unit_prefix;
            $tenant->apartment_num = $unit_prefix . '-' . $unit_num;
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