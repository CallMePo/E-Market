<?php

namespace App\Http\Controllers;

use App\Models\toko;
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

    public function showKontakToko(){
        return view('kontaktoko');
    }

    public function buattokoPost(Request $request){

        $validated = $request->validate([
            'fotoToko'=>'required |image',
            'namaToko'=>'required',
            'jamoperasiToko' =>'required',
            'kotaToko' =>'required',
            'lokasiToko' =>'required',
        ]);

       // dd($validated);

        $imagePath = $request->file('fotoToko')->store('fotoToko');
        $bukaToko = $request->input('jamoperasiToko');
        $namaToko = $request->input('namaToko');
        $letakPasar =$request->input('kotaToko');
        $lokasiToko =$request->input('lokasiToko');
        $pasar_id =$request->input('pasar_id');
        $akun_id =$request->input('akun_id');

        $toko = new Toko();
$toko->fotoToko = $imagePath;
$toko->jamoperasiToko = $bukaToko;
$toko->namaToko = $namaToko;
$toko->kotaToko = $letakPasar;
$toko->lokasiToko = $lokasiToko;
$toko->pasar_id = $pasar_id;
$toko->akun_id = $akun_id;

$toko->save();

//dd($toko);


        return redirect()->back()->with('success','jos');
        // $toko = new Toko();

        // $toko->namaToko = $request->namaToko;
        // $toko->bukaToko = $request->bukaToko;
        // $toko->tutupToko = $request->tutupToko;
        // $toko->letakPasar = $request->letakPasar;
        // $toko->lokasiPasar = $request->lokasiPasar;
        // $toko->save();
        // return view('buattoko3');
    }
    public function index(){

        $toko = DB::table('toko')->get();
        return view('index',['toko'=> $toko] );
    }
    public function CariToko(Request $request) {


        if ($request->has('search')) {
            $tokos = toko::where('namaToko', 'LIKE', '%' . $request->search . '%')->get();
        }else{
            $tokos = toko::all();
        }

        return view('cari-toko-2', compact('tokos'));
    }

    public function showDetailToko($id)  {
        $toko = toko::find($id);
        return view('informasi-toko', compact('toko'));
    }
}

