@extends('layouts.plantillabase')

@section('contenido')
<!-- <div class="shadow-lg p-3 mb-5 bg-white rounded"><h3>Contenido de INDEX</h3></div> -->
<a href="Tipo_Propiedad/create" class="btn btn-primary">CREAR</a>


<table class="table table-dark table-striped mt-4">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Pago Correspondiente</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>    
    @foreach ($lista_t_propiedads as $lista_t_propiedad)
    <tr>
        <td>{{$lista_t_propiedad->id}}</td>
        <td>{{$lista_t_propiedad->Descripcion}}</td>
        <td>{{$lista_t_propiedad->Pago}}</td>
        <td>  
        <form action="{{ route('Tipo_Propiedad.destroy',$lista_t_propiedad->id) }}" method="POST">
            <a href="/Tipo_Propiedad/{{$lista_t_propiedad->id}}/edit" class="btn btn-info">Editar</a>
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