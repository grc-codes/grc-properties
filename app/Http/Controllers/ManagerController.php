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

    public function emailList() {
        return view('/manager/messages/email-list');
    }

    public function siteMessages() {
        return view('/manager/messages/messages');
    }

    public function siteMessage() {
        return view('/manager/messages/message');
    }

    public function rentalApps() {
        return view('/manager/messages/rental-applications');
    }

    public function rentalApp() {
        return view('/manager/messages/rental-application');
    }
}
