<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ctrlBienvenida extends Controller
{
    public function Bienvenidos()
    {
        return view('welcome');
    }
//hacer una suma en un metodo y que retorne una variablecon el resultado
    public function Suma()
    {
        return (8+8);
    }
    public function Datosuma($n1)
    {
        //obtener datos apartir de mi url,
        return ('Si funciona');
    }
    public function Datosuma2($n1,$n2)
    {
        return ('el resultado es '.$n1+$n2);
    }
    public function Datosuma3($n1,$n2)
    {
        $datos=$n1+$n2;
        $result = "el resultado es ".$datos;
        //mostrar datos en vista welcome con compact
        return view('welcome',compact('result'));
    }
}