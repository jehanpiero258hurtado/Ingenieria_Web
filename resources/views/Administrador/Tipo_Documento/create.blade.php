@extends('layouts.plantillabase')

@section('contenido')
<h2>CREAR REGISTROS</h2>
<form action="/Tipo_Documento" method="POST">
@csrf
  <div class="mb-3">
    <label for="" class="form-label">Descripcion</label>
    <input id="Descripcion" name="Descripcion" type="text" class="form-control" tabindex="1">    
  </div>
  <a href="/Tipo_Documento" class="btn btn-secondary" tabindex="6">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="5">Guardar</button>
</form>

@endsection