@extends('Plantilla.plantilla_panel')
@section('vistas')
    <h1>Mostrando las noticias y publicidades</h1>
    <a name="noticias" class="btn btn-primary" href="{{url('/noticias')}}">Ver Noticias</a>
    <a name="publicidad" class="btn btn-primary" href="{{url('/publicidad')}}">Ver Publicidades</a>
@endsection
@section('tabla')

        @include('Panel.Noticias.index')

@endsection

