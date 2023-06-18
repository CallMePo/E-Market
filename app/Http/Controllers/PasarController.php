<?php

namespace App\Http\Controllers;

use App\Models\toko;
use Illuminate\Http\Request;

class PasarController extends Controller
{
    public function CariPasar(Request $request) {


        if ($request->has('search')) {
            $pasars = toko::where('namaPasar', 'LIKE', '%' . $request->search . '%')->get();
        }else{
            $pasars = toko::all();
        }

        return view('cari-pasar-home', compact('pasars'));
    }
}
