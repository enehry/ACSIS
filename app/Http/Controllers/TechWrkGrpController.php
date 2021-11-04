<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
    $stakeholders = User::where('role', '=', "stakeholder")->get();


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
      'email' => 'email|required',
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

    return redirect(route('twg.create'))->withInput();;
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
  }
}
