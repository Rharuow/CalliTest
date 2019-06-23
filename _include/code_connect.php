<?php 
    $server = 'localhost';
    $user = 'root';
    $psw = '';
    $db = 'callitest';

    $link = mysqli_connect($server, $user, $psw, $db);

    if (!$link){
        
        die('Erro na conexão com o banco de dados.');
    }
?>