<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>administrators</title>
</head>
<body>
    
    <h4> Resultados das Tentativas dos Treinamentos </h4>
    @foreach ($resultTryTrainings as $rtt) 
        <p> Resultado da tentativa do treinamento (id)  |   {{ $rtt->id }}   | </p>
        <p> Resultado da tentativa do treinamento (touchscreenNum)  |   {{ $rtt->touchscreenNum }}   | </p>
        <p> Resultado da tentativa do treinamento (totalError)  |   {{ $rtt->totalError }}   | </p>
        <p> Resultado da tentativa do treinamento (totalTime) |   {{ $rtt->totalTime }}   | </p>
        <p> Resultado da tentativa do treinamento (touchscreenNum) |   {{ $rtt->touchscreenNum }}   | </p>
        <p> tentativa (id) |   {{ $rtt->try_training_id }}   | </p>
    <hr>
    </ul>
    @endforeach
       
</body>
</html>