@extends('adminlte::page')

@section('title', 'libro')

@section('content_header')
    <h1>libros</h1>
@stop

@section('content')
<div class="row">
        <div class="col-md-12">
            <div class="card">

                <div class="card-header d-flex align-items-center justify-content-between">
                    <h3 class="card-title text-center mb-0">Libros</h3>
                    <a href="{{route('beanvides/libros/reg_libros')}}" class="btn btn-success ml-auto"><i class="fas fa-plus"></i> Registrar</a>
                    
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>ISBN</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Genero</th>
                                <th>Precio U</th>
                                <th>Observacion</th>
                                <th>foto</th>
                                <th>Area</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>hola</td>
                                <td>hola</td>
                                <td>hola</td>
                                <td>hola</td>
                                <td>hola</td>
                                <td>hola</td>
                                <td>hola</td>
                                <td>hola</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop