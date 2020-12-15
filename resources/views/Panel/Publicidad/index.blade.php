


@extends('Plantilla.plantilla_panel')


@section('tabla')

        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                   <th>Foto</th>
                    <th>Contenido</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @isset($publicidad)
                @foreach ($publicidad as $items)
                <tr>

                <td>
                    <img src="{{ asset('storage'.'/'.$items->Foto)}}" alt="" width="200">

                </td>
                <td>{!!$items->Contenido!!}</td>
                <td>{{$items->Fecha}}</td>
                <td>
                <a class="btn btn-secondary" href="{{url('/noticias/'.$items->id.'/edit')}}">
                        Edit
                    </a>


                <form method="POST" action="{{ url('/noticias/'.$items->id)}}">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}

                    <button class="btn btn-danger" type="submit" onclick="return confirm('¿Desea Borrar?');">Borrar</button>
                </form>
                </td>
                </tr>
                @endforeach
                @endisset
            </tbody>
        </table>
@endsection
