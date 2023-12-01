@extends('adminlte::page')

@section('title', 'Area')

@section('content_header')
    <h1>Registrar Area</h1>
@stop

@section('content')
    
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Registro de Area</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" action="{{url('/facultades/registrar')}}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="cod_area" class="col-sm-4 col-form-label">Código Area</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="cod_area" name="cod_area" placeholder="Ingrese el código de la area" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="desc_area" class="col-sm-4 col-form-label">Descripcion</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="desc_area" name="desc_area" placeholder="Ingrese la descripcion" required>
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