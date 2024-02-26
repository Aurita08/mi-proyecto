<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function inicio($nombre,$apellido){
        //return view ('clases',['nom' => $nombre,'apellido' => $apellido]);
        return view('clases',compact('nombre','apellido'));
    }

    public function show($nombre,$seccion=null){
        if($seccion!=null){
            return "Pagina de clases: "."NOMBRE:".$nombre."  SECCION: ".$seccion;
        }else{
            return "pagina de clases: ".$nombre;
        }
    }
}
