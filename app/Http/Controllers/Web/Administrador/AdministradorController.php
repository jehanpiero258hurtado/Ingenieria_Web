<?php

namespace App\Http\Controllers\web\Administrador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    public function index(){
        return view ('Administrador/administrador');
    }
}
