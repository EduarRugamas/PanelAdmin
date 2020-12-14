<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">


@extends('Plantilla.index_plantila')

@section('tarjeta_')
    <div class="container">
        @foreach($noticias as $items)
        <div class="card-container">
{{--            <a href="{{ url('Form')}}">Agregar Noticia</a>--}}
{{--                 {{$loop->iteration}}--}}
            <div class="header">
                <a href="#">
                <img src="{{ asset('storage'.'/'.$items->Foto)}}" alt="" width="150" height="150">
                </a>
            </div>
            <div class="Contenido">
                <p>
                   {!!$items->Contenido!!}

                </p>
                {{-- para agregar iconos para redes sociales--}}
                {{--            <div class="social">--}}
                {{--            </div>--}}

                <p>Publicado:{{$items->Fecha}}</p>
            </div>
            <br>
        </div>
            <br>
        @endforeach
        <div>
        <a class="btn btn-primary" href="{{ url('/noticias/create')}}">Agregar Noticia</a>
        </div>
    </div>
@endsection
