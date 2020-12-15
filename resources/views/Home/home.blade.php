@extends('Plantilla.plantilla_panel')
@section('vistas')
    <h1>Mostrando las noticias y publicidades</h1>
    <a class="btn btn-primary" href="{{url('/noticias')}}">Ver Noticias</a>
    <a class="btn btn-primary" href="{{url('/noticias')}}">Ver Publicidades</a>
@endsection
@section('tabla')
    @include('Panel.Noticias.index')
@endsection

