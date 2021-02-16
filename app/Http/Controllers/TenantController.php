<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TenantController extends Controller {
    public function index() {
        return view('manager/tenants/all');
    }

    public function create() {
        return view('manager/tenants/create');
    }

    public function edit($slug) {
        return view('manager/tenants/edit');
    }
}