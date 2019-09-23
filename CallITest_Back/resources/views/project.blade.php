<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>administrators</title>
</head>
<body>
    
    <h3>Projetos</h3>

        @foreach ($projects as $p)  
            <h4>Administrador Relacionados ao projetos {{ $p->name }}</h4>
            <ul>
                <li> Adiministrador | {{ $p->administrators->name }} </li>
            </ul>
            <h4>Membros Relacionados ao projetos {{ $p->name }}</h4>
            <ol>
            @foreach ( $p->member as $m) 
                <li> Membros  |  {{ $m->name }}   | </li>
            @endforeach
            </ol>
            <ol>
            <h4>Testes Relacionados ao projetos {{ $p->name }}</h4>
            @foreach ( $p->tests as $t) 
                <li> Testes |   {{ $t->name }}   | </li>
            @endforeach
            </ol>
            <ol>
            <h4>Anamais Relacionados ao projetos {{ $p->name }}</h4>
            @foreach ( $p->animal as $a) 
                <li> |   {{ $a->name }}   | </li>
            @endforeach
            </ol>
            <ol>
            <hr>
        @endforeach
            </ul>

</body>
</html>