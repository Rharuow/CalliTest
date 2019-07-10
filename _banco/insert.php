<pre>
<?php

    include("connection.php");

    /* INSERT */

    $pdo=conectar();
    /* Choose a table */
    $table  =   "administrador";
    /* put the parameters */    
    $id     = $_GET["id"];

    $nome   = $_GET["nome"];

    $senha  = $_GET["senha"];

    $sexo   = $_GET["sexo"];

    /* Prepara o Cadastro */

    $inserir    =   $pdo->prepare("INSERT INTO $table (ID, nome, senha, sexo) VALUES(:id, :nome, :senha, :sexo)");

    /* Validar o cadastro */

    $inserir->bindValue(":id",$id);

    $inserir->bindValue(":nome",$nome);

    $inserir->bindValue(":senha",$senha);

    $inserir->bindValue(":sexo",$sexo);

    $validar=$pdo->prepare("Select * FROM $table WHERE id=? or nome=? or senha=?");
    
    $validar->execute(array($id, $nome, $senha));

    var_dump ($validar);

    if($validar->rowCount() == 0) {
        
    /* Cadastrar */

    $inserir->execute(); 
        
    }

    else {
        echo "<p>Já existe!</p>";
    }

?>
</pre>