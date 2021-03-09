<?php

namespace App\Http\Controllers;

use App\Models\Tipo_Documento;
use Illuminate\Http\Request;

class TipoDocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lista_t_documentos = Tipo_Documento::all();
        $data = array("lista_t_documentos" => $lista_t_documentos);
        return response()->view("Administrador/Tipo_Documento/index",$data,200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=array();
        return response()->view("Administrador/Tipo_Documento/create", $data,200);
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
        $tipo_documento = new Tipo_Documento;
        $tipo_documento->Descripcion=$Descripcion;
        $tipo_documento->save();
        return redirect('/Tipo_Documento');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tipo_Documento  $tipo_Documento
     * @return \Illuminate\Http\Response
     */
    public function show(Tipo_Documento $tipo_Documento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tipo_Documento  $tipo_Documento
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipo_documento = Tipo_Documento::find($id);
        return view('Administrador/Tipo_Documento.edit')->with('tipo_documento',$tipo_documento);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tipo_Documento  $tipo_Documento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tipo_documento = Tipo_Documento::find($id);
        $tipo_documento->Descripcion=$request->get('Descripcion');
        $tipo_documento->save();
        return redirect('/Tipo_Documento');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tipo_Documento  $tipo_Documento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipo_documento = Tipo_Documento::find($id);
        $tipo_documento->delete();
        return redirect('/Tipo_Documento');
    }
}
