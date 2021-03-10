@extends('layouts.plantillabase')

@section('contenido')
<h2 class="referencia">Editar Tipo De Propiedad</h2>
<div class="formulario">

<form action="/Tipo_Propiedad/{{$tipo_propiedad->id}}" method="POST">
    @csrf    
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Descripcion</label>
    <input id="Descripcion" name="Descripcion" type="text" class="form-control" value="{{$tipo_propiedad->Descripcion}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Pago Correspondiente</label>
    <input id="Pago" name="Pago" type="number" step="any" class="form-control" value="{{$tipo_propiedad->Pago}}">
  </div>
  <a href="/Tipo_Propiedad" class="btn btn-secondary" style="color:#FFF;font-size:15px;font-weight: bold;">Cancelar</a>
  <button type="submit" class="btn btn-primary" style="color:#FFF;font-size:15px;font-weight: bold;">Guardar</button>

</form>
</div>
@endsection