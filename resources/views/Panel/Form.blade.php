<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
{{--    <link rel="stylesheet" href="css/form.css">--}}
</head>
<body>
        <form action="{{'/panel'}}" method="post" enctype="multipart/form-data">
            <label for="titulo" class="titulo">
                Titulo
                <input type="text" name="title" id="title">
            </label>
            <br><br>
            <label for="contenido" class="contenido">
                Contenido
                <input type="text" name="content" id="content">
            </label>
            <br><br>
            <label for="Fecha de creacion">
                Fecha de creacion
                <input type="text" name="fecha_creacion" id="fecha_creacion">
            </label><br><br>
            <label for="foto" class="foto">
                Foto
                <input type="file" name="pic" id="picture">
            </label> <br><br>
{{--            <button type="submit">Agregar</button>--}}
            <input type="submit" value="Agregar">

        </form>
</body>
</html>
