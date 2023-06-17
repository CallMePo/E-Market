<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TokoController extends Controller
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
        $toko = new Toko();

        $toko->namaToko = $request->namaToko;
        $toko->bukaToko = $request->bukaToko;
        $toko->tutupToko = $request->tutupToko;
        $toko->letakPasar = $request->letakPasar;
        $toko->lokasiPasar = $request->lokasiPasar;
        $toko->save();
        return view('buattoko3');
    }
    public function index(){

        $toko = DB::table('toko')->get();
        return view('index',['toko'=> $toko] );
    }
}

