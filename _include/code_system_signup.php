<?php 
if(isset($_POST['user-signup'])) {
        $user   = $_POST['user-signup'];
        $psw    = $_POST['psw-signup'];
        $psw2   = $_POST['psw-signup2'];

        
        /* prevent errors */
        
        $command_select_psw = "Select pes_senha From pesquisa where pes_senha = '{$psw}'";
        
        $put_select_psw = mysqli_query($link, $command_select_psw);
        
        if (!$put_select_psw){
            die("Desculpe, houve um erro na consulta do banco de dados. Problema com confirmação do psw na linha 19");
        }
        
        $verify_psw = mysqli_num_rows($put_select_psw);

        
        $command_select_user = "Select pes_nome From pesquisa where pes_nome = '{$user}'";
        
        $put_select_user = mysqli_query($link, $command_select_user);
        
        if(!$put_select_user){
            die("Desculpe, houve um erro na consulta do banco de dados. Problema com confirmação do user na linha 30");
        }
        
        $verify_user = mysqli_num_rows($put_select_user);
        
        if($verify_psw == 1) {
            $message_psw_signup = '<span style="color:red;">Essa senha não pode ser usada, por favor escolha outra.</span>';
        } elseif($verify_user == 1) {
            $message_user_signup = '<span style="color:red;">Nome de usuário já existe, por favor use outro nome.</span>';
        } elseif($psw != $psw2){
                $message_psw_not_confirmed = '<span style="color:red;">Senhas não conferem, tente realizar o cadastro novamente!</span>';

        } else {
        /*  make signup */
        
            $insert_command  = "INSERT INTO pesquisa (pes_nome, pes_senha) VALUES ('$user', '$psw')";

            $put_insert = mysqli_query($link,$insert_command);
            
            if(!$put_insert) {
                die ("Erro na entrada do banco de dados.");
            }

            if ($put_insert){
                $message_signup = "<span style='color:green'>Usuário cadastrado com Sucesso!</span>";
            } else {
                $message_singup = "<span style='color:red'>Problemas com cadastro do usuário!</span>";
            }
        
        }
    }
?>