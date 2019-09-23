<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>administrators</title>
</head>
<body>
    
    <h4> Resultados das Tentativas das Baterias </h4>
    @foreach ($resultTryBateries as $rtb) 
        <p> Resultado da tentativa da bateria (id)  |   {{ $rtb->id }}   | </p>
        <p> Resultado da tentativa do bateria (touchscreenNum)  |   {{ $rtb->touchscreenNum }}   | </p>
        <p> Resultado da tentativa da bateria (totalError)  |   {{ $rtb->totalError }}   | </p>
        <p> Resultado da tentativa da bateria (totalTime) |   {{ $rtb->totalTime }}   | </p>
        <p> Resultado da tentativa da bateria (touchscreenNum) |   {{ $rtb->touchscreenNum }}   | </p>
        <p> Bateria (id) |   {{ $rtb->try_batery_id }}   | </p>
    <hr>
    </ul>
    @endforeach
       
</body>
</html>