@extends('layouts.plantillabase')

@section('contenido')
<h2 class="referencia">Editar Tipo De Documento</h2>
<div class="formulario">

<form action="/Tipo_Documento/{{$tipo_documento->id}}" method="POST">
    @csrf    
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Descripcion</label>
    <input id="Descripcion" name="Descripcion" type="text" class="form-control" value="{{$tipo_documento->Descripcion}}">    
  </div>
  <a href="/Tipo_Documento" class="btn-secondary" style="color:#FFF;font-size:15px;font-weight: bold;">Cancelar</a>
  <button type="submit" class="btn-primary" style="color:#FFF;font-size:15px;font-weight: bold;">Guardar</button>

</form>
</div>

@endsection