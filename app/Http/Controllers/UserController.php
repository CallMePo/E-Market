<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function pengaturanAkun($id)
    {
        $user = User::find($id);
        return view('pengaturan-akun', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        if($user) {
            $user->nama = $request->input('nama');
            $user->email = $request->input('email');
            $user->password = $request->input('password');
            $user->nomor_hp = $request->input('nomor_hp');

            $user->save();

            return redirect()->back();
        }
    }
}
