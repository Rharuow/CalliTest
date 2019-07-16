<?php

include_once '../Conectar.php';
include_once '../Includes/Variaveis.php';
include_once '../Crud.php';

$crud = new Crud();
$crud->insertDB("administrador", "?,?,?,?", array($ID, $nome, $senha, $sexo));

echo 'Cadastro realizado com sucesso';