<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller {
    public function index() {
        $properties = Property::all();
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