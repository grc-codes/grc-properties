<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PropertyController extends Controller {
    public function index() {
        return view('manager/properties/all');
    }

    public function create() {
        return view('manager/properties/create');
    }

    public function edit($slug) {
        return view('manager/properties/edit');
    }
}