<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EstatutoController extends Controller
{
    public function index(){
        return view ('Estatuto/Estatuto');
    }
}
