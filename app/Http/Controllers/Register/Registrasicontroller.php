<?php

namespace App\Http\Controllers\Register;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\FlareClient\View;
use Illuminate\Support\Facades\Hash;

class Registrasicontroller extends Controller
{
    public function Regis(){
        return View('Registrasi.index');
    }

    public function store(Request $request){
        $data = $request->validate([
            'username'=>'required',
            'email'=>'required',
            'password'=>'required',
            'Role'=>'required'

        ]);

        


        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => hash::make($request->password),
            'Role' => $request->Role,

            
        ]);

        return redirect('/login');

        

    }   
}
