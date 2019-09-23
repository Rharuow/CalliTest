<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>administrators</title>
</head>
<body>
    
    <h3>Animais</h3>

        @foreach ($animals as $a) 
            <h3> Informações dos animais</h3>
            <ul>
            <li> <strong> Nome: </strong>  {{ $a->name }}   </li>
            <li> <strong> Código: <strong>   {{ $a->code }}  </li>
            <li> <strong> Sexo: <strong>   {{ $a->sex }}  </li>
            <li> <strong> Marcação: <strong>   {{ $a->marking }}  </li>
            <li> <strong> Gaiola: <strong>   {{ $a->cage }}  </li>
            <li> <strong> Data de Nascimento: <strong>   {{ $a->birthday }}  </li>
            <li> <strong> OBS: <strong>   {{ $a->OBS }}  </li>
            <h4> Projetos </h4>
            @foreach ($a->project as $p) 
               <p> Projeto  |   {{ $p->name }}   | </p>
            <hr>
            </ul>
            @endforeach
        @endforeach
</body>
</html>