@extends('Plantilla.plantilla_panel')
@section('vistas')
    <h1>Mostrando las noticias y publicidades</h1>
    <br>
    <div class="container">
        @isset($noticias)
        @foreach($noticias as $items)
            <div class="card-container">
                <div class="header">
                    <a href="#">
                        <img src="{{ asset('storage'.'/'.$items->Foto)}}" alt="" width="150" height="150">
                    </a>
                </div>
                <div class="Contenido">
                    <p>
                        {!!$items->Contenido!!}

                    </p>
                    <p>Publicado:{{$items->Fecha}}</p>
                </div>
                <br>
            </div>
            <br>
        @endforeach
        @endisset
        <div>
            <a class="btn btn-primary" href="{{ url('/noticias/create')}}">Agregar Noticia</a>
        </div>
    </div>
@endsection
