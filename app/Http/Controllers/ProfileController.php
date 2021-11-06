<?php

namespace App\Http\Controllers;

use App\Models\PoliceStratMngUnit;
use App\Models\TechWrkGrp;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
  //
  public function index()
  {

    $user = Auth::user();
    $id = $user->id;
    if ($user->psmu) {
      $user = User::with('psmu')->find($id);
    } else if ($user->tchWrkGrp) {
      $user = User::with('tchWrkGrp')->find($id);
    }

    return view('profile.index', compact('user'));
  }

  public function saveProfile(Request $request)
  {


    $request->validate([
      'avatar' => 'image|mimes:jpeg,png,jpg|max:2048',
      'lname' =>  'required|max:100',
      'fname' =>  'required|max:100',
      'sex' => 'required',
      'street' => 'required',
      'brgy' => 'required',
      'city' => 'required',
      'province' => 'required',
      'bday' => 'required',
      'password' =>  $request->password ? 'required|min:6|confirmed' : '',
    ]);

    // create user account
    $user = User::find(Auth::user()->id);

    if ($request->hasFile('avatar')) {
      $file_name = time() . '_' . $request->avatar->getClientOriginalName();
      $file_path = $request->file('avatar')->storeAs('uploads/avatars', $file_name, 'public');

      $user->avatar = '/storage/' . $file_path;
    }

    $user->fname = $request->fname;
    $user->lname = $request->lname;
    $user->mname = $request->mname;
    $user->bday = $request->bday;
    $user->sex = $request->sex;
    $user->street = $request->street;
    $user->brgy = $request->brgy;
    $user->city = $request->city;
    $user->province = $request->province;
    if ($request->password) {
      if (Hash::check($request->old_password, $user->password)) {
        $user->password = Hash::make($request->password);
      } else {
        return redirect()->back()->with('error', 'Old password do not match');
      }
    }


    if (!$user->save()) {
      return redirect()->back()->with('error', 'There is a problem in saving a user');
    }

    return redirect()->back()->with('success', 'Profile successfully updated');
  }
}
