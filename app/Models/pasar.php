<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pasar extends Model
{
    protected $table = "pasar";

    public function toko()
    {
    	return $this->hasMany(toko::class);
    }

}
