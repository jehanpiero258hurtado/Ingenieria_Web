<?php

namespace App\Http\Controllers\web\Administrador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Tipo_PagoController extends Controller
{
    public function index(){
        return view ('Administrador/Tipo_Pago/tipo_pago');
    }
}
