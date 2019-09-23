<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>administrators</title>
</head>
<body>
    <h4> Resultados das Baterias </h4>
    @foreach ($resultBateries as $rb) 
        <p> Resultado da bateria (id)  |   {{ $rb->id }}   | </p>
        <p> Resultado da bateria (biggestErrorTime)  |   {{ $rb->biggestErrorTime }}   | </p>
        <p> Resultado da bateria (totalError)  |   {{ $rb->totalError }}   | </p>
        <p> Resultado da bateria (totalTime) |   {{ $rb->totalTime }}   | </p>
        <p> Resultado da bateria (touchscreenNum) |   {{ $rb->touchscreenNum }}   | </p>
        @foreach ($batery->where('id',$rb->batery_id) as $b) 
            <h3>Informações das Baterias</h3>
            <ul>
            <li> <strong> ID: </strong>  {{ $b->id }}   </li>
            <li> <strong> tryNum: </strong>  {{ $b->tryNum }}   </li>
            <li> <strong> tryTime: </strong>  {{ $b->tryTime }}   </li>
            <li> <strong> errorTime: </strong>  {{ $b->errorTime }}   </li>
            <li> <strong> rewardTime: </strong>  {{ $b->rewardTime }}   </li>
            <li> <strong> showingTime: </strong>  {{ $b->showingTime }}   </li>
            </ul>
        @endforeach

    <hr>
    </ul>
    @endforeach
</body>
</html>