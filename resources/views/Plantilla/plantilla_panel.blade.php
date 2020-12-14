<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    @yield('bootstrap_css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/home_index.css')}}">
    <script src="https://cdn.ckeditor.com/4.15.1/standard-all/ckeditor.js"></script>
    <title>Home</title>
</head>
<body>

<div class="d-flex">
    <div id="sidebar-container" class="bg-primary">
        <div class="logo">
            <h3 class="text-light font-weight-bold">Panel Control</h3>
        </div>
        <div class="menu">
            <a href="{{url('/')}}" class="d-block text-light p-3"><i class="icon ion-md-home mr-2 lead"></i>Tabla de Contenido</a>
            <a href="{{url('/noticias/create')}}" class="d-block text-light p-3"><i class="icon ion-md-paper mr-2 lead"></i>Agregar Noticias</a>
            <a href="{{url('/publicidad/create')}}" class="d-block text-light p-3"><i class="icon ion-md-person mr-2 lead"></i>Agregar Publicidad</a>
        </div>
    </div>
    <div class="w-100">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                </form>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{asset('images/usuario.png')}}" class="img-fluid rounded-circle avatar mr-2" width="46" height="46">
                                Usuario
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Mi Perfil</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Cerrar Seccion</a>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        <div id="content">
            <section>
                <div class="container">
                    @yield('vistas')
                </div>
            </section>
        </div>
    </div>
</div>


@yield('script')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
</body>
</html>
