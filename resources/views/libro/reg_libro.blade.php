@extends('adminlte::page')

@section('title', 'Libro')

@section('content_header')
    <h1>Registrar Libro</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Registro de Libro</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" action="{{url('/facultades/registrar')}}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="isbn" class="col-sm-4 col-form-label">ISBN</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="isbn" name="isbn" placeholder="Ingrese isbn" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nombre" class="col-sm-4 col-form-label">Nombre</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese nombre" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="descripcion" class="col-sm-4 col-form-label">Descripcion</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Ingrese descripcion" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="genero" class="col-sm-4 col-form-label">Genero Literario</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="genero" name="genero" placeholder="Ingrese genero" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="precio" class="col-sm-4 col-form-label">Precio Unitario</label>
                            <div class="col-sm-12">
                                <input type="number" class="form-control" id="precio" name="precio" placeholder="Ingrese precio" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="observaciones" class="col-sm-4 col-form-label">Observacion</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="observaciones" name="observaciones" placeholder="Ingrese observaciones">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="foto" class="col-sm-4 col-form-label">Foto</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="foto" name="foto" placeholder="Ingrese foto">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="area" class="col-sm-4 col-form-label">Area</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="area" name="area" placeholder="Ingrese area" required>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop