<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Facades\Http;

class ctrlDatos extends Controller
{
/*    public function AccesoDatosVista()
    {
        $pro = product::all();
        Return view('vistadatos')->with(compact('pro'));
    }*/
    public function AccesoDatosVistaLink()
    {
        $enlace = Http::get('https://jsonplaceholder.typicode.com/posts');
        $tradjson = $enlace->json();

        Return view('vistaDatosLink')->with(compact('tradjson'));

    }
}
