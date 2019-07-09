<?php
function conectar() {
    
    /* Connection */
    $host="localhost";
    $user="root";
    $pass="password";
    $dbname="CalliTest";

    try{
        $pdo=new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);
    }catch(PDOException $e) {
        echo $e->getMessage();
    }
    return $pdo;
}

?>