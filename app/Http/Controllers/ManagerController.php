<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function managerDash() {
        return view('/manager/dashboard');
    }

    public function managerRegister() {
        return view('/manager/register');
    }

    public function managerLogin() {
        return view('/manager/login');
    }
}
