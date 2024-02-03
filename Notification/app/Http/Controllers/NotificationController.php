<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Notifications\UserFollowNotification;
use Illuminate\Support\Facades\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index(){
        $user = User::first();
        Notification::send('AppNotification', new UserFollowNotification());
        dd('Notification envoyée');
    }
}
