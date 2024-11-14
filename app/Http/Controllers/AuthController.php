<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest')->except([
            'logout', 'dashboard'
        ]);
    }
    public function login(){
        session()->flash('success', 'You have successfully Logged in');
        return view('auth.login');
    }
    public function register(){
        return view('auth.register');
    }
    public function home(){
        return view('home');
    }
    public function service(){
        return view('auth.service');
    }
    public function dashboard(){
        if(Auth::check()){

            return view('auth.dashboard');
        }

        return redirect()->route('login')->withErrors([
            'email'=>'Please Login to Access the Dashboard'
        ])->onlyInput('email');
    }
    public function store(Request $request){

        $request->validate([
            'name'=>'required|string|max:250',
            'email'=>'required|email|max:250|unique:users',
            'password'=>'required|min:8|confirmed'
        ]);

        User::create([
            'username'=>$request->name,
            'email'=>$request->email,
            'password'=> Hash::make($request->password),
        ]);

        $credentials = $request->only('email','password');
        Auth::attempt($credentials);
        $request->session()->regenerate();
        return redirect('dashboard')->withSuccess("You Successfully Registered");
    }


    public function authenticate(Request $request){
        $credentials =  $request->validate([
                            'email'=>'required|email',
                            'password'=>'required'
                        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->route('dashboard')->withSuccess("You Successfully Logged In !");
        }

        return back()->withErrors(['email'=>'Credentials does not Match !'])->onlyInput('email');
    }


    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->withSuccess('You Have Successfully Logged Out !');
    }
}

// $user  = new User();
// $user->username = $request->input('name');
// $user->email = $request->input('email');
// $user->password = $request->input('password');
