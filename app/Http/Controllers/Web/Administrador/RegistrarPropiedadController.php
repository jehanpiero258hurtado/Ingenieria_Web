<?php

namespace App\Http\Controllers\web\Administrador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistarPropiedadController extends Controller
{
    public function index(){
        return view ('Administrador/Registrar_Propiedad/registrar_propiedad');
    }
}
