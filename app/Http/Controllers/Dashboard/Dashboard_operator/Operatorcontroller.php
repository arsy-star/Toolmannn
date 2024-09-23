<?php

namespace App\Http\Controllers\Dashboard\Dashboard_operator;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class Operatorcontroller extends Controller
{
    public function Operator() {
        return view('Dashboard.Dashboard_operator.index');
    }
}
