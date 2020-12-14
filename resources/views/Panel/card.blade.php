<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/tarjeta.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="card-container">
{{--        <a href="{{ url('Form')}}">Agregar Noticia</a>--}}
        <div class="header">
            <a href="#">
                <img src="images/luna.jpg" alt="" width="150" height="150">
            </a>
            <h4>Nombre</h4>
        </div>
        <div class="description">
            <p>
                Lorem ipsum dolor sit amet,
                consectetur adipisicing elit. Aperiam deserunt ea esse exercitationem
                incidunt magni maxime nam nisi non odio perferendis, quae quam qui quibusdam ratione
                recusandae sequi sit vel?
                @yield('')
            </p>
            {{--    para agregar iconos para redes sociales--}}
            {{--            <div class="social">--}}
            {{--            </div>--}}

        </div>
    </div>

</div>
</body>
</html>


