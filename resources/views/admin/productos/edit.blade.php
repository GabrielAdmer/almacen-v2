@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Productos</h1>
@stop

@section('content')

    <div class="card" >
        <div class="card-body">
            {!!Form::model($producto, ['route'=> ['admin.productos.update',$producto],'method'=>'put'])!!}

                @include('admin.productos.partials.forms')

                <div class="form-group">
                    {{ Form::submit("Editar Producto",["class" => "btn btn-primary"]) }}
                </div>         

            {!! Form::close() !!}
        </div>
    </div>

@stop
