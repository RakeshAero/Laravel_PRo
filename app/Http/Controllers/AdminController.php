<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;

use function PHPSTORM_META\type;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function admin(){

        return view('admin.admin');
    }

    public function usertable(){
        $users = User::where('type','!=', 'admin')->get();
        return view('admin.usertable',['users'=>$users]);
    }
}
