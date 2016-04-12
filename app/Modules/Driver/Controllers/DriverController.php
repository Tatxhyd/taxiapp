<?php

namespace App\Modules\Driver\Controllers;


use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use App\Modules\Driver\Models\Driver;

class DriverController extends Controller
{
	use AuthenticatesAndRegistersUsers, ThrottlesLogins;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$drivers = Driver::all();
		return view('Driver::index')->withDrivers($drivers);
				//return view('Driver::test');
    }
}
