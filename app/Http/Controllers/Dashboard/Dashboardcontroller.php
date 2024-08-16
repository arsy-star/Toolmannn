<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class Dashboardcontroller extends Controller
{
    public function Dashboard(){
        return View('Dashboard.index');
    }


    public function Admin(){
        return view('Dashboard.Dashboard-admin.index');
    }
}
