<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">


@extends('Plantilla.index_plantila')

@section('vistas')
    
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Foto</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @isset($noticias)
                @foreach ($noticias as $noticia)
                <tr>
                {{-- <td>{{$loop->iteration}}</td> --}}
                <td>
                    <img src="{{ asset('storage'.'/'.$noticia->Foto)}}" alt="" width="200">
                    
                </td>
                <td>{!!$noticia->Contenido!!}</td>
                <td>{{$noticia->Fecha}}</td>
                <td>
                <a href="{{url('/noticias/'.$noticia->id.'/edit')}}">
                        Editar
                    </a>
        
        
                <form method="POST" action="{{ url('/empleados/'.$noticia->id)}}">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
        
                    <button type="submit" onclick="return confirm('¿Desea Borrar?');">Borrar</button>
                </form>
                </td>
                </tr>
                @endforeach
                @endisset
            </tbody>
        </table>
@endsection
