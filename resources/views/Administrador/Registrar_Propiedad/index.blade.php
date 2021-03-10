@extends('layouts.plantillabase')

@section('contenido')
<!-- <div class="shadow-lg p-3 mb-5 bg-white rounded"><h3>Contenido de INDEX</h3></div> -->
<h2 class="Referencia">Propiedades Agregadas</h2>
        <div class ="Card">
        <a href="Propiedad/create" class="menu-btn"  style="color:#FFF;font-size:15px;font-weight: bold;">CREAR</a>
          <div class="container">
     <table id="table" class="Table" >
    <thead class="fila">
    <tr>
      <th style="color:#fff;font-size:15px;font-weight: bold;">ID</th>
      <th style="color:#fff;font-size:15px;font-weight: bold;">Propiedad</th>
      <th style="color:#fff;font-size:15px;font-weight: bold;">Tipo De Documento</th>
      <th style="color:#fff;font-size:15px;font-weight: bold;">Numero De Documento</th>
      <th style="color:#fff;font-size:15px;font-weight: bold;">Celular</th>
      <th style="color:#fff;font-size:15px;font-weight: bold;">Manzana</th>
      <th style="color:#fff;font-size:15px;font-weight: bold;">Lote</th>
      <th style="color:#fff;font-size:15px;font-weight: bold;">Numero De Suministro</th>
      <th style="color:#fff;font-size:15px;font-weight: bold;">Tipo De Propiedad</th>
      <th style="color:#fff;font-size:15px;font-weight: bold;">Fecha De Inscripcion</th>
      <th style="color:#fff;font-size:15px;font-weight: bold;">Pago Mensual</th>
      <th style="color:#fff;font-size:15px;font-weight: bold;">Pago Por Reconeccion</th>
      <th style="color:#fff;font-size:15px;font-weight: bold;">Estado</th> 
      <th style="color:#fff;font-size:19px;font-weight: bold;">Acciones</th>
    </tr>
  </thead>
  <tbody>    
    @foreach ($lista_propiedads as $lista_propiedad)
    <tr class="fila1">
        <td>{{$lista_propiedad->id}}</td>
        <td>{{$lista_propiedad->Propietario}}</td>
        @foreach($lista_t_documentos as $lista_t_documento)
        <td>{{$lista_t_documento->Descripcion}}</td>
      @endforeach 
        <td>{{$lista_propiedad->Numero_Documento}}</td>
        <td>{{$lista_propiedad->Celular}}</td>
        <td>{{$lista_propiedad->Manzana}}</td>
        <td>{{$lista_propiedad->Lote}}</td>
        <td>{{$lista_propiedad->Numero_Suministro}}</td>
        @foreach($lista_t_datos as $lista_t_dato)
        <td>{{$lista_t_dato->Descripcion}}</td>
        <td>{{$lista_propiedad->Fecha_Inscripcion}}</td>
        <td>{{$lista_t_dato->Pago}}</td>
      @endforeach 
        <td>{{$lista_propiedad->Pago_Reconeccion}}</td>
        <td>{{$lista_propiedad->Estado}}</td>
        <td>  
        <form action="{{ route('Propiedad.destroy',$lista_propiedad->id) }}" method="POST">
            <a href="/Propiedad/{{$lista_propiedad->id}}/edit" class="Btn-info" style="color:#FFF;font-size:10px;font-weight: bold;">Editar</a>
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