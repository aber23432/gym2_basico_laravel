@extends('layouts.layout')
@section('contenido')
<div class="row">
 <section class="content">
  <div class="col-xs-12 .col-md-8">
   @if (count($errors) > 0)
   <div class="alert alert-danger">
    <strong>Error!</strong> Revise los campos obligatorios.<br><br>
    <ul>
     @foreach ($errors->all() as $error)
     <li>{{ $error }}</li>
     @endforeach
    </ul>
   </div>
   @endif
   @if(Session::has('success'))
   <div class="alert alert-info">
    {{Session::get('success')}}
   </div>
   @endif

   <div class="panel panel-default">
    <div class="panel-heading">
     <h3 class="panel-title">Nuevo Cliente</h3>
    </div>
    <div class="panel-body">     
     <div class="table-container">
      <form method="POST" action="{{ route('cliente.store') }}"  role="form">
       {{ csrf_field() }}
       <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
         <div class="form-group">
          <input type="text" name="nombre" id="nombre" class="form-control input-sm" placeholder="Nombre del cliente">
         </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
         <div class="form-group">
          <input type="text" name="apellido" id="apellido" class="form-control input-sm" placeholder="Apellido del cliente">
         </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
         <div class="form-group">
          <input type="text" name="telefono" id="telefono" class="form-control input-sm" placeholder="Telefono del cliente">
         </div>
        </div>
       </div>

       <div class="form-group">
        <textarea name="direccion" class="form-control input-sm" placeholder="Direccion"></textarea>
       </div>
       <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
         <div class="form-group">
          <input type="date" name="fechanac" id="fechanac" class="form-control input-sm" placeholder="Fecha de nacimiento">
         </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
         <div class="form-group">
          <input type="date" name="fechains" id="fechains" class="form-control input-sm" placeholder="Fecha de inscripción">
         </div>
        </div>
       </div>
      
       <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
         <input type="submit"  value="Guardar" class="btn btn-success btn-block">
         <a href="{{ route('cliente.index') }}" class="btn btn-info btn-block" >Atrás</a>
        </div> 

       </div>
      </form>
     </div>
    </div>

   </div>
  </div>
 </section>
 @endsection