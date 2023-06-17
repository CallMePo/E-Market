<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuatTokoController extends Controller
{
    public function buattoko1(){
        return view('buattoko1');
    }

    public function buattoko2(){
        return view('buattoko2');
    }
    public function buattoko3(){
        return view('buattoko3');
    }

    public function buattokoPost(){
        $user = User();

        $user->namaToko = $request->namaToko;
        $user->bukaToko = $request->bukaToko;
        $user->tutupToko = $request->tutupToko;
        $user->letakPasar = $request->letakPasar;
        $user->lokasiPasar = $request->lokasiPasar;
        $user->save();
        return view('buattoko3');
    }
}

