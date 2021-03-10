@extends('layouts.plantillabase')

@section('contenido')
<h2 class="referencia">Agregar Nuevo Tipo De Documento</h2>
<div class="formulario">
<form  action="/Tipo_Documento" method="POST">
@csrf
  <div class="descripcion">
    <label for="" class="form-label">Descripcion</label>
    <input id="Descripcion" name="Descripcion" type="text" class="form-control" tabindex="1">    
  </div>
  <a href="/Tipo_Documento" class="btn-secondary" tabindex="6" style="color:#FFF;font-size:15px;font-weight: bold;">Cancelar</a>
  <button type="submit" class="btn-primary" tabindex="5" style="color:#FFF;font-size:15px;font-weight: bold;">Guardar</button>
</form>
</div>


@endsection