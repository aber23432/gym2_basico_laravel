@extends('layouts.layout')
@section('contenido')
<div class="row">
  <center>
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista de Pagos</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('cliente.create') }}" class="btn btn-info">Nuevo Pago</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Cliente</th>
               <th>Mes</th>
               <th>Cantidad</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($pagos->count())  
              @foreach($pagos as $pago)  
              <tr>
                <td>{{$pago->idcliente}}</td>
                <td>{{$pago->mes}}</td>
                <td>{{$pago->cantidad}}</td>
                <td>
                  <form action="{{action('PagoController@destroy', $pago->id)}}" method="post">
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
      {{ $pagos->links() }}
    </div>
  </div>
</section>
</center>
@endsection