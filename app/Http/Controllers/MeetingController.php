<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Meeting;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MeetingController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $meetings = Meeting::all();
    return view('meetings.index', compact('meetings'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
    return view('meetings.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $this->validate($request, [
      'what' => 'required|max:255',
      'who' => 'required|max:255',
      'where' => 'required|max:255',
      'when' => 'required|max:255',
      'why' => 'required|max:255'
    ]);

    $meeting = new Meeting;
    $meeting->what = $request->what;
    $meeting->who = $request->who;
    $meeting->when = $request->when;
    $meeting->where = $request->where;
    $meeting->why = $request->why;
    $meeting->how = $request->how;
    $meeting->description = $request->description;
    $meeting->user_id = Auth::user()->id;
    $meeting->save();
    // dd($request->all());

    //add new activity
    $activity = new Activity;
    $activity->category = 'Meeting';
    $activity->description = 'You created a Meeting';
    $activity->user_id = Auth::user()->id;
    $activity->save();

    // create meeting notifications
    $users = User::all('id');

    foreach ($users as $user) {
      Notification::create([
        'user_id' => $user->id,
        'title' => 'New Meeting',
        'description' => 'You have a new meeting',
        'table' => 'meetings',
        'table_id' => $meeting->id,
      ]);
    }

    return redirect('/create-meetings')->with('success', 'meeting created successful');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Meeting  $meeting
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //
    $meeting = Meeting::find($id);
    return view('meetings.show', compact('meeting'));
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Meeting  $meeting
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    //
    Meeting::find($id)->delete();
    //add new activity
    $activity = new Activity;
    $activity->category = 'Meeting';
    $activity->description = 'You deleted a Meeting';
    $activity->user_id = Auth::user()->id;
    $activity->save();

    return redirect()->back()->with('success', 'meeting successfully deleted');
  }
  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Meeting  $meeting
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    //
    // $meeting::find($meeting->id);
    $meeting = Meeting::find($id);
    return view('meetings.edit', compact('meeting'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Meeting  $meeting
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    //
    $meeting = Meeting::find($id);
    $meeting->fill($request->all());
    $meeting->save();

    $activity = new Activity;
    $activity->category = 'Meeting';
    $activity->description = 'You edited a Meeting';
    $activity->user_id = Auth::user()->id;
    $activity->save();

    return redirect('/create-meetings')->with('sucess', 'meeting successfully updated');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Meeting  $meeting
   * @return \Illuminate\Http\Response
   */
}
