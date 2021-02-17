<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;
use App\Models\Message;
use App\Models\Application;

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
        $subscriptions = Subscription::all();
        return view('/manager/messages/email-list', [
            'subscriptions' => $subscriptions
        ]);
    }

    public function siteMessages() {
        $messages = Message::all();
        return view('/manager/messages/messages', [
            'messages' => $messages
        ]);
    }

    public function siteMessage($id) {
        $message = Message::where('id', '=', $id)->first();
        return view('/manager/messages/message', [
            'message' => $message 
        ]);
    }

    public function rentalApps() {
        $applications = Application::all();
        return view('/manager/messages/rental-applications', [
            'applications' => $applications
        ]);
    }

    public function rentalApp($id) {
        $application = Application::where('id', '=', $id)->first();
        return view('/manager/messages/rental-application', [
            'application' => $application
        ]);
    }
}
