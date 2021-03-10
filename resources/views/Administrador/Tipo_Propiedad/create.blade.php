@extends('layouts.plantillabase')

@section('contenido')
<h2 class="referencia">Agregar Nuevo Tipo De Propiedad</h2>
<div class="formulario">
<form action="/Tipo_Propiedad" method="POST">
@csrf
  <div class="mb-3">
    <label for="" class="form-label">Descripcion</label>
    <input id="Descripcion" name="Descripcion" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Pago Correspondiente</label>
    <input id="Pago" name="Pago" type="number" step="any" value="0.00" class="form-control" tabindex="2">
  </div>
  <a href="/Tipo_Propiedad" class="btn btn-secondary" tabindex="6" style="color:#FFF;font-size:15px;font-weight: bold;">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="5" style="color:#FFF;font-size:15px;font-weight: bold;">Guardar</button>
</form>
</div>
@endsection