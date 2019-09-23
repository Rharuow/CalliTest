<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>administrators</title>
</head>
<body>
    
    <h3>Tentativas dos Treinamentos</h3>

        @foreach ($tryTrainings as $tt) 
            <h3>Informações das Tentativas dos Treinamentos</h3>
            <ul>
            <li> <strong> ID: </strong>  {{ $tt->id }}   </li>
            <p> Tentativa (type) |   {{ $tt->type }}   | </p>
            <p> Tentativa (shape) |   {{ $tt->shape }}   | </p>
            <p> Tentativa (color) |   {{ $tt->color }}   | </p>
            <ul>
            <h4> Resultados das Tentativas dos Treinamentos </h4>
            @foreach ($tt->resultTryTrainings as $rtt) 
                <p> Resultado do Treinamento (id)  |   {{ $rtt->id }}   | </p>
                <p> Resultado do Treinamento (firstErroTime)  |   {{ $rtt->firstErroTime }}   | </p>
                <p> Resultado do Treinamento (totalTime) |   {{ $rtt->totalTime }}   | </p>
                <p> Resultado do Treinamento (touchscreenNum) |   {{ $rtt->touchscreenNum }}   | </p>
                <p> Resultado do Treinamento (try_training_id) |   {{ $rtt->try_training_id }}   | </p>
            <hr>
            </ul>
            @endforeach
        @endforeach
</body>
</html>