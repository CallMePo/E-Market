<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class SignOutController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    //controller logout//
    public function logout(){
        Auth::logout();
        return redirect()->route('signin');
    }
}
