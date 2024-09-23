<?php

namespace App\Http\Controllers\Item;
use App\Http\Controllers\Controller;
use App\Models\Item;

use Illuminate\Http\Request;

class Itemcontroller extends Controller
{

    public function Read(){
        return view('Dashboard.Dashboard-user.read-item');
    }

    public function Readd(){
        return view('Dashboard.Dashboard-user.item-coba');
    }



    public function rea(){
        return view('Dashboard.Dashboard-admin.item-show');
    }




    public function index(){
        $items = Item::all();
        return view('Item.index',compact('items'));
    }

    


}
