<?php

namespace App\Http\Controllers;

use App\Models\Pago;
use App\Models\Propiedad;
use Illuminate\Http\Request;

class PagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lista_propiedads = Propiedad::all();
        $lista_pagos = Pago::all();
        $data = array("lista_pagos" => $lista_pagos);
        return View('Administrador/Pago/index', ['lista_propiedads' => $lista_propiedads])->with(['lista_pagos'=>$lista_pagos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lista_propiedads = Propiedad::all();
        $data=array();
        return View('Administrador/Pago/create', ['lista_propiedads' => $lista_propiedads]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Manzana=$request->input('Manzana');
        $Lote=$request->input('Lote');
        $Fecha_Inicio=$request->input('Fecha_Inicio');
        $Fecha_Fin=$request->input('Fecha_Fin');
        $Fecha_Vencimiento=$request->input('Fecha_Vencimiento');
        $Monto=$request->input('Monto');
        $Estado=$request->input('Estado');
        $pago = new Pago;
        $pago->Manzana=$Manzana;
        $pago->Lote=$Lote;
        $pago->Fecha_Inicio=$Fecha_Inicio;
        $pago->Fecha_Fin=$Fecha_Fin;
        $pago->Fecha_Vencimiento=$Fecha_Vencimiento;
        $pago->Monto=$Monto;
        $pago->Estado=$Estado;
        $pago->save();
        return redirect('/Pago');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function show(Pago $pago)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lista_propiedads = Propiedad::all();
        $pago = Pago::find($id);
        return View('Administrador/Pago/edit', ['lista_propiedads' => $lista_propiedads])->with('pago',$pago);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $pago = Pago::find($id);
        $pago->Manzana=$request->get('Manzana');
        $pago->Lote=$request->get('Lote');
        $pago->Fecha_Inicio=$request->get('Fecha_Inicio');
        $pago->Fecha_Fin=$request->get('Fecha_Fin');
        $pago->Fecha_Vencimiento=$request->get('Fecha_Vencimiento');
        $pago->Monto=$request->get('Monto');
        $pago->Estado=$request->get('Estado');
        $pago->save();
        return redirect('/Pago');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pago = Pago::find($id);
        $pago->delete();
        return redirect('/Pago');
    }
}
