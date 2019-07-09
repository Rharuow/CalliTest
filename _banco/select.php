
<pre>
<?php
include("connection.php");

$pdo=conectar();

$buscarAdm = $pdo->prepare("SELECT * FROM administrador");

$buscarAdm->execute();

$linha = $buscarAdm->fetchAll(PDO::FETCH_OBJ);

foreach($linha as $listar) {
    echo "<p>$listar->nome</p>";
}

/*
$linha = $buscarAdm->fetchAll/*Substitui o while*//*(PDO::FETCH_ASSOC);

foreach($linha as $listar) {
    echo "<p>$listar[nome]</p>";
}

var_dump($linha);

while($linha = $buscarAdm->fetch(PDO::FETCH_ASSOC)){
    echo $linha["nome"];
}

var_dump($linha);
*/
?>


</pre>