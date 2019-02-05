<?php 
    include '../_include/code_connect.php';
?>

<?php

        /* Do the protection login and get the name of user */
    include '../_include/code_session_pesquisa_login.php';
?>

<?php
        /* Login of animal to test */
    include '../_include/code_system_login_animal_test.php';
?>

<?php

        /* get name user */
    $select_command     = "SELECT * FROM pesquisa WHERE pesquisaID = $pesquisaID";

    $put_select         = mysqli_query($link, $select_command);

    if(!$put_select) {
        die("Erro ao obter o nome de usuário");
    }

    $get_select         = mysqli_fetch_assoc($put_select);

    $pes_nome           = $get_select['pes_nome'];

?>

<!DOCTYPE html5>
<html>

<head>
    <title>CalliText - Página 1 de teste</title>
    <meta charset="UTF-8">
    <meta name="description" content="The first Pag to test">
    <meta name="keywords" content="CalliTest,UFRN,Pesquisa,callithrix">
    <meta name="author" content="Harysson Soares">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../_css/style.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../_scripts/script_btn.js">
    </script>

</head>

<body class="bg">
    
    <div class="container">
       
       <div class="row mt-5">
           
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
               
                <header class=" well">

                    <h4 class="text-center" style="font-size:2em;"><?php echo $pes_nome; ?></h4>
                    <h4 class="text-center" style="font-size:2em;">Teste para <?php echo $ani_nome; ?></h4>
                    <h4 class="text-center" style="font-size:2em;">Escolha uma opção e siga as instruções!</h4>

                </header>
                
            </div>

       </div>
   
    </div>
    
        <div class="container">
          
           <div class="row">
               
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">   
                   
                    <form action="historic_test/" method="post">

                        <input hidden name="animalID" id="animalID" value="<?php echo $animalID; ?>">

                        <button type="submit" class="btn btn-success" id="btn_teste_configurado" name="btn_teste_configurado" style="font-size:1.8em; width:90%; border:solid; margin-left:5%; margin-top:180px;">Usar teste cadastrado</button>

                    </form>
                
                </div>
                    
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">           
                    
                    <a href="pag1/"><button class="btn btn-warning" id="btn_configurar_teste" name="btn_configurar_teste"  style="font-size:1.8em; width:90%; border:solid; margin-left:5%; margin-top:180px;">Configurar um teste</button></a>
                    
                </div>
                   
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">              
                   
                    <a href="../pesquisa/"> <button class="btn btn-danger" id="btn_cancelar_teste" name="btn_cancelar_teste" style="font-size:1.8em; width:90%; border:solid; margin-left:5%; margin-top:180px;">VOLTAR</button></a>
            
                </div>
                    
            </div>
            
        </div>
              
</body>

</html>

<?php 
    include '../_include/code_disconnect.php';
?>