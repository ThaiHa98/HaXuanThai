<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function  showLoginForm(){
        return view('login.login');
    }
    public function login(Request $request)
    {
//        $name = $request ->input('name');
//        $password = $request->input('password');
//        $user = \DB::table('users')
//                    ->where('name',$name)
//                    ->first();
//        if ($user && password_verify($password,$user->password )){
//            session(['user'=>$user]);
//            return redirect('user');
//        }else{
//            return back()->with('error', 'Invalid credentials. Please try again.');
//        }
        $credentials = $request->only('name', 'password');
        if (Auth::attempt($credentials)) {
//            dd('dang nhap thanh cong ');
            return redirect()->route('user.dashboard');
        }else{
            dd('dang nhap that bai ');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
