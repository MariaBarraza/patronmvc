<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Noticias</title>
</head>
<body>
    <!--Usar php en blade:
        <?php var_dump($noticias)?>
    @php
        var_dump($noticias)
    @endphp-->
    <h1>Noticias</h1>
    <table>
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach($noticias as $noticia)
                    <tr>
                        <!-- el titulo es el campo que queremos se traiga-->
                        <td>{{$noticia->titulo}}</td>
                        <td>
                            <a href="{{route('noticias.show',$noticia->id)}}">Ver mas</a>
                        </td>
                    </tr>
                @endforeach
                <td><button>Leer mas</button></td>
            </tr>
        </tbody>
    </table>
</body>
</html>