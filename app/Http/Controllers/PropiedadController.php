<?php

namespace App\Http\Controllers;

use App\Models\Propiedad;
use App\Models\Tipo_Documento;
use App\Models\Tipo_Propiedad;
use Illuminate\Http\Request;

class PropiedadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lista_t_datos = Tipo_Propiedad::all();
        $lista_t_documentos = Tipo_Documento::all();
        $lista_propiedads = Propiedad::all();
        $data = array("lista_propiedads" => $lista_propiedads);
        return View('Administrador/Registrar_Propiedad/index', ['lista_t_datos' => $lista_t_datos])->with(['lista_t_documentos'=>$lista_t_documentos])->with(['lista_propiedads'=>$lista_propiedads]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lista_t_datos = Tipo_Propiedad::all();
        $lista_t_documentos = Tipo_Documento::all();
        $data=array();
        return View('Administrador/Registrar_Propiedad/create', ['lista_t_datos' => $lista_t_datos])->with(['lista_t_documentos'=>$lista_t_documentos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Propietario=$request->input('Propietario');
        $Tipo_Documento_id=$request->input('Tipo_Documento_id');
        $Numero_Documento=$request->input('Numero_Documento');
        $Celular=$request->input('Celular');
        $Manzana=$request->input('Manzana');
        $Lote=$request->input('Lote');
        $Numero_Suministro=$request->input('Numero_Suministro');
        $Tipo_Propiedad_id=$request->input('Tipo_Propiedad_id');
        $Fecha_Inscripcion=$request->input('Fecha_Inscripcion');
        $Pago_Mensual=$request->input('Pago_Mensual');
        $Pago_Reconeccion=$request->input('Pago_Reconeccion');
        $Estado=$request->input('Estado');
        $propiedad = new Propiedad;
        $propiedad->Propietario=$Propietario;
        $propiedad->Tipo_Documento_id=$Tipo_Documento_id;
        $propiedad->Numero_Documento=$Numero_Documento;
        $propiedad->Celular=$Celular;
        $propiedad->Manzana=$Manzana;
        $propiedad->Lote=$Lote;
        $propiedad->Numero_Suministro=$Numero_Suministro;
        $propiedad->Tipo_Propiedad_id=$Tipo_Propiedad_id;
        $propiedad->Fecha_Inscripcion=$Fecha_Inscripcion;
        $propiedad->Pago_Mensual=$Pago_Mensual;
        $propiedad->Pago_Reconeccion=$Pago_Reconeccion;
        $propiedad->Estado=$Estado;
        $propiedad->save();
        return redirect('/Propiedad');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Propiedad  $propiedad
     * @return \Illuminate\Http\Response
     */
    public function show(Propiedad $propiedad)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Propiedad  $propiedad
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lista_t_datos = Tipo_Propiedad::all();
        $lista_t_documentos = Tipo_Documento::all();
        $propiedad = Propiedad::find($id);
        return View('Administrador/Registrar_Propiedad.edit', ['lista_t_datos' => $lista_t_datos])->with(['lista_t_documentos'=>$lista_t_documentos])->with(['propiedad'=>$propiedad]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Propiedad  $propiedad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $propiedad = Propiedad::find($id);
        $propiedad->Propietario=$request->get('Propietario');
        $propiedad->Tipo_Documento_id=$request->get('Tipo_Documento_id');
        $propiedad->Numero_Documento=$request->get('Numero_Documento');
        $propiedad->Celular=$request->get('Celular');
        $propiedad->Manzana=$request->get('Manzana');
        $propiedad->Lote=$request->get('Lote');
        $propiedad->Numero_Suministro=$request->get('Numero_Suministro');
        $propiedad->Tipo_Propiedad_id=$request->get('Tipo_Propiedad_id');
        $propiedad->Fecha_Inscripcion=$request->get('Fecha_Inscripcion');
        $propiedad->Pago_Mensual=$request->get('Pago_Mensual');
        $propiedad->Pago_Reconeccion=$request->get('Pago_Reconeccion');
        $propiedad->Estado=$request->get('Estado');
        $propiedad->save();
        return redirect('/Propiedad');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Propiedad  $propiedad
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $propiedad = Propiedad::find($id);
        $propiedad->delete();
        return redirect('/Propiedad');
    }
}
