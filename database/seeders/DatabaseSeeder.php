<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Barang;
use App\Models\Pasar;
use App\Models\Statistik;
use App\Models\statistikToko;
use App\Models\toko;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Pasar::create([
            'namaPasar' => 'Pasar Keputih',
            'lokasiPasar' => 'Keputih'

        ]);
        Pasar::create([
            'namaPasar' => 'Pasar Wonokromo',
            'lokasiPasar' => 'Wonokromo'

        ]);
        Pasar::create([
            'namaPasar' => 'Pasar Senen',
            'lokasiPasar' => 'Jakarta'
        ]);
        Statistik::create([
            'pasar_id' => 3,
            'JumlahKlikToko' => 9,
            'JumlahKlikBarang' => 15,
            'JumlahKlikKontakToko' => 20,
            'BulanStatistik' => '2022-10-01',
            'TotalKlik' => 90
        ]);
        Statistik::create([
            'pasar_id' => 2,
            'JumlahKlikToko' => 6,
            'JumlahKlikBarang' => 20,
            'JumlahKlikKontakToko' => 1,
            'BulanStatistik' => '2022-10-01',
            'TotalKlik' => 50
        ]);
        Statistik::create([
            'pasar_id' => 1,
            'JumlahKlikToko' => 25,
            'JumlahKlikBarang' => 30,
            'JumlahKlikKontakToko' => 49,
            'BulanStatistik' => '2022-10-01',
            'TotalKlik' => 60
        ]);
        statistikToko::create([
            'toko_id' => 1,
            'JumlahKlikToko' => 28,
            'JumlahKlikBarang' => 36,
            'JumlahKlikKontakToko' => 47,
            'BulanStatistik' => '2022-10-01',
            'TotalKlik' => 65
        ]);
        statistikToko::create([
            'toko_id' => 2,
            'JumlahKlikToko' => 24,
            'JumlahKlikBarang' => 49,
            'JumlahKlikKontakToko' => 69,
            'BulanStatistik' => '2022-10-01',
            'TotalKlik' => 83
        ]);
        statistikToko::create([
            'toko_id' => 3,
            'JumlahKlikToko' => 13,
            'JumlahKlikBarang' => 60,
            'JumlahKlikKontakToko' => 48,
            'BulanStatistik' => '2022-10-01',
            'TotalKlik' => 70
        ]);
        toko::create([
            'namaToko' => 'Toko Jaya',
            'jamOperasiToko' => "19.00 - 02.00",
            'kontakToko' => '082215662266',
            'lokasiToko' => 'Pasar Senen',
            'ukuranToko' => '8x8 M',
            'hargaToko' => '6000000',
            'kotaToko' => 'Jakarta'
        ]);
        toko::create([
            'namaToko' => 'Toko Adi Mulya',
            'jamOperasiToko' => "20.00 - 04.00",
            'kontakToko' => '082215897266',
            'lokasiToko' => 'Pasar Keputih',
            'ukuranToko' => '8x8 M',
            'hargaToko' => '6000000',
            'kotaToko' => 'Jakarta'
        ]);
        toko::create([
            'namaToko' => 'Toko Aman Sentosa',
            'jamOperasiToko' => "21.00 - 08.00",
            'kontakToko' => '082253192266',
            'lokasiToko' => 'Pasar Wonokromo',
            'ukuranToko' => '8x8 M',
            'hargaToko' => '6000000',
            'kotaToko' => 'Jakarta'
        ]);

        toko::create([
            'namaToko' => 'Toko Laris Manis',
            'jamOperasiToko' => "22.00 - 08.00",
            'kontakToko' => '082253175266',
            'lokasiToko' => 'Pasar Keputih',
            'ukuranToko' => '8x8 M',
            'hargaToko' => '8000000',
            'kotaToko' => 'Surabaya'
        ]);
        
        Barang::create([
            'namaBarang' => 'Cabai Merah',
            'hargaBarang' => '18.000',
            'deskripsiBarang' => 'Cabai Merah Segar langsung dipetik dari kebunnya. Monggo dibeli',
            'stokBarang'=>'25',
            'status'=>true,
        ]);

        Barang::create([
            'namaBarang' => 'Cabai Keriting',
            'hargaBarang' => '26.000',
            'deskripsiBarang' => 'Cabai Keriting Segar langsung dipetik dari kebunnya. Monggo dibeli',
            'stokBarang'=>'30',
            'status'=>true,
        ]);

        Barang::create([
            'namaBarang' => 'Kentang',
            'hargaBarang' => '8.000',
            'deskripsiBarang' => 'Kentang Segar langsung dipetik dari kebunnya. Monggo dibeli',
            'stokBarang'=>'40',
            'status'=>true,
        ]);

        Barang::create([
            'namaBarang' => 'Brokoli',
            'hargaBarang' => '5.000',
            'deskripsiBarang' => 'Brokoli Segar langsung dipetik dari kebunnya. Monggo dibeli',
            'stokBarang'=>'36',
            'status'=>true,
        ]);
    }
}
