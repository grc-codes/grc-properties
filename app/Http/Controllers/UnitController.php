<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UnitController extends Controller {
    public function index() {
        return view('manager/units/all');
    }

    public function available() {
        return view('manager/units/all');
    }
}