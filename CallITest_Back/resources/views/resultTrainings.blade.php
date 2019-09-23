<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>administrators</title>
</head>
<body>
    
    <h4> Resultados dos Treinamentos </h4>
    @foreach ($resultTrainings as $rt) 
        <p> Resultado do treinamento (id)  |   {{ $rt->id }}   | </p>
        <p> Resultado do treinamento (biggestErrorTime)  |   {{ $rt->biggestErrorTime }}   | </p>
        <p> Resultado do treinamento (totalError)  |   {{ $rt->totalError }}   | </p>
        <p> Resultado do treinamento (totalTime) |   {{ $rt->totalTime }}   | </p>
        <p> Resultado do treinamento (touchscreenNum) |   {{ $rt->touchscreenNum }}   | </p>
        <p> Treinamento (id) |   {{ $rt->training_id }}   | </p>
    <hr>
    </ul>
    @endforeach
       
</body>
</html>