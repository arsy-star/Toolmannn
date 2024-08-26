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

    public function inndex(){
        return view('Dashboard.Dashboard-user.input-form');
    }

    public function create($id){
        $item = item::findOrFail($id);
        return view('Dashboard.Dashboard-user.create', compact('item'));
    }

    public function store(Request $request){
        $Data = $request->validate([
            'tanggal_peminjaman'=>'required',
            'tanggal_pengembalian'=>'required',
            'jumlah'=>'required',
           
        ]);

        borrowing::create([
            'tanggal_peminjaman'=> $request->tanggal_peminjaman,
            'tanggal_pengembalian'=> $request->tanggal_pengembalian,
            'jumlah'=> $request->jumlah,
        ]);

        return redirect()->route('dashboard_admin');
    }

    
}
