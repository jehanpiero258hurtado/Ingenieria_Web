@extends('layouts.plantillabase')

@section('contenido')
<h2>CREAR REGISTROS</h2>
<form action="/Propiedad" method="POST">
@csrf
  <div class="mb-3">
    <label for="" class="form-label">Propietario</label>
    <input id="Propietario" name="Propietario" type="checked" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Tipo De Documento</label>
    <select  id="Tipo_Documento_id" name="Tipo_Documento_id">
      @foreach($lista_t_documentos as $item)
      <option value="{{ $item->id}}">{{$item->Descripcion}}</option>
      @endforeach
    </select>    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Numero De Documento</label>
    <input id="Numero_Documento" name="Numero_Documento" type="Text" class="form-control" tabindex="3">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Celular</label>
    <input id="Celular" name="Celular" type="Text" class="form-control" tabindex="4">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Manzana</label>
    <input id="Manzana" name="Manzana" type="Text" class="form-control" tabindex="5">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Lote</label>
    <input id="Lote" name="Lote" type="Text" class="form-control" tabindex="6">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Numero De Suministro</label>
    <input id="Numero_Suministro" name="Numero_Suministro" type="Text" class="form-control" tabindex="7">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Tipo De Propiedad</label>
    <select id="Tipo_Propiedad_id" name="Tipo_Propiedad_id">
      @foreach($lista_t_datos as $item)
      <option value="{{ $item->id}}">{{$item->Descripcion}} </option>
      @endforeach
    </select>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Fecha De Inscripcion</label>
    <input id="Fecha_Inscripcion" name="Fecha_Inscripcion" type="date" class="form-control" tabindex="9">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Pago Mensual</label>
    <select name="Pago_Mensual">
      @foreach($lista_t_datos as $item)
      <option value="{{ $item->id}}">{{$item->Pago}} </option>
      @endforeach
    </select>    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Pago Por Reconeccion</label>
    <input id="Pago Por Reconeccion" name="Pago_Reconeccion" type="number" class="form-control" tabindex="11">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Estado</label>
    <select name="Estado">
      <option value="Activo">Activo </option>
      <option value="Inactivo">Inactivo </option>
    </select>     
  </div>
  <a href="/Propiedad" class="btn btn-secondary" tabindex="13">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="14">Guardar</button>
</form>

@endsection