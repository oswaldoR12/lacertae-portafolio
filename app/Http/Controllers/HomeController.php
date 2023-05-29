<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\EmergencyCallReceived;

class HomeController extends Controller
{
    public function home()
    {
        return view('home2');
    }
    public function home2()
    {
        return view('home2');
    }
     public function newuser()
    {
        $prueba['nombres'] = 'os';
        $prueba['apellidos'] = 'rivas';
        $administracion = 'oswaldo.r.profesional@gmail.com';
        Mail::to($administracion)->send(new EmergencyCallReceived($prueba));
        return "@asd";
    }
}
