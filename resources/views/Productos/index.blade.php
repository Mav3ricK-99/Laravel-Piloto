<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Productos</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
    </head>

    <body>
        <h2>Productos</h2>
        <ul>
        @foreach ($productos as $item)
            <li>{{ $item->nombre_prod }}</li>
        @endforeach
        </ul>
    </body>
</html>