<?php

    $pesquisa    = $_SESSION['pesquisaID'];
    
    $select_command = "SELECT * ";
    $select_command .= "FROM animal ";
    $select_command .= "WHERE pesquisaID = $pesquisa ";
    $select_command .= "ORDER BY ani_nome";
    
    $put_select     = mysqli_query($link, $select_command);

    if(!$put_select){
        die("Falha na consulta com o bd!");
    }
    
    $verify_animal_signup       =   mysqli_num_rows($put_select);

    $amount_animals             =   mysqli_num_rows($put_select);

?>
