<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>administrators</title>
</head>
<body>
    
    <h3>Tentativas das Baterias</h3>

        @foreach ($tryBateries as $tb) 
            <h3>Informações das Tentativas das Baterias</h3>
            <ul>
            <li> <strong> ID: </strong>  {{ $tb->id }}   </li>
            <p> Tentativa (type) |   {{ $tb->type }}   | </p>
            <p> Tentativa (shape) |   {{ $tb->shape }}   | </p>
            <p> Tentativa (color) |   {{ $tb->color }}   | </p>
            <ul>
            <h4> Resultados das Tentativas das Baterias </h4>
            @foreach ($tb->resultTryBateries as $rtb) 
                <p> Resultado da bateria (id)  |   {{ $rtb->id }}   | </p>
                <p> Resultado da bateria (totalError)  |   {{ $rtb->totalError }}   | </p>
                <p> Resultado da bateria (totalTime) |   {{ $rtb->totalTime }}   | </p>
                <p> Resultado da bateria (touchscreenNum) |   {{ $rtb->touchscreenNum }}   | </p>
            <hr>
            </ul>
            @endforeach
        @endforeach
</body>
</html>