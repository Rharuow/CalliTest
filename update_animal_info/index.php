<?php 
    include '../_include/code_connect.php';
?>

<?php 
        /* Do the protection login and get the name of user */
    include '../_include/code_session_pesquisa_login.php';
?>

<?php 

    
    $pesquisaID      = $_SESSION['pesquisaID'];

    /* Get the data about animal */
    
    if(isset($_GET['animalID'])) {
        
        $error              = false;
        
        $_SESSION['animalID']   = $_GET['animalID'];
        
        $animalID             = $_SESSION['animalID'];
        
    }
        $animalID             = $_SESSION['animalID'];
        
        $select_command      = "SELECT * ";
        $select_command     .= "FROM animal ";
        $select_command     .= "WHERE animalID = '$animalID' AND pesquisaID = $pesquisaID";
          
        $put_select = mysqli_query($link,$select_command);
        
        if(!$put_select){
            die("Erro na consulta do banco de dados!");
        }
        
        $get_animal_info     = mysqli_fetch_assoc($put_select); 
        
        $codigo = $get_animal_info['ani_codigo'];
        $nome   = $get_animal_info['ani_nome'];
        $sexo   = $get_animal_info['ani_sexo'];
        $nasc   = $get_animal_info['ani_nasc'];
        $gaiola = $get_animal_info['ani_gaiola'];
        $mark   = $get_animal_info['ani_mark'];
        $obs    = $get_animal_info['ani_obs'];
        
?>

<?php
    if(isset($_GET['animal_codigo'])) {
        $error = false;
        
        $new_codigo = $_GET['animal_codigo'];
        $new_nome   = $_GET['animal_nome'];
        $new_sexo   = $_GET['animal_sexo'];
        $new_nasc   = $_GET['animal_nasc'];
        $new_gaiola = $_GET['animal_gaiola'];
        $new_mark   = $_GET['animal_mark'];
        $new_obs    = $_GET['animal_obs'];
        
        $find_select_command_code  = "SELECT * FROM animal WHERE ani_codigo = '$new_codigo' AND ani_codigo NOT LIKE ('$codigo') AND pesquisaID = $pesquisaID ";
        
        $find_select_command_nome  = "SELECT * FROM animal WHERE ani_nome = '$new_nome' AND ani_nome NOT LIKE ('$nome') AND pesquisaID = $pesquisaID ";
        
        $put_select_find_nome   = mysqli_query($link, $find_select_command_nome);
        
        if(!$put_select_find_nome) {
            die("Erro ao comparar o dado adicionado no DB");
        }
        
        $get_find_rows_nome = mysqli_num_rows($put_select_find_nome);
        
        $put_select_find_code = mysqli_query($link, $find_select_command_code);
        
        
        if(!$put_select_find_code) {
            die("Erro ao comparar o dado adicionado no DB");
        }
        
        $get_find_rows_code = mysqli_num_rows($put_select_find_code);
        
        if($get_find_rows_code > 0){
            $error = true;
            $message_error = "O código escolhido já esta em uso, por favor, escolha outro! ";
        } elseif($get_find_rows_nome > 0) {
            $error = true;
            $message_error = "O nome escolhido já esta em uso, por favor, escolha outro! ";
        } else {
            $error = false;
            
            $update_command = "UPDATE animal ";
            
            $update_command .= "SET ani_codigo = '$new_codigo', ";
            
            $update_command .= "ani_nome = '$new_nome', ";
            
            $update_command .= "ani_sexo = '$new_sexo', ";
            
            $update_command .= "ani_nasc = '$new_nasc', ";
            
            $update_command .= "ani_gaiola = '$new_gaiola', ";
            
            $update_command .= "ani_mark = '$new_mark', ";
            
            $update_command .= "ani_obs = '$new_obs' ";
            
            $update_command .= "WHERE ani_codigo = '$codigo' and pesquisaID = $pesquisaID ";
            
            $put_update_command = mysqli_query($link, $update_command);
            
            if(!$put_update_command){
                die("Problemas na atualização do DB!");
            }
            
            header ("location:../_include/animal_update_confirmation.php");
            
        }
    }

