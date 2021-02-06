<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResidentController extends Controller
{
    public function residentDash() {
        return view('/resident/dashboard');
    }

    public function residentRegister() {
        return view('/resident/register');
    }

    public function residentLogin() {
        return view('/resident/login');
    }
}
