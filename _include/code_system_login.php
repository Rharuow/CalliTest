<?php
    session_start();

    if(isset($_POST['user-login'])){
        $user   = $_POST["user-login"];
        $psw    = $_POST["psw-login"];
        
        $select_command  = "SELECT * ";
        $select_command  .= "FROM pesquisa ";
        $select_command  .= "WHERE pes_nome = '$user' AND pes_senha = '$psw' ";
        
        $put_select     = mysqli_query($link, $select_command);
        
        if(!$put_select) {
            die ("Erro na consulta do banco de dados.");
        }
        
        $verify_user_psw = mysqli_num_rows($put_select);
        
        $get_user = mysqli_fetch_assoc($put_select);
        
        if($verify_user_psw == 0) {
            $message_login_error = "<span style='color:red'>Usuário e senha incorretos!</span>";
        } else {
            $_SESSION['pesquisaID']  = $get_user['pesquisaID'];
            header("location:pesquisa/");
        }
        
    }
?>