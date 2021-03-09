@extends('layouts.plantillabase')

@section('contenido')
<h2>EDITAR REGISTROS</h2>

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
  <a href="/Tipo_Propiedad" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>

</form>

@endsection