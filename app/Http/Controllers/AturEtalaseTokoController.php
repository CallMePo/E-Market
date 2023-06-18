<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use App\Models\toko;
use App\Models\barang;
use App\Models\pasar;

class AturEtalaseTokoController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function pick($id)
    {
        $toko = toko::find($id);
        $barang = $toko->barang;
        $namaToko = $toko->namaToko;
        $idToko = $toko->id;


        return view('aturetalasetoko',compact('namaToko', 'barang', 'idToko'));

    }
}
