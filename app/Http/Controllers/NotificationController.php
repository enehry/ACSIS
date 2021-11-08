<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
  //
  public function getNotificationCount()
  {
    $notifications = Auth::user()->unreadNotifications;
    return response()->json(['count' => $notifications->count()]);
  }

  public function index()
  {
    $notifications = Notification::with('user', 'meeting')
      ->where('user_id', '=', Auth::user()->id)
      ->where('is_viewed', '=', false)->orderBy('created_at', 'desc')->get();

    return view('notifications.index', compact('notifications'));
  }

  public function viewed($id)
  {
    $notification = Notification::find($id);
    $notification->is_viewed = true;
    $notification->save();
    return redirect()->back();
  }
}
