<?php

    include("connection.php");

    /* INSERT */

    $pdo=conectar();
        
    $id     = $_GET["id"];

    $nome   = $_GET["nome"];

    $senha  = $_GET["senha"];

    $sexo   = $_GET["sexo"];

    /* Prepara o Cadastro */

    $adm    =   $pdo->prepare("INSERT INTO administrador (ID, nome, senha, sexo) VALUES(:id, :nome, :senha, :sexo)");

    /* Validar o cadastro */

    $adm->bindValue(":id",$id);

    $adm->bindValue(":nome",$nome);

    $adm->bindValue(":senha",$senha);

    $adm->bindValue(":sexo",$sexo);

    
    $validar=$pdo->prepare("Select * FROM administrador WHERE id=? or nome=? or senha=?");
    
    $validar->execute(array($id, $nome, $senha));

    var_dump ($validar);

    if($validar->rowCount() == 0) {
        
    /* Cadastrar */

    $adm->execute();    
        
    }

    else {
        echo "<p>Já existe!</p>";
    }

?>