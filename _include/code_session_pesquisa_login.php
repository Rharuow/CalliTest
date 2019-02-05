<?php 
 /* $_SESSION[] */
    session_start();
    
    if($_SESSION['pesquisaID']) {
        $pesquisaID = $_SESSION['pesquisaID'];
        
        $select_command     = "SELECT * ";
        $select_command     .= "FROM pesquisa ";
        $select_command     .= "WHERE pesquisaID = $pesquisaID";
        
        $put_select = mysqli_query($link, $select_command);
        
        if(!$put_select){
            die("Erro na consulta do banco de dados!");
        }
        
        $get_user_name     = mysqli_fetch_assoc($put_select); 
        
        
    } else {
        header("location:../");
    }
?>