@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="card" >
         <div class="card-body">
               {!! Form::open(['route'=> 'admin.almacens.store']) !!}

                  @include('admin.almacens.partials.forms')

                  <div class="form-group">
                     {{ Form::submit("Crear almacen",["class" => "btn btn-primary"]) }}
                  </div>
                  

               {!! Form::close() !!}
         </div>
   </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop