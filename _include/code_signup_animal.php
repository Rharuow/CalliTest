<?php

if(isset($_GET['code'])){
            $name           = $_GET['name'];
            $code           = $_GET['code'];
            $sexo           = $_GET['sex'];
            $age            = $_GET['age'];
            $cage           = $_GET['cage'];
            $mark           = $_GET['mark'];
            $obs            = $_GET['obs'];
            
            $pesquisa    = $_SESSION['pesquisaID'];
    
            $select_command = "SELECT * ";
            $select_command .="FROM animal ";
            $select_command .=" WHERE pesquisaID = $pesquisa ";
            $select_command .=" AND ani_nome = '$name' ";
            $select_command .=" OR ani_codigo = '$code' ";
            $select_command .=" AND pesquisaID = $pesquisa ";
    
            $put_select     = mysqli_query($link, $select_command);

            if(!$put_select){
                die("Erro na consulta do Banco de dados para verificar a tabela animal");
            }
            
    
            $get_animal     =   mysqli_fetch_assoc($put_select);
            
            $ani_name   =   $get_animal['ani_nome'];
    
            $ani_codigo =   $get_animal['ani_codigo'];
    
            if($ani_name or $ani_codigo) {
                $signup_animal_done = true;
                
                header("location:../_include/animal_signup_deny.php");
                
            }else {
                $insert_command     = "INSERT INTO animal (ani_nome, ani_codigo, ani_sexo, ani_nasc, ani_gaiola, ani_mark, ani_obs, pesquisaID) ";
                $insert_command     .= " VALUES ('$name', '$code', '$sexo', '$age', '$cage', '$mark', '$obs', $pesquisa )";
                
                $put_insert     = mysqli_query($link, $insert_command);

                if(!$put_insert){
                    die ("Erro ao adicionar o animal no banco de Dados!");
                } 
                
                header("location:../_include/animal_signup_confirmation.php");
                
                }
    
              
    
            }

?>
