<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>administrators</title>
</head>
<body>
    
    <h3>Baterias</h3>

        @foreach ($bateries as $b) 
            <h3>Informações das Baterias</h3>
            <ul>
            <li> <strong> ID: </strong>  {{ $b->id }}   </li>
            <li> <strong> tryNum: </strong>  {{ $b->tryNum }}   </li>
            <li> <strong> tryTime: </strong>  {{ $b->tryTime }}   </li>
            <li> <strong> errorTime: </strong>  {{ $b->errorTime }}   </li>
            <li> <strong> rewardTime: </strong>  {{ $b->rewardTime }}   </li>
            <li> <strong> showingTime: </strong>  {{ $b->showingTime }}   </li>
            <h4> Tentativas </h4>
            @foreach ($b->tryBatery as $tb) 
               <p> Tentativa (id) |   {{ $tb->id }}   | </p>
               <p> Tentativa (type) |   {{ $tb->type }}   | </p>
               <p> Tentativa (shape) |   {{ $tb->shape }}   | </p>
               <p> Tentativa (color) |   {{ $tb->color }}   | </p>
            <hr>
            </ul>
            @endforeach
            <ul>
            <h4> Resultados das Baterias </h4>
            @foreach ($b->resultBatery as $rb) 
                <p> Resultado da bateria (id)  |   {{ $rb->id }}   | </p>
                <p> Resultado da bateria (biggestErrorTime)  |   {{ $rb->biggestErrorTime }}   | </p>
                <p> Resultado da bateria (totalError)  |   {{ $rb->totalError }}   | </p>
                <p> Resultado da bateria (totalTime) |   {{ $rb->totalTime }}   | </p>
                <p> Resultado da bateria (touchscreenNum) |   {{ $rb->touchscreenNum }}   | </p>
            <hr>
            </ul>
            @endforeach
        @endforeach
</body>
</html>