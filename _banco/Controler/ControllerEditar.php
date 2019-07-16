<?php

    require_once '../Crud.php';
    
    //Variáveis
    
    $ID = filter_input(INPUT_GET, "ID", FILTER_SANITIZE_SPECIAL_CHARS);
    $nome = filter_input(INPUT_GET, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $senha = filter_input(INPUT_GET, "senha", FILTER_SANITIZE_SPECIAL_CHARS);
    $sexo = filter_input(INPUT_GET, "sexo", FILTER_SANITIZE_SPECIAL_CHARS);
    
    $crud = new Crud();
    
    $crud->updateDB("administrador", "nome=?, senha=?, sexo=?", $ID, array($nome, $senha, $sexo));
    
    echo "Atualização feita com Sucesso";