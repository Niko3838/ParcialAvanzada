@extends('adminlte::page')

@section('title', 'Libreria')

@section('content_header')
    <h1>Libreria</h1>
@stop

@section('content')
<div class="card m-10" >
                    <img src="imagen-libreria.jpg" class="card-img-top" alt="Imagen del Establecimiento">
                    <div class="card-body">
                        <h5 class="card-title">Libreria Donde Lucho </h5>
                        <p class="card-text">Tu destino para explorar y adquirir gran variedad de libros al alcance de todos a bajos precios</p>
                        <p class="card-text">Ofrecemos una amplia selección de libros en las siguientes categorías:</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Ciencias Naturales</li>
                            <li class="list-group-item">Ciencias Humanas</li>
                            <li class="list-group-item">Ciencias Sociales y Jurídicas</li>
                            <li class="list-group-item">Artes</li>
                            <li class="list-group-item">Ciencias de la Salud</li>
                            <li class="list-group-item">Literatura Gastronomía y Cocina</li>
                        </ul>
                        <a href="{{route('beanvides/libros')}}" class="btn btn-primary">Explorar Libros</a>
                    </div>
            </body>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@stop