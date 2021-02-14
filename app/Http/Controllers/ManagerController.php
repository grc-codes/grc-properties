<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerController extends Controller
{
    // public function __construct() {
    //     $this->middleware('auth');
    // }
    
    public function dashboard() {
        return view('/manager/dashboard');
    }

    public function register() {
        return view('/manager/register');
    }

    public function login() {
        return view('/manager/login');
    }
}
