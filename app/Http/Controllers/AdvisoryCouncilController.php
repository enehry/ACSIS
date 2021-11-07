<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdvisoryCouncil;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdvisoryCouncilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return 'Request PULL';
        $stakeholders = DB::table('users')
            ->join('advisory_councils', 'users.id', '=', 'advisory_councils.user_id')
            ->select('users.*', 'advisory_councils.position', 'advisory_councils.other_title')
            ->get();
        // $advcons = AdvisoryCouncil::all();
        return view('advisory_council.index', compact('stakeholders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // return view('main.maintenance.advisoryCouncil');
        return view('advisory_council.create');
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
            return redirect(route('advisory-council.create'))->with('message', 'There is a problem in saving a user');
        }

        $adv = new AdvisoryCouncil();
        $adv->position = $request->position;
        $adv->other_title = $request->other_title;
        $adv->user_id = $user->id;

        $adv->save();


        return redirect(route('advisory-council.create'))->with('message', 'User successfully created');
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
        $adv = User::find($id)->advCouncil;
        $stk = User::find($id);
        return view('advisory_council.edit', compact('stk', 'adv'));
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
        AdvisoryCouncil::find($id)->delete();
        $user = User::find($id);
        $deleted = $user->delete();
        if (!$deleted) {
            return redirect()->back()->with('error', 'There is a problem delete a user');
        }

        return redirect()->back()->with('success', 'User successfully deleted');
    }
}
