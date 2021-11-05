<?php

namespace App\Http\Controllers;

use App\Models\Meeting;
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
        //
        //display of table(data)
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
        $meeting->user_id = Auth::id();
        $meeting->save();

        // $input = $request->all();
        // Meeting::create($input);
        return redirect('/create-meetings');
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Meeting  $meeting
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
        // $meeting::find($meeting->id);
        $meetings = Meeting::all();
        return view('meetings.edit', compact('meetings'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Meeting  $meeting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Meeting $meeting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Meeting  $meeting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meeting $meeting)
    {
        //
        $meeting->delete();
        return redirect('/meetings');
    }
}
