<?php

namespace App\Http\Controllers;

use App\Models\TechWrkGrp;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TechWrkGrpController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    //
    $stakeholders = DB::table('users')
      ->where('role', '=', 'stakeholder')
      ->join('tech_wrk_grps', 'users.id', '=', 'tech_wrk_grps.user_id')
      ->select('users.*', 'tech_wrk_grps.position', 'tech_wrk_grps.sector', 'tech_wrk_grps.other_title')
      ->get();

    return view('tech_wrk_grp.index', compact('stakeholders'));
  }



  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
    return view('tech_wrk_grp.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    //
    $request->validate([
      'email' => 'email|required|unique:users',
      'role' => 'required',
      'position' => 'required',
      'sector' => 'required',
      'lname' =>  'required|max:100',
      'fname' =>  'required|max:100',
      'sex' => 'required',
      'password' => 'required|min:6|confirmed',
      'street' => 'required',
      'brgy' => 'required',
      'city' => 'required',
      'province' => 'required',
      'bday' => 'required',
    ]);

    // create user account
    $user = new User();
    $user->fname = $request->fname;
    $user->lname = $request->lname;
    $user->mname = $request->mname;
    $user->bday = $request->bday;
    $user->sex = $request->sex;
    $user->street = $request->street;
    $user->brgy = $request->brgy;
    $user->city = $request->city;
    $user->province = $request->province;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    $user->role = $request->role;
    $user->email_verified_at = Carbon::now();

    if (!$user->save()) {
      return redirect(route('twg.create'))->with('message', 'There is a problem in saving a user');
    }

    $tch = new TechWrkGrp();
    $tch->position = $request->position;
    $tch->sector = $request->sector;
    $tch->other_title = $request->other_title;
    $tch->user_id = $user->id;

    $tch->save();


    return redirect(route('twg.create'))->with('message', 'User successfully created');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    //
    $tch = User::find($id)->tchWrkGrp;
    $stk = User::find($id);

    return view('tech_wrk_grp.edit', compact('stk', 'tch'));
    // return response()->json($stk);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    //
    $request->validate([
      'role' => 'required',
      'position' => 'required',
      'sector' => 'required',
      'lname' =>  'required|max:100',
      'fname' =>  'required|max:100',
      'sex' => 'required',
      'password' =>  $request->password ? 'required|min:6|confirmed' : '',
      'street' => 'required',
      'brgy' => 'required',
      'city' => 'required',
      'province' => 'required',
      'bday' => 'required',
    ]);

    $user = User::find($id);
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
      $user->password = Hash::make($request->password);
    }
    $user->role = $request->role;

    if (!$user->save()) {
      return redirect()->back()->with('error', 'There is a problem updating a user');
    }

    $tch = TechWrkGrp::where('user_id', '=', $user->id)->first();
    $tch->position = $request->position;
    $tch->sector = $request->sector;
    $tch->other_title = $request->other_title;

    $tch->save();

    return redirect()->back()->with('success', 'User successfully updated');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    //
    $user = User::find($id);
    $deleted = $user->delete();
    if (!$deleted) {
      return redirect()->back()->with('error', 'There is a problem delete a user');
    }

    return redirect()->back()->with('success', 'User successfully deleted');
  }
}
