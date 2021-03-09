<?php

namespace App\Http\Controllers;

use App\Models\Tipo_Pago;
use Illuminate\Http\Request;

class TipoPagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lista_t_pagos = Tipo_Pago::all();
        $data = array("lista_t_pagos" => $lista_t_pagos);
        return response()->view("Administrador/Tipo_Pago/index",$data,200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=array();
        return response()->view("Administrador/Tipo_Pago/create", $data,200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Descripcion=$request->input('Descripcion');
        $tipo_Pago = new Tipo_Pago;
        $tipo_Pago->Descripcion=$Descripcion;
        $tipo_Pago->save();
        return redirect('/Tipo_Pago');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tipo_Pago  $tipo_Pago
     * @return \Illuminate\Http\Response
     */
    public function show(Tipo_Pago $tipo_Pago)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tipo_Pago  $tipo_Pago
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipo_pago = Tipo_Pago::find($id);
        return view('Administrador/Tipo_Pago.edit')->with('tipo_pago',$tipo_pago);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tipo_Pago  $tipo_Pago
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $tipo_pago = Tipo_Pago::find($id);
        $tipo_pago->Descripcion=$request->get('Descripcion');
        $tipo_pago->save();
        return redirect('/Tipo_Pago');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tipo_Pago  $tipo_Pago
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipo_pago= Tipo_Pago::find($id);
        $tipo_pago->delete();
        return redirect('/Tipo_Pago');
    }
}
