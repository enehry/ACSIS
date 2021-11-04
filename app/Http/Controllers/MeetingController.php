<?php

namespace App\Http\Controllers;

use App\Models\Meeting;
use Illuminate\Http\Request;

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
        return view('meetings.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        // $who = $request->input('who');
        // $what = $request->input('what');
        // $where = $request->input('where');
        // $when = $request->input('when');
        // $why = $request->input('why');
        // $how = $request->input('how');
        // $data = array('who' => $who, "what" => $what, "where" => $where, "when" => $when, "why" => $why, "how" => $how);
        // // MeetingController::table('student_details')->insert($data);
        // return redirect('/create-meetings')->with('success', 'Contact saved!');
        // echo "Record inserted successfully.<br/>";
        // echo '<a href = "/create-meetings">Click Here</a> to go back.';
        $this->validate($request, [
            'what' => 'required|max:255',
            'who' => 'required|max:255',
            'where' => 'required|max:255',
            'when' => 'required|max:255',
            'why' => 'required|max:255'
        ]);

        $input = $request->all();
        Meeting::create($input);
        return redirect('/create-meetings');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Meeting  $meeting
     * @return \Illuminate\Http\Response
     */
    public function show(Meeting $meeting)
    {
        //
        // return view('meetings.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Meeting  $meeting
     * @return \Illuminate\Http\Response
     */
    public function edit(Meeting $meeting)
    {
        //
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
    }
}
