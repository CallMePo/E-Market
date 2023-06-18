<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    public function CariBarang(Request $request) {


        if ($request->has('search')) {
            $barangs = Barang::where('namaBarang', 'LIKE', '%' . $request->search . '%')->get();
        }else{
            $barangs = Barang::all();
        }

        return view('cari-barang', compact('barangs'));
    }

    public function create()
    {
        return view('tambah-barang');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Barang::create([
            'namaBarang' => $request->namaBarang,
            'hargaBarang' => $request->hargaBarang,
            'deskripsiBarang' => $request->deskripsiBarang,
            'stokBarang' => $request->stokBarang,
            'status' => $request->status
        ]);

        return redirect()->back();
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('edit-barang');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $barang = Barang::find($id);

        if($barang) {
            $barang->namaBarang = $request->input('namaBarang');
            $barang->hargaBarang = $request->input('hargaBarang');
            $barang->deskripsiBarang = $request->input('deskripsiBarang');
            $barang->stokBarang = $request->input('stokBarang');
            $barang->status = $request->input('status');

            $barang->save();

            return redirect()->back();
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $barang = Barang::find($id);

        if ($barang) {
            $barang->delete();

            return redirect()->back();
        }
    }
    public function showListHargaBarang(){
        return view('informasihargabarang');
    }

    public function showDetailBarang(){
        return view('informasibarang');
    }
}
