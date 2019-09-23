<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>administrators</title>
</head>
<body>
    
    <h3>Treinamentos</h3>

        @foreach ($trainings as $t) 
            <h3>Informações dos Treinamentos</h3>
            <ul>
            <li> <strong> ID: </strong>  {{ $t->id }}   </li>
            <li> <strong> tryNum: </strong>  {{ $t->tryNum }}   </li>
            <li> <strong> tryTime: </strong>  {{ $t->tryTime }}   </li>
            <li> <strong> errorTime: </strong>  {{ $t->errorTime }}   </li>
            <li> <strong> rewardTime: </strong>  {{ $t->rewardTime }}   </li>
            <h4> Tentativas </h4>
            @foreach ($t->tryTrainings as $tt) 
               <p> Tentativa (id) |   {{ $tt->id }}   | </p>
               <p> Tentativa (type) |   {{ $tt->type }}   | </p>
               <p> Tentativa (shape) |   {{ $tt->shape }}   | </p>
               <p> Tentativa (color) |   {{ $tt->color }}   | </p>
            <hr>
            </ul>
            @endforeach
            <ul>
            <h4> Resultados dos Treinamentos </h4>
            @foreach ($t->resultTrainings as $rt) 
                <p> Resultado do treinamento (id)  |   {{ $rt->id }}   | </p>
                <p> Resultado do treinamento (biggestErrorTime)  |   {{ $rt->biggestErrorTime }}   | </p>
                <p> Resultado do treinamento (totalError)  |   {{ $rt->totalError }}   | </p>
                <p> Resultado do treinamento (totalTime) |   {{ $rt->totalTime }}   | </p>
                <p> Resultado do treinamento (touchscreenNum) |   {{ $rt->touchscreenNum }}   | </p>
            <hr>
            </ul>
            @endforeach
        @endforeach
</body>
</html>