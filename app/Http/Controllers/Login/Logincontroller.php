<?php

namespace App\Http\Controllers\Login;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Spatie\FlareClient\View;


class Logincontroller extends Controller
{
    public function Login(){
        return View('Login.index');
    }

    public function store(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        
       
 
        if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password,'role'=>'admin'])) {
            return redirect()->intended('dashboard_admin');
        } else if(Auth::guard('operator')->attempt(['email'=>$request->email,'password'=>$request->password,'role'=>'operator'])) {
            return redirect()->intended('dashboard_operator');
        } else if(Auth::guard('user')->attempt(['email'=>$request->email,'password'=>$request->password,'role'=>'user'])) {
            return redirect()->intended('dashboard_user');
        } else{
            return redirect('login')->with('salah kabeh');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');

}
   public function logout(){
    if(Auth::guard('admin')->check()){
        Auth::guard('admin')->logout();
    } else if(Auth::guard('operator')->check()){
        Auth::guard('operator')->logout();
    } else if(Auth::guard('user')->check()){
        Auth::guard('user')->logout();
    }

    return redirect(route('login'));
   }
}