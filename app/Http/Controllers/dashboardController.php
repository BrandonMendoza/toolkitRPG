<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    function initDashboard(){
    	return view('dashboard');
    }
}
