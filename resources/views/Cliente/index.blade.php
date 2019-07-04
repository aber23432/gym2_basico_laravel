@extends('layouts.layout')
@section('contenido')
<div class="row">
  <center>
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista de Clientes</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('cliente.create') }}" class="btn btn-info">Nuevo Cliente</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Nombre</th>
               <th>Apellido</th>
               <th>Teléfono</th>
               <th>Dirección</th>
               <th>Fecha de nacimiento</th>
               <th>Fecha de inscripción</th>
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($clientes->count())  
              @foreach($clientes as $cliente)  
              <tr>
                <td>{{$cliente->nombre}}</td>
                <td>{{$cliente->apellido}}</td>
                <td>{{$cliente->telefono}}</td>
                <td>{{$cliente->direccion}}</td>
                <td>{{$cliente->fechanac}}</td>
                <td>{{$cliente->fechains}}</td>
                <td><a class="btn btn-primary btn-xs" href="{{action('ClienteController@edit', $cliente->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('ClienteController@destroy', $cliente->id)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">

                   <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                 </td>
               </tr>
               @endforeach 
               @else
               <tr>
                <td colspan="8">No hay registro !!</td>
              </tr>
              @endif
            </tbody>

          </table>
        </div>
      </div>
      {{ $clientes->links() }}
    </div>
  </div>
</section>
</center>
@endsection