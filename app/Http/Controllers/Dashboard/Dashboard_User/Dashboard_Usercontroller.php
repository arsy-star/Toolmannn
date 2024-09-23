<?php

namespace App\Http\Controllers\Dashboard\Dashboard_User;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class Dashboard_Usercontroller extends Controller
{
    public function User(){
        return view('Dashboard.Dashboard-user.index');
    }
}
