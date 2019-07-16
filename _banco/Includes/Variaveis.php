<?php
    
/** @var type $_POST */
if(isset($_POST['ID'])){
        $ID = filter_input(INPUT_POST,'ID', FILTER_SANITIZE_SPECIAL_CHARS);
    }elseif (isset ($_GET['ID'])) {
        $ID = filter_input(INPUT_GET,'ID', FILTER_SANITIZE_SPECIAL_CHARS);
        echo "<p>$ID</p>";
    }else {
        $ID = "";
    }

    if(isset($_POST['nome'])){
        $nome = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    }elseif (isset ($_GET['nome'])) {
        $nome = filter_input(INPUT_GET,'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        echo "<p>$nome</p>";
    }else {
        $nome = "";
    }
            
    if(isset($_POST['senha'])){
        $senha = filter_input(INPUT_POST,'senha', FILTER_SANITIZE_SPECIAL_CHARS);
    }elseif (isset ($_GET['senha'])) {
        $senha = filter_input(INPUT_GET,'senha', FILTER_SANITIZE_SPECIAL_CHARS);
        echo "<p>$senha</p>";
    }else {
        $senha = "";
    }
    
    if(isset($_POST['sexo'])){
        $sexo = filter_input(INPUT_POST,'sexo', FILTER_SANITIZE_SPECIAL_CHARS);
    }elseif (isset ($_GET['sexo'])) {
        $sexo = filter_input(INPUT_GET,'sexo', FILTER_SANITIZE_SPECIAL_CHARS);
        echo "<p>$sexo</p>";
    }else {
        $sexo = "";
    }

echo "Variáveis setadas";