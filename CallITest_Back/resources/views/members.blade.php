<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>administrators</title>
</head>
<body>
    
        <h3>Informações de Membros</h3>
        <ul>
        @foreach ($members as $m)  
            <li>Nome:  {{ $m->name }} </li>
            <li>Senha:  {{ $m->psw }} </li>
            <li>Sexo:  {{ $m->sex }} </li>
            <li>CPF:  {{ $m->CPF }} </li>
            <li>RG:  {{ $m->RG }} </li>
            <li>Matricula:  {{ $m->registration }} </li>
            <li>Curso:  {{ $m->course }} </li>
            <li>Administrador:  {{ $m->administrators }}->name </li>
            <h4> Projetos que   {{ $m->name }}   está vinculado</h4>
            <ol>
            @foreach ( $m->project as $p) 
                <li> |   {{ $p->name }}   | </li>
            @endforeach
            </ol>
            <hr>
        @endforeach
            </ul>

</body>
</html>