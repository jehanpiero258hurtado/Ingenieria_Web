<?php

namespace App\Http\Controllers\web\Administrador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistarUsuarioController extends Controller
{
    public function index(){
        return view ('Administrador/Registrar_Usuario/registrar_usuario');
    }
}
