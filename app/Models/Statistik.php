<?php

namespace App\Models;

use App\Models\Pasar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Statistik extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function pasar()
    {
        return $this->belongsTo(Pasar::class);
    }
}
