<?php

        /* Make a connection with db */
    include '../_include/code_connect.php';

        /* Do the protection login and get the name of user */
    include '../_include/code_session_pesquisa_login.php';
        /* if there is some animal registred by user, show the list animal, if there isn't show the message ask the make a signup */
    include '../_include/code_verify_signup_animal.php';

        /* signup animal */
    include '../_include/code_signup_animal.php';

    $select_command = "SELECT * ";
    $select_command .="FROM animal ";
    $select_command .=" WHERE pesquisaID = $pesquisaID ";;

    $put_select     = mysqli_query($link, $select_command);

    if(!$put_select){
        die("Erro na consulta do Banco de dados para verificar a tabela animal");
    }

?>

<!DOCTYPE html5>
<html>

    <head>
        <title>CalliText - perfil da pesquisa</title>
        <meta charset="UTF-8">
        <meta name="description" content="Pag web to make tests in behavior of Callithrix">
        <meta name="keywords" content="CalliTest,UFRN,Pesquisa,callithrix">
        <meta name="author" content="Harysson Soares">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="../_css/style.css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
        <script src="../_scripts/script_btn.js">
        </script>
        
    </head>
    
    <body class="bg">

        <div class="container deks mt-5" id="div_botao_logout">
           
           <div class="row">
                
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                
                    <a href="../logout/" class="btn btn-danger text-center float-right" style="width:25%;font-size: 1.5em;">
                          <span class="glyphicon glyphicon-log-out" style=""></span> Logout
                    </a>
                
                </div>
                
            </div>
            
        </div>
       
        <div class="container desk mt-5" id="div_header">
           
           <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
               
                    <header class="well">

                        <h4 class="text-center" style="font-size:2em;"> Login realizado na <?php echo $get_user_name['pes_nome'] ?></h4>

                    </header>
                    
               </div>

            </div>
            
        </div>
        
        <div class="container desk mt-5" id="div_botoes_azuis">
           
            <div class="row">
                
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                   
                    <button id="botao_mostrar_animais" type="button" class="btn btn-primary float-right" style="font-size:2em; width:40%; border-color: aliceblue; border-width: thick;">Animais <br> cadastrados</button>
                    
                </div>
                
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                   
                    <button id="botao_cadastrar_animal" type="button" class="btn btn-primary" style="font-size:2em; width:40%; border-color: aliceblue; border-width: thick;">Cadastrar <br> animais</button>
                    
                </div>
                
            </div>
            
        </div>

        <?php 
            $get_num_animal     =       mysqli_num_rows($put_select);
        
            if($get_num_animal > 0) {
        ?>
               
        <div class="container desk mt-5" id="lista_animais" style="display:none;">

          <?php
                $i = 0;
            while($get_animal   =   mysqli_fetch_assoc($put_select)) { 
                $i++;
            ?>
       
            <form>
                 
                <div class="row" style="border:solid; margin-top:30px; margin-bottom:30px;">

                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">

                                <input type="button" class="btn btn-danger btn-lg" style="width:30%; margin-left:35%; margin-bottom:20px; margin-top:20px;" name="animal" id="nome_animal_<?php echo $i; ?>" value="<?php echo $get_animal['ani_nome'];?>">

                                <table class="table table-striped table-dark">

                                      <tbody>

                                        <tr>

                                            <th class="text-center" scope="row">Código</th>

                                            <td class="text-center" id="tb_codigo_animal">

                                            <?php echo $get_animal['ani_codigo'];?>

                                            </td>

                                        </tr>

                                        <tr>

                                          <th class="text-center" scope="row">Sexo</th>

                                          <td class="text-center" id="tb_sexo_animal">

                                          <?php echo $get_animal['ani_sexo'];?>

                                          </td>

                                        </tr>

                                        <tr>

                                          <th class="text-center" scope="row">Data de Nascimento</th>

                                          <td class="text-center" id="tb_nascimento_animal">

                                          <?php echo $get_animal['ani_nasc'];?>

                                          </td>

                                        </tr>

                                        <tr>

                                          <th class="text-center" scope="row">Gaiola</th>

                                          <td class="text-center" id="tb_gaiola_animal">

                                          <?php echo $get_animal['ani_gaiola'];?>

                                          </td>

                                        </tr>

                                        <tr>

                                          <th class="text-center" scope="row">Marcação</th>

                                          <td class="text-center" id="tb_marcacao_animal">

                                          <?php echo $get_animal['ani_mark'];?>

                                          </td>

                                        </tr>

                                        <tr>

                                          <th class="text-center" scope="row">Observação</th>

                                          <td class="text-center" id="tb_obs_animal">

                                          <?php echo $get_animal['ani_obs'];?>

                                          </td>

                                        </tr>

                                      </tbody>

                                </table>

                                <input hidden name="animalID" id="animalID" type="number" value="<?php echo $get_animal['animalID'];?>"> 
                               
                                <button type="submit" formaction="../update_animal_info/" formmethod="get" class="btn btn-dark btn-lg" style="width:30%; margin-bottom:20px; margin-left:5%;">Editar</button>
                               
                                <button type="submit" formaction="../test/" formmethod="get" class="btn btn-success btn-lg" style="width:30%; margin-bottom:20px;">Realizar teste</button>
                        
                                <button class="btn btn-secundary btn-lg" type="submit" style="width:30%; margin-bottom:20px;">Historico</button>        

                    </div>

                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>

                </div>
                                 
            </form> 
                                  
        <?php } ?>
            
        </div>
       
         <?php } else { ?>
        
        <div class="container mt-5" id="lista_animais" style="display:none;">    
       
            <div class="row">
           
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    
                    <div id="baterias_cadastradas" class="alert alert-warning text-center" style="width:94%; height:auto; padding-top:5%;">

                    <strong style="font-size:1.5em; padding:1%; position:relative;">Desculpe!</strong>

                    <p style="font-size:1.4em; padding:2%; position:relative;">Não há nenhum animal cadastrado nessa pesquisa. Cadastre algum animal para usar as funções do CalliTeste!</p>
                    
                </div>
                    
                </div>
                
            </div>
            
        </div>
        
        <?php } ?>
               
                                  
        <div class="container desk mt-5" id="cadastrar_animais" style="display:none;">
          
            <div class="row">
           
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
                                            
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
               
                    <form action="index.php" method="get">

                        <div class="form-group form-group-lg">
                            <label for="code" class="white">Código</label>
                            <input required type="text" name="code" class="form-control" id="code">
                        </div>

                        <div class="form-group form-group-lg">
                            <label for="name" class="white">Nome</label>
                            <input required type="text" name="name" class="form-control" id="ani_name">
                        </div>

                        <div class="form-group form-group-lg">
                            <label class="white">Sexo</label>
                            <div class="radio">
                                <label class="white"><input required type="radio" name="sex" value="M" checked>M</label>
                            </div>

                            <div class="radio">
                                <label class="white"><input required type="radio" name="sex" value="F">F</label>
                            </div>
                        </div>

                        <div class="form-group form-group-lg">
                            <label for="age" class="white">Data de Nascimento</label>
                            <input required type="date" class="form-control" id="age" name="age">
                        </div>

                        <div class="form-group form-group-lg">
                            <label required for="cage" class="white">Gaiola</label>
                            <input type="text" class="form-control" id="cage" name="cage">
                        </div>

                        <div class="form-group form-group-lg">
                            <label for="mark" class="white">Marcação</label>
                            <input required type="text" class="form-control" id="mark" name="mark">
                        </div>

                        <div class="form-group form-group-lg">
                            <label for="obs" class="white">OBS</label>
                            <input type="text" class="form-control" id="obs" name="obs">
                        </div>

                        <input type="submit" class="btn btn-success btn-lg" value="Cadastrar" style="width:30%; margin-left:35%;">

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