<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Tipo_Documento;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lista_t_documentos = Tipo_Documento::all();
        $lista_usuarios = Usuario::all();
        $data = array("lista_usuarios" => $lista_usuarios);
        return View('Administrador/Registrar_Usuario/index', ['lista_usuarios' => $lista_usuarios])->with(['lista_t_documentos'=>$lista_t_documentos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lista_t_documentos = Tipo_Documento::all();
        $data=array();
        return View('Administrador/Registrar_Usuario.create', ['lista_t_documentos'=>$lista_t_documentos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Nombre=$request->input('Nombre');
        $Apellido_Paterno=$request->input('Apellido_Paterno');
        $Apellido_Materno=$request->input('Apellido_Materno');
        $Edad=$request->input('Edad');
        $Tipo_Documento=$request->input('Tipo_Documento');
        $Numero_Documento=$request->input('Numero_Documento');
        $Direccion=$request->input('Direccion');
        $Celular=$request->input('Celular');
        $Gestion=$request->input('Gestion');
        $Contrasena=$request->input('Contrasena');
        $usuario = new Usuario;
        $usuario->Nombre=$Nombre;
        $usuario->Apellido_Paterno=$Apellido_Paterno;
        $usuario->Apellido_Materno=$Apellido_Materno;
        $usuario->Edad=$Edad;
        $usuario->Tipo_Documento=$Tipo_Documento;
        $usuario->Numero_Documento=$Numero_Documento;
        $usuario->Direccion=$Direccion;
        $usuario->Celular=$Celular;
        $usuario->Gestion=$Gestion;
        $usuario->Contrasena=$Contrasena;
        $usuario->save();
        return redirect('/Usuario');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lista_t_documentos = Tipo_Documento::all();
        $usuario = Usuario::find($id);
        return View('Administrador/Registrar_Usuario.edit', ['lista_t_documentos' => $lista_t_documentos])->with(['usuario'=>$usuario]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $usuario = Usuario::find($id);
        $usuario->Nombre=$request->get('Nombre');
        $usuario->Apellido_Paterno=$request->get('Apellido_Paterno');
        $usuario->Apellido_Materno=$request->get('Apellido_Materno');
        $usuario->Edad=$request->get('Edad');
        $usuario->Tipo_Documento=$request->get('Tipo_Documento');
        $usuario->Numero_Documento=$request->get('Numero_Documento');
        $usuario->Direccion=$request->get('Direccion');
        $usuario->Celular=$request->get('Celular');
        $usuario->Gestion=$request->get('Gestion');
        $usuario->Contrasena=$request->get('Contrasena');
        $usuario->save();
        return redirect('/Usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();
        return redirect('/Usuario');
    }
}
