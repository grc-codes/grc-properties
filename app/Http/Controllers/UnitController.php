<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Unit;

class UnitController extends Controller {
    public function index() {
        $units = Unit::paginate(10);
        return view('manager/units/all', [
            'units' => $units
        ]);
    }
}