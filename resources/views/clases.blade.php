<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Nombre: {{$nombre}}</h1>  
        <h2>Apellido: {{$apellido}}</h2>
    </div>
    @php
        Echo 'El nombre del maestro es: '.$nombre. '    y el apelido es: '.$apellido
    @endphp
    
</body>
</html>