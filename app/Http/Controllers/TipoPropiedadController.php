<?php

namespace App\Http\Controllers;

use App\Models\Tipo_Propiedad;
use Illuminate\Http\Request;

class TipoPropiedadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lista_t_propiedads = Tipo_Propiedad::all();
        $data = array("lista_t_propiedads" => $lista_t_propiedads);
        return response()->view("Administrador/Tipo_Propiedad/index",$data,200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lista_t_propiedads = Tipo_Propiedad::all();
        $data=array();
        return response()->view("Administrador/Tipo_Propiedad/create");
            
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
        $Pago=$request->input('Pago');
        $tipo_propiedad = new Tipo_Propiedad;
        $tipo_propiedad->Descripcion=$Descripcion;
        $tipo_propiedad->Pago=$Pago;
        $tipo_propiedad->save();
        return redirect('/Tipo_Propiedad');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tipo_Propiedad  $tipo_Propiedad
     * @return \Illuminate\Http\Response
     */
    public function show(Tipo_Propiedad $tipo_Propiedad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tipo_Propiedad  $tipo_Propiedad
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipo_propiedad = Tipo_Propiedad::find($id);
        return view('Administrador/Tipo_Propiedad.edit')->with('tipo_propiedad',$tipo_propiedad);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tipo_Propiedad  $tipo_Propiedad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tipo_propiedad = Tipo_Propiedad::find($id);
        $tipo_propiedad->Descripcion=$request->get('Descripcion');
        $tipo_propiedad->Pago=$request->get('Pago');
        $tipo_propiedad->save();
        return redirect('/Tipo_Propiedad');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tipo_Propiedad  $tipo_Propiedad
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipo_propiedad = Tipo_Propiedad::find($id);
        $tipo_propiedad->delete();
        return redirect('/Tipo_Propiedad');
    }
}
