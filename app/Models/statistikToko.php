<?php

namespace App\Models;
use App\Models\toko;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class statistikToko extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function toko()
    {
        return $this->belongsTo(toko::class);
    }
}
