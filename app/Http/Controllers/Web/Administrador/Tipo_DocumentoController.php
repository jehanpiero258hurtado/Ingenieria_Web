<?php

namespace App\Http\Controllers\web\Administrador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Tipo_DocumentoController extends Controller
{
    public function index(){
        return view ('Administrador/Tipo_Documento/tipo_documento');
    }
}
