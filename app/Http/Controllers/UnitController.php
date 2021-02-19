<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Unit;

class UnitController extends Controller {
    public function index() {
        $units = Unit::all();
        return view('manager/units/all', [
            'units' => $units
        ]);
    }

    public function available() {
        $available_units = Unit::where('tenant_id', '=', null)->get();
        return view('manager/units/available', [
            'available_units' => $available_units
        ]);
    }
}