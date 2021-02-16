<?php

namespace App\Http\Controllers\web\Administrador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagoController extends Controller
{
    public function index(){
        return view ('Administrador/Pago/pago');
    }
}
