<?php

namespace App\Http\Controllers;

use App\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class NotificationController extends Controller
{
    public function deleteNotification($notificationId, $paperId)
    {
        if(Session::get('username'))
        {
            $role = Session::get('role');

            if(strcmp($role, "User") == 0)
            {
                Notification::where('notification_id', '=', $notificationId)->delete();

                return redirect()->route('paper_detail', $paperId);
            }
            
            return redirect()->back();
        }

        return redirect()->route('start_page');
    }

}
