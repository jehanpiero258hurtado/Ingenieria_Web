@extends('layouts.plantillabase')

@section('contenido')
<h2 class="referencia">Agregar Pago Pendiente</h2>
<div class="formulario">
<form action="/Pago" method="POST">
@csrf
<div class="mb-3">
    <label for="" class="form-label">Manzana</label>
    <select id="Manzana" name="Manzana" tabindex="1">
      @foreach($lista_propiedads as $item)
      <option value="{{ $item->id}}">{{$item->Manzana}} </option>
      @endforeach
    </select>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Lote</label>
    <select id="Lote" name="Lote" tabindex="2">
      @foreach($lista_propiedads as $item)
      <option value="{{ $item->id}}">{{$item->Lote}} </option>
      @endforeach
    </select>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Fecha_Inicio</label>
    <input id="Fecha_Inicio" name="Fecha_Inicio" type="date" class="form-control" tabindex="3">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Fecha_Fin</label>
    <input id="Fecha_Fin" name="Fecha_Fin" type="date" class="form-control" tabindex="4">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Fecha_Vencimiento</label>
    <input id="Fecha_Vencimiento" name="Fecha_Vencimiento" type="date" class="form-control" tabindex="5">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Monto</label>
    <input id="Monto" name="Monto" type="number" class="form-control" tabindex="6">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Estado</label>
    <select name="Estado">
      <option value="Deuda"> Deuda </option>
      <option value="Cancelado">Cancelado </option>
    </select>      
  </div>
  <a href="/Propiedad" class="btn btn-secondary" tabindex="13" style="color:#FFF;font-size:15px;font-weight: bold;">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="14" style="color:#FFF;font-size:15px;font-weight: bold;">Guardar</button>
</form>
</div>

@endsection