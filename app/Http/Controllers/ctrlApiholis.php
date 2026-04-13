<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Facades\Http;

class ctrlApiholis extends Controller
{
    public function AccesoDatosVistaApi()
    {
        $link = Http::get('https://holisss.mundoiti.com');
        $trjson = $link->json();

        Return view('vistaDatosApi')->with(compact('trjson'));

    }
}