?>

<!DOCTYPE html5>
<html>

    <head>
        <title>CalliText - Atualização de informações do animal</title>
        <meta charset="UTF-8">
        <meta name="description" content="Pag web to make tests in behavior of Callithrix">
        <meta name="keywords" content="CalliTest,UFRN,Pesquisa,callithrix">
        <meta name="author" content="Harysson Soares">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="../_css/style.css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
        <script>
        <?php include '../_scripts/script_btn.js' ?>
        <?php include '../_scripts/scripts_json_animal.js' ?>
        </script>
        
    </head>
    
    <body class="bg">
       
        <div class="container">
       
            <div class="row">
           
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">   
                   
                    <h3 class="text-center well">Editar informações de <?php echo $nome; ?></h3>
            
                </div>
            
            </div>
            
        </div>
        
        
        <div class="container">
       
            <div class="row">
           
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">   

                    <div class='alert alert-warning mt-3' style="<?php if(!$error){ ?>display:none<?php }else { ?>display:block<?php } ?>">
                        <strong>Atenção:</strong> <?php echo $message_error ?>
                    </div>
                    
                </div>
                
            </div>
            
        </div>
        
        
        <div class="container">
       
            <div class="row">
           
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
               
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">   

                    <form action="index.php" method="get">
                       
                        <div class="form-group form-group-lg">
                           
                            <label for="animal_codigo" class="white">Código</label>
                            
                            <input required type="text" class="form-control text-center" id="animal_codigo" name="animal_codigo" value="<?php echo $codigo ?>">
                            
                        </div>

                        <div class="form-group form-group-lg">
                           
                            <label for="animal_nome" class="white">Nome</label>
                            
                            <input required id="animal_nome" type="text" class="form-control text-center mt-3" name="animal_nome" value="<?php echo $nome ?>">
                            
                        </div>

                        <div class="form-group form-group-lg">
                           
                            <label for="animal_sexo" class="white">Sexo</label>
                            
                            <div class="radio">    
                               
                                <label class="white"><input checked id="animal_sexo" type="radio" name="animal_sexo" value="<?php echo $sexo ?>"><?php echo $sexo ?></label>
                            </div>
                                <?php if($sexo == 'F') {
                                    $outrosexo = 'M';
                                } else {
                                    $outrosexo = 'F';
                                } ?>


                            <div class="radio">    
                                <label class="white"><input required id="animal_sexo" type="radio" name="animal_sexo" value="<?php echo $outrosexo ?>"><?php echo $outrosexo ?></label>
                            </div>
                        </div>

                        <div class="form-group form-group-lg">    
                            <label for="animal_nasc" class="white">Ano de Nascimento</label>
                            <input required id="animal_nasc" type="date" class="form-control text-center mt-3" name="animal_nasc" value="<?php echo  $nasc ?>">
                        </div>

                        <div class="form-group form-group-lg">    
                            <label for="animal_gaiola" class="white">Gaiola</label>
                            <input required id="animal_gaiola" type="text" class="form-control text-center mt-3" name="animal_gaiola" value="<?php echo $gaiola ?>">
                        </div>

                        <div class="form-group form-group-lg">
                            <label for="animal_mark" class="white">Marcação</label>
                            <input required id="animal_mark" type="text" class="form-control text-center mt-3" name="animal_mark" value="<?php echo $mark ?>">
                        </div>

                        <div class="form-group form-group-lg">    
                            <label for="animal_obs" class="white">OBS</label>
                            <input id="animal_obs" type="text" class="form-control text-center" name="animal_obs" value="<?php echo $obs ?>">
                        </div>

                       
                        <button type="submit" class="btn btn-success btn-lg" style="width:20%; margin-left:20%;">Salvar</button>

                        <a href="../pesquisa/"><button type="button" id="cancel_update" class="btn btn-danger btn-lg" style="width:20%; margin-left:20%;">Cancelar</button></a>
                        
                    </form>
                    
                </div>
                
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
                
            </div>
            
        </div>
        
    </body>

</html>

<?php 
    include '../_include/code_disconnect.php';
?>
