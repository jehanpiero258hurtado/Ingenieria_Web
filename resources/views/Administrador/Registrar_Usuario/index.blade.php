@extends('layouts.plantillabase')

@section('contenido')
<!-- <div class="shadow-lg p-3 mb-5 bg-white rounded"><h3>Contenido de INDEX</h3></div> -->
<h2 class="referencia">Usuarios Agregados</h2>
        <div class ="card">
        <a href="Usuario/create" class="menu-btn"  style="color:#FFF;font-size:15px;font-weight: bold;">CREAR</a>
            <div class="container">
            <table id="table" class="table" >
            <thead class="fila">
    <tr>
      <th style="color:#fff;font-size:11px;font-weight: bold;">ID</th>
      <th style="color:#fff;font-size:11px;font-weight: bold;">Nombre</th>
      <th style="color:#fff;font-size:11px;font-weight: bold;">Apellido_Paterno</th>
      <th style="color:#fff;font-size:11px;font-weight: bold;">Apellido_Materno</th>
      <th style="color:#fff;font-size:11px;font-weight: bold;">Edad</th>
      <th style="color:#fff;font-size:11px;font-weight: bold;">Tipo_Documento</th>
      <th style="color:#fff;font-size:11px;font-weight: bold;">Numero_Documento</th>
      <th style="color:#fff;font-size:11px;font-weight: bold;">Direccion</th>
      <th style="color:#fff;font-size:11px;font-weight: bold;">Celular</th>
      <th style="color:#fff;font-size:11px;font-weight: bold;">Gestion</th>
      <th style="color:#fff;font-size:11px;font-weight: bold;">Contraseña</th>
      <th style="color:#fff;font-size:11px;font-weight: bold;">Acciones</th>
    </tr>
  </thead>
  <tbody>    
    @foreach ($lista_usuarios as $lista_usuario)
    <tr class="fila1">
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
            <a href="/Usuario/{{$lista_usuario->id}}/edit" class="btn btn-info" style="color:#FFF;font-size:15px;font-weight: bold;">Editar</a>
            @csrf
              @method('DELETE')
            <button class="btn btn-danger" style="color:#FFF;font-size:15px;font-weight: bold;">Borrar</button>
            </form>  
        </td>        
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>

@endsection