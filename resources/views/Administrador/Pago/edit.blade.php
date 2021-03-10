@extends('layouts.plantillabase')

@section('contenido')
<h2 class="referencia">Editar Pagos Pendientes</h2>
<div class="formulario">

<form action="/Pago/{{$pago->id}}" method="POST">
    @csrf    
    @method('PUT')
    <div class="mb-3">
    <label for="" class="form-label">Manzana</label>
    <select id="Manzana" name="Manzana" value="{{$pago->Manzana}}">
      @foreach($lista_propiedads as $item)
      <option value="{{ $item->id}}">{{$item->Manzana}} </option>
      @endforeach
    </select>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Lote</label>
    <select id="Lote" name="Lote" value="{{$pago->Lote}}">
      @foreach($lista_propiedads as $item)
      <option value="{{ $item->id}}">{{$item->Lote}} </option>
      @endforeach
    </select>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Fecha_Inicio</label>
    <input id="Fecha_Inicio" name="Fecha_Inicio" type="date" class="form-control" value="{{$pago->Fecha_Inicio}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Fecha_Fin</label>
    <input id="Fecha_Fin" name="Fecha_Fin" type="date" class="form-control" value="{{$pago->Fecha_Fin}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Fecha_Vencimiento</label>
    <input id="Fecha_Vencimiento" name="Fecha_Vencimiento" type="date" class="form-control" value="{{$pago->Fecha_Vencimiento}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Monto</label>
    <input id="Monto" name="Monto" type="number" class="form-control" value="{{$pago->Monto}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Estado</label>
    <select name="Estado">
      <option value="Deuda"> Deuda </option>
      <option value="Cancelado">Cancelado </option>
    </select>      
  </div>
  <a href="/Propiedad" class="btn btn-secondary" style="color:#FFF;font-size:15px;font-weight: bold;">Cancelar</a>
  <button type="submit" class="btn btn-primary" style="color:#FFF;font-size:15px;font-weight: bold;">Guardar</button>

</form>
</div>

@endsection