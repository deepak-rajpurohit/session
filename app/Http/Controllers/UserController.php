<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    // function login(Request $request){
    //     $request->session()->put('user',$request->input('user'));
    //     $request->session()->put('allData',$request->input());
    //     // echo session('user');
    //     return redirect('profile');
    // }

    // function logout(){
    //     session()->pull('user');
    //     return redirect('profile');
    // }

    function addUser(Request $request){
       session()->flash('message','New User added successfully');
        return view('user');
    }
}
