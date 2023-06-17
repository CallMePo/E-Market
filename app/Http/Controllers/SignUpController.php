<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class SignUpController extends Controller{
    /**
     * Show the update profile page.
     *
     * @param  Request $request
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function register(){

    	return view('signup');

    }
    /*public function submit(){
        $nama = $request->input('nama');
     	$email = $request->input('email');
        $password = $request->input('password');
        return "Nama : ".$nama.", Email : ".$email.", Password : ".$password;
    }*/
    public function registerPost(Request $request){
        $user = new User();
        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return back('signup');
    }

}
