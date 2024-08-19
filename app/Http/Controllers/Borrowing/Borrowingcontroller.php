<?php

namespace App\Http\Controllers\borrowing;
use App\Http\Controllers\Controller;
use App\Models\borrowing;
use App\Models\Item;

use Illuminate\Http\Request;

class Borrowingcontroller extends Controller
{
    public function index(){
        return view('Dashboard.Dashboard-user.create');
    }

    public function create($id){
        $item = item::findOrFail($id);
        return view('peminjaman.create', compact('item'));
    }
}
