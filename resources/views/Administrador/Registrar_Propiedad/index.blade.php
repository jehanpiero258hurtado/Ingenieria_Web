@extends('layouts.plantillabase')

@section('contenido')
<!-- <div class="shadow-lg p-3 mb-5 bg-white rounded"><h3>Contenido de INDEX</h3></div> -->
<a href="Propiedad/create" class="btn btn-primary">CREAR</a>


<table class="table table-dark table-striped mt-4">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Propiedad</th>
      <th scope="col">Tipo De Documento</th>
      <th scope="col">Numero De Documento</th>
      <th scope="col">Celular</th>
      <th scope="col">Manzana</th>
      <th scope="col">Lote</th>
      <th scope="col">Numero De Suministro</th>
      <th scope="col">Tipo De Propiedad</th>
      <th scope="col">Fecha De Inscripcion</th>
      <th scope="col">Pago Mensual</th>
      <th scope="col">Pago Por Reconeccion</th>
      <th scope="col">Estado</th> 
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>    
    @foreach ($lista_propiedads as $lista_propiedad)
    <tr>
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
            <a href="/Propiedad/{{$lista_propiedad->id}}/edit" class="btn btn-info">Editar</a>
            @csrf
              @method('DELETE')
            <button class="btn btn-danger">Borrar</button>
            </form>  
        </td>        
    </tr>
    @endforeach
  </tbody>
</table>

@endsection