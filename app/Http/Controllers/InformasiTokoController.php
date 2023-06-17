<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformasiTokoController extends Controller
{
    public function melihatInfoToko (){
        return view('informasitoko');
    }
}
