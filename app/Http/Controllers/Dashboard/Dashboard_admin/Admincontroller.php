<?php

namespace App\Http\Controllers\Dashboard\Dashboard_admin;
use App\Http\Controllers\Controller;
use App\Models\Admin;

use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    
    public function Admin(){
        return view('Dashboard.Dashboard-admin.index');
    }

    public function create(){
        return view('Dashboard.Dashboard-admin.create');
    }

    public function store(Request $request){




        $data = $request->validate([
            'nama'=>'required',
            'category'=>'required',
            'storage_rack'=>'required',
            'stok'=>'required',
            'jumlah'=>'required'

        ]);

       
        Admin::create([
            'nama' => $request->nama,
            'category' => $request->category,
            'storage_rack' => $request->storage_rack,
            'stok' => $request->stok,
            'jumlah' => $request->jumlah

            
        ]);

        

        return redirect()->route('dashboard_admin');

        

    }

    
}
