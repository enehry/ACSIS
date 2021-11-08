<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
  //
  public function getNotificationCount()
  {
    $notifications = auth()->user()->unreadNotifications;
    return response()->json(['count' => $notifications->count()]);
  }
}
