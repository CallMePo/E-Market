<?php

namespace App\Models;

use App\Models\statistikToko;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class toko extends Model
{
    protected $table = "toko";

    public function akun()
    {
    	return $this->belongsTo(akun::class);
    }

    public function barang()
    {
    	return $this->hasMany(barang::class);
    }

    public function pasar()
    {
    	return $this->belongsTo(pasar::class);
    }
    use HasFactory;
    public $timestamps = false;
    public function statistikToko()
    {
        return $this ->hasMany(statistikToko::class);
    }
}
