<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth'); //['auth' , 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('main.dash');
    }

    public function advisorlist()
    {
        return view('main.advisorlist');
    }

    public function addadvisor()
    {
        return view('main.addadvisor');
    }

    public function stakeholderinfo()
    {
        return view('main.stakeholderinfo');
    }

    public function stakeholderprofile()
    {
        return view('main.stakeholderprofile');
    }

    public function notification()
    {
        return view('main.notification');
    }

    public function maintenance()
    {
        return view('main.maintenance');
    }

    public function admin()
    {
        return view('main.admin');
    }

    public function editacc()
    {
        return view('main.editacc');
    }

    /* Maintenance */

    public function advisoryCouncil()
    {
        // return view('main.maintenance.advisoryCouncil');
    }

    public function technicalWorkingGroup()
    {
        return view('main.maintenance.technicalWorkingGroup');
    }

    public function policeStrategyManagementUnit()
    {
        return view('main.maintenance.policeStrategyManagementUnit');
    }

    public function superadminMaintenance()
    {
        return view('main.maintenance.superadminMaintenance');
    }

    public function addOffice()
    {
        return view('main.maintenance.addOffice');
    }

    /* Activity */

    public function balancedScorecardManagement()
    {
        return view('main.activity.balancedScorecardManagement');
    }

    public function activity()
    {
        return view('main.activity.activity');
    }

    public function createmeeting()
    {
        return view('main.activity.createmeeting');
    }

    public function AClogin()
    {
        return view('login.loginac');
    }

    public function PSMUlogin()
    {
        return view('login.loginps');
    }

    public function TWGlogin()
    {
        return view('login.logintwg');
    }
}
