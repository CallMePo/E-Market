<?php

namespace App\Http\Controllers;

use App\Models\Pasar;
use App\Models\toko;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class statistikController extends Controller
{
    public function statistikaPasar($id)
    {
        $pasar = Pasar::find($id);
        $statistik = $pasar->Statistik;
        $nama = $pasar->namaPasar;
        $klikToko = $statistik->pluck('JumlahKlikToko')->implode(', ');
        $klikBarang = $statistik->pluck('JumlahKlikBarang')->implode(', ');
        $klikKontakToko = $statistik->pluck('JumlahKlikKontakToko')->implode(', ');
        $totalKlik = $statistik->pluck('TotalKlik')->implode(', ');
        
        return view('statistik-pasar',compact('nama', 'klikToko', 'klikBarang','klikKontakToko', 'totalKlik'));
    }
    
    public function statistikaToko($id)
    {
        $toko = toko::find($id);
        $statistik = $toko->statistikToko;
        $namatoko = $toko->namaToko;
        $klikToko = $statistik->pluck('JumlahKlikToko')->implode(', ');
        $klikBarang = $statistik->pluck('JumlahKlikBarang')->implode(', ');
        $klikKontakToko = $statistik->pluck('JumlahKlikKontakToko')->implode(', ');
        $totalKlik = $statistik->pluck('TotalKlik')->implode(', ');
        return view('statistik-toko',compact('namatoko', 'klikToko', 'klikBarang', 'klikKontakToko', 'totalKlik') );
    }
    
}
