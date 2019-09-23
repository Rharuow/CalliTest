<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>administrators</title>
</head>
<body>
    
    <h3>Testes</h3>

        @foreach ($tests as $t) 
            <h3>Informações dos testes</h3>
            <ul>
            <li> <strong> Nome: </strong>  {{ $t->name }}   </li>
            <h4> Baterias </h4>
            @foreach ($t->bateries as $b) 
               <p> Bateria  |   {{ $b->id }}   | </p>
            <hr>
            </ul>
            @endforeach
            <ul>
            <h4> Treinamentos </h4>
            @foreach ($t->trainings as $t) 
                <p> Treinamento  |   {{ $t->id }}   | </p>
            <hr>
            </ul>
            @endforeach
        @endforeach
</body>
</html>