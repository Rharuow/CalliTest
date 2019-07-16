<?php

    require_once '../Crud.php';
    
    $crud   = new Crud();
    $ID     = filter_input(INPUT_GET, 'ID', FILTER_SANITIZE_SPECIAL_CHARS);
    $crud->deletDB("administrador", "ID=?", array($ID));
    
    echo "Dado deletado com sucesso";