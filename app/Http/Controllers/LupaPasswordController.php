<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\akun;
use Illuminate\Http\Request;
use App\Mail\ForgotPasswordMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class LupaPasswordController extends Controller
{
    //controller forgotpassword//
    public function forgotpassword(){
        return view('auth.forgotpassword');
    }

    public function PostForgotPassword(Request $request)
    {
        $akun = akun::getEmailSingle($request->emailAkun);
        if(!empty($akun))
        {
            $akun->remember_token = Str::random(30);
            $akun->save();

            Mail::to($akun->emailAkun)->send(new ForgotPasswordMail($akun));

            return redirect()->back()->with('success', "Cek Inbox Email Anda");
        }
        else
        {
            return redirect()->back()->with('error', "Email Tidak Ditemukan");
        }
    }

    public function reset($remember_token){
        $akun = akun::getTokenSingle($remember_token);
        if(!empty($akun)){
            $data['akun'] = $akun;
            return view('auth.resetpassword', $data);
        }
        else
        {
            abort(404);
        }
    }

    public function PostReset($token, Request $request)
    {
        if($request->passwordAkun == $request->cpassword)
        {
            $akun = akun::getTokenSingle($token);
            $akun->passwordAkun = Hash::make($request->passwordAkun);
            $akun->remember_token = Str::random(30);
            $akun->save();

            return redirect(url('signin'))->with('success', "Password Sucessfully reset");
        }
        else
        {
            return redirect()->back()->with('error', "Password dan Konfirmasi Password tidak sama");
        }
    }


}


