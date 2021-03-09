@extends('layouts.plantillabase')

@section('contenido')
<h2>CREAR REGISTROS</h2>
<form action="/Usuario" method="POST">
@csrf
<div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="Nombre" name="Nombre" type="checked" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Apellido_Paterno</label>
    <input id="Apellido_Paterno" name="Apellido_Paterno" type="Text" class="form-control"tabindex="2">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Apellido_Materno</label>
    <input id="Apellido_Materno" name="Apellido_Materno" type="Text" class="form-control" tabindex="3">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Edad</label>
    <input id="Edad" name="Edad" type="Number" class="form-control" tabindex="4">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Tipo De Documento</label>
    <select  id="Tipo_Documento" name="Tipo_Documento" tabindex="5">
      @foreach($lista_t_documentos as $item)
      <option value="{{ $item->id}}">{{$item->Descripcion}}</option>
      @endforeach
    </select>    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Numero De Documento</label>
    <input id="Numero_Documento" name="Numero_Documento" type="Text" class="form-control" tabindex="6">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Direccion</label>
    <input id="Direccion" name="Direccion" type="Text" class="form-control" tabindex="7">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Celular</label>
    <input id="Celular" name="Celular" type="text" class="form-control" tabindex="8">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Gestion</label>
    <input id="Gestion" name="Gestion" type="text" class="form-control" tabindex="9">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Contraseña</label>
    <input id="Contrasena" name="Contrasena" type="password" class="form-control" tabindex="10">    
  </div>
  <a href="/Usuario" class="btn btn-secondary" tabindex="13">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="14">Guardar</button>
</form>

@endsection