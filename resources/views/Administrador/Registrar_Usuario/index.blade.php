@extends('layouts.plantillabase')

@section('contenido')
<!-- <div class="shadow-lg p-3 mb-5 bg-white rounded"><h3>Contenido de INDEX</h3></div> -->
<a href="Usuario/create" class="btn btn-primary">CREAR</a>


<table class="table table-dark table-striped mt-4">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido_Paterno</th>
      <th scope="col">Apellido_Materno</th>
      <th scope="col">Edad</th>
      <th scope="col">Tipo_Documento</th>
      <th scope="col">Numero_Documento</th>
      <th scope="col">Direccion</th>
      <th scope="col">Celular</th>
      <th scope="col">Gestion</th>
      <th scope="col">Contraseña</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>    
    @foreach ($lista_usuarios as $lista_usuario)
    <tr>
        <td>{{$lista_usuario->id}}</td>
        <td>{{$lista_usuario->Nombre}}</td>
        <td>{{$lista_usuario->Apellido_Paterno}}</td>
        <td>{{$lista_usuario->Apellido_Materno}}</td>
        <td>{{$lista_usuario->Edad}}</td>
        @foreach($lista_t_documentos as $lista_t_documento)
        <td>{{$lista_t_documento->Descripcion}}</td>
      @endforeach 
        <td>{{$lista_usuario->Numero_Documento}}</td>
        <td>{{$lista_usuario->Direccion}}</td>
        <td>{{$lista_usuario->Celular}}</td>
        <td>{{$lista_usuario->Gestion}}</td>
        <td>{{$lista_usuario->Contrasena}}</td>
        <td>  
        <form action="{{ route('Usuario.destroy',$lista_usuario->id) }}" method="POST">
            <a href="/Usuario/{{$lista_usuario->id}}/edit" class="btn btn-info">Editar</a>
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