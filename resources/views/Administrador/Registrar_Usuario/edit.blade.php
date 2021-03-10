@extends('layouts.plantillabase')

@section('contenido')
<h2 class="referencia">Editar Usuario</h2>
<div class="formulario">

<form action="/Usuario/{{$usuario->id}}" method="POST">
    @csrf    
    @method('PUT')
    <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="Nombre" name="Nombre" type="checked" class="form-control" value="{{$usuario->Nombre}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Apellido_Paterno</label>
    <input id="Apellido_Paterno" name="Apellido_Paterno" type="checked" class="form-control" value="{{$usuario->Apelldo_Paterno}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Apellido_Materno</label>
    <input id="Apellido_Materno" name="Apellido_Materno" type="Text" class="form-control" value="{{$usuario->Apellido_Materno}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Edad</label>
    <input id="Edad" name="Edad" type="Text" class="form-control" value="{{$usuario->Edad}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Tipo De Documento</label>
    <select  id="Tipo_Documento" name="Tipo_Documento" value="{{$usuario->Tipo_Documento}}">
      @foreach($lista_t_documentos as $item)
      <option value="{{ $item->id}}">{{$item->Descripcion}}</option>
      @endforeach
    </select>    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Numero De Documento</label>
    <input id="Numero_Documento" name="Numero_Documento" type="Text" class="form-control" value="{{$usuario->Numero_Documento}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Direccion</label>
    <input id="Direccion" name="Direccion" type="Text" class="form-control" value="{{$usuario->Direccion}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Celular</label>
    <input id="Celular" name="Celular" type="Text" class="form-control" value="{{$usuario->Celular}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Gestion</label>
    <input id="Gestion" name="Gestion" type="Text" class="form-control" value="{{$usuario->Gestion}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Contraseña</label>
    <input id="Contrasena" name="Contrasena" type="password" class="form-control" value="{{$usuario->Contrasena}}">    
  </div>
  <a href="/Usuario" class="btn btn-secondary" style="color:#FFF;font-size:15px;font-weight: bold;">Cancelar</a>
  <button type="submit" class="btn btn-primary" style="color:#FFF;font-size:15px;font-weight: bold;">Guardar</button>

</form>
</div>

@endsection