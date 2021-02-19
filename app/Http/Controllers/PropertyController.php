<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Unit;

class PropertyController extends Controller {
    public function index() {
        $properties = Property::all();
        foreach($properties as $property) {
            $available_units = Unit::where([
                ['property_id', '=', $property->id],
                ['tenant_id', '=', null]
            ])->count();
            $property->available_units = $available_units;
        }
        return view('manager/properties/all', [
            'properties' => $properties
        ]);
    }

    public function create() {
        return view('manager/properties/create');
    }

    public function edit($id) {
        return view('manager/properties/edit');
    }
}