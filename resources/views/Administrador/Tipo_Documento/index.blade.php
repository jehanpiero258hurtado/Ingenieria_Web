@extends('layouts.plantillabase')
@section('contenido')
<!-- <div class="shadow-lg p-3 mb-5 bg-white rounded"><h3>Contenido de INDEX</h3></div> -->
        <h2 class="referencia">Tipos De Documentos Agregados</h2>
        <div class ="card">
        <a href="Tipo_Documento/create" class="menu-btn"  style="color:#FFF;font-size:15px;font-weight: bold;">CREAR</a>
                <div class="container">
                      <table id="table" class="table" >
                      <thead class="fila">
                        <tr>
                          <th style="color:#fff;font-size:22px;font-weight: bold;">ID</th>
                          <th style="color:#fff;font-size:22px;font-weight: bold;">Descripcion</th>
                          <th style="color:#fff;font-size:22px;font-weight: bold;">Acciones</th>
                        </tr>
                      </thead>
                      <tbody > 
                      @foreach ($lista_t_documentos as $lista_t_documento)
                      <tr class="fila1">
                        <td>{{$lista_t_documento->id}}</td>
                        <td>{{$lista_t_documento->Descripcion}}</td>
                        <td>  
                          <form action="{{ route('Tipo_Documento.destroy',$lista_t_documento->id) }}" method="POST">
                            <a href="/Tipo_Documento/{{$lista_t_documento->id}}/edit" class="btn-info"  style="color:#FFF;font-size:15px;font-weight: bold;">Editar</a>
                              @csrf
                              @method('DELETE')
                            <button class="btn-danger"  style="color:#FFF;font-size:15px;font-weight: bold;">Borrar</button>
                          </form>  
                        </td> 
                      </tr>
                      @endforeach
                      </tbody>
                      </table>
                    </div>
</div>
@endsection