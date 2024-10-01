<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login()
    {
        return view('index');        
    }

    public function auth(Request $request)
    {
        // $data = [
        //     'username' => $request->input('username'),
        //     'password' => $request->input('password'),
        // ];

        $data = $request->only('email', 'password');

        $user = User::where('email', $request->input('email'))->first();
        
        if (Auth::guard($user->role)->attempt($data)) {
            $request->session()->regenerate();
            return redirect('dashboard');
        }else{
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/');
        }
    }

    public function destroy()
    {
        Auth::logout();
        Session::flush();
        return redirect('/');
    }
}
    