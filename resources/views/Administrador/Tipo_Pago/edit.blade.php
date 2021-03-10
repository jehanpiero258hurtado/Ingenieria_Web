@extends('layouts.plantillabase')

@section('contenido')
<h2 class="referencia">Editar Tipo De Pago</h2>
<div class="formulario">

<form action="/Tipo_Pago/{{$tipo_pago->id}}" method="POST">
    @csrf    
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Descripcion</label>
    <input id="Descripcion" name="Descripcion" type="text" class="form-control" value="{{$tipo_pago->Descripcion}}">    
  </div>
  <a href="/Tipo_Pago" class="btn btn-secondary" style="color:#FFF;font-size:15px;font-weight: bold;">Cancelar</a>
  <button type="submit" class="btn btn-primary" style="color:#FFF;font-size:15px;font-weight: bold;">Guardar</button>

</form>
</div>

@endsection