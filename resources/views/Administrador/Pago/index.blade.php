@extends('layouts.plantillabase')

@section('contenido')
<!-- <div class="shadow-lg p-3 mb-5 bg-white rounded"><h3>Contenido de INDEX</h3></div> -->
<h2 class="Referencia">Pagos Pendientes</h2>
        <div class ="Card">
        <a href="Pago/create" class="menu-btn"  style="color:#FFF;font-size:15px;font-weight: bold;">CREAR</a>
          <div class="container">
     <table id="table" class="Table" >
    <thead class="fila">
    <tr>
    <th style="color:#fff;font-size:15px;font-weight: bold;">ID</th>
      <th style="color:#fff;font-size:15px;font-weight: bold;">Manzana</th>
      <th style="color:#fff;font-size:15px;font-weight: bold;">Lote</th>
      <th style="color:#fff;font-size:15px;font-weight: bold;">Fecha_Inicio</th>
      <th style="color:#fff;font-size:15px;font-weight: bold;">Fecha_Fin</th>
      <th style="color:#fff;font-size:15px;font-weight: bold;">Fecha_Vencimiento</th>
      <th style="color:#fff;font-size:15px;font-weight: bold;">Monto</th>
      <th style="color:#fff;font-size:15px;font-weight: bold;">Estado</th> 
      <th style="color:#fff;font-size:19px;font-weight: bold;">Acciones</th>
    </tr>
  </thead>
  <tbody>    
    @foreach ($lista_pagos as $lista_pago)
    <tr class="fila1">
        <td>{{$lista_pago->id}}</td>
        @foreach($lista_propiedads as $lista_propiedad)
        <td>{{$lista_propiedad->Manzana}}</td>
        <td>{{$lista_propiedad->Lote}}</td>
      @endforeach 
        <td>{{$lista_pago->Fecha_Inicio}}</td>
        <td>{{$lista_pago->Fecha_Fin}}</td>
        <td>{{$lista_pago->Fecha_Vencimiento}}</td>
        <td>{{$lista_pago->Monto}}</td>
        <td>{{$lista_pago->Estado}}</td>
        <td>  
        <form action="{{ route('Pago.destroy',$lista_pago->id) }}" method="POST">
            <a href="/Pago/{{$lista_pago->id}}/edit" class="Btn-info" style="color:#FFF;font-size:10px;font-weight: bold;">Editar</a>
            @csrf
              @method('DELETE')
            <button class=" btn-Danger" style="color:#FFF;font-size:10px;font-weight: bold;">Borrar</button>
            </form>  
        </td>        
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
@endsection