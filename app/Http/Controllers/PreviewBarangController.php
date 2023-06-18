<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\toko;
use App\Models\barang;
use App\Models\pasar;


class PreviewBarangController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function view($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        // $barang = DB::table('barang')->where('id', $id)->get();
        $barang = barang::find($id);
        $toko = $barang->toko;
        $tokoid = $toko->id;
        $namaBarang = $barang->namaBarang;
        $hargaBarang = $barang->hargaBarang;
        $deskripsiBarang = $barang->deskripsiBarang;
        $idBarang = $barang->id;
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('previewbarang', compact('tokoid', 'namaBarang', 'hargaBarang', 'deskripsiBarang', 'idBarang'));
    }
}
