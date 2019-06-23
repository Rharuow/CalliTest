<?php 
    include '../../_include/code_connect.php';
?>

<?php 
        /* Do the protection login and get the name of user */
    include '../../_include/code_session_pesquisa_login.php';
?>

<?php
    /* Obtendo o identificador do teste que as baterias pertencerão! */
    /* INICIO */
    if(isset($_SESSION['testeID'])){

        $testeID        =   $_SESSION['testeID'];
            } else {
            header("Location:../pag1/");
        }
    /* FIM */

    /* Coletando dados da tabela teste */
    /* INICIO */
    $select_command         =       "SELECT * FROM teste WHERE testeID = $testeID";
    
    $put_select             =       mysqli_query($link, $select_command);

    if(!$put_select) {
        die("ERRO AO CONSULTAR TABELA DE TESTE!");
    }

    $get_test               =       mysqli_fetch_assoc($put_select);

    $tes_nome               =       $get_test['tes_nome'];

    $tes_description        =       $get_test['tes_description'];

    $tes_treinamento_status =       $get_test['tes_treinamento_status'];

    $num_baterias           =       $get_test['tes_qtn_bateria'];

    if($tes_treinamento_status == 0) {
        $display                =       "none";
        
        $treinamento_mesagem    =       "Teste sem Treinamento";
    } else {
        $display                =       "inline";
        
        $treinamento_mesagem    =       "Teste com Treinamento";
    }

    /* FIM */

    /* Fazendo pesquisa na tabela treinamento */
    /* INICIO */
    $select_command         =       "SELECT * FROM treinamento WHERE testeID = $testeID";
    
    $put_select             =       mysqli_query($link, $select_command);

    if(!$put_select) {
        die("erro na consulta da tabela treinamento!");
    }

    $get_query              =       mysqli_fetch_assoc($put_select);

    $tre_tipo               =       $get_query['tre_tipo'];

    $tre_qtn_tentativa      =       $get_query['tre_qnt_tentativa'];

    $tre_tempo_tentativas   =       $get_query['tre_tempo_entre_tentativas'];

    $tre_tempo_max          =       $get_query['tre_tempo_tentativa_max'];

    $tre_tempo_recompensa   =       $get_query['tre_tempo_recompensa'];

    $tre_max_acertos        =       $get_query['tre_max_acertos'];

    /* FIM */

?>

<!DOCTYPE html>
<html>
    <head>
        <title>CalliText - apresentação</title>
        <meta charset="UTF-8">
        <meta name="description" content="Pag web to make tests in behavior of Callithrix">
        <meta name="keywords" content="CalliTest,UFRN,Pesquisa,callithrix">
        <meta name="author" content="Harysson Soares">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="../../_css/style.css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
        <script src="../../_scripts/script_btn.js">
        </script>
    </head>
    
    <body class="bg">
    
        <div class="container">    
       
            <div class="row">
           
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                
              
                    <header class="well">

                        <h3 class="text-center"> Confirmação dos dados do teste</h3>

                    </header>
                    
                </div>
                
            </div>
            
        </div>
        
        <div class="container">    
       
            <div class="row">
           
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                       
                    <h3 class="white text-center">Dados Gerais do teste</h3>
                    
                </div>
                
            </div>        
                    
            <div class="row">
           
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
               
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                          
                    <h3 class="white text-center">Nome:</h3>
                    
                    <p class="alert alert-info text-center" style="font-size:2em;" style="font-size:2em;">  <?php echo $tes_nome; ?> </p>
            
                </div>
                
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
                
            </div>
            
            <div class="row">
           
               <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
               
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                          
                    <h4 class="white text-center">Descrição:</h4>
            
                    <p class="alert alert-info text-center" style="font-size:1.3em;"> <?php echo utf8_encode($tes_description); ?> </p>
                    
                </div>
                
            </div>
            
            <div class="row">
           
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
               
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                          
                    <h4 class="white text-center">Treinamento:</h4>
                    
                    <p class="alert alert-info text-center" style="font-size:2em;"><?php echo $treinamento_mesagem; ?> </p>
            
                </div>
                
            </div>
            
            <div class="row">
           
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
                                          
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                           
                    <h4 class="white text-center">Número de Baterias: </h4>
                    
                    <p class="alert alert-info text-center" style="font-size:2em;"><?php echo $num_baterias; ?> Baterias </p>
                    
                </div>
                
            </div>
            
        </div>
        
        <div class="container" id="treinamento" style="display:<?php echo $display;?>">
            
            <div class="row">
           
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
               
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                
                   <h3 class="white text-center">Dados do treinamento</h3>
            
                </div>
                
            </div>   
            
            <div class="row">
           
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
               
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                  
                    <h4 class="white text-center">Tipo: </h4>
                    
                    <p class="alert alert-success text-center" style="font-size:2em;"><?php echo $tre_tipo; ?> </p>

                </div>
                
            </div>   

               
            <div class="row">
           
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
               
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                    
                    <h4 class="white text-center">Quantidade de tentativas: </h4>

                   <p class="alert alert-success text-center" style="font-size:2em;"><?php echo $tre_qtn_tentativa; ?> </p>
                   
                </div>
                
            </div>   

            <div class="row">
            
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
               
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                       
                    <h4 class="white text-center">Tempo entre tentativas: </h4>
            
                    <p class="alert alert-success text-center" style="font-size:2em;"><?php echo $tre_tempo_tentativas; ?> Segundos </p>
                   
                </div>
                
            </div>   

            <div class="row">
            
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
               
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                           
                    <h4 class="white text-center">Tempo máximo de cada tentativa: </h4>
            
                    <p class="alert alert-success text-center" style="font-size:2em;"><?php echo $tre_tempo_max; ?> Segundos </p>
               
                </div>
                
            </div>   
   
            <div class="row">
            
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
           
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                           
                    <h4 class="white">Tempo para recompensa: </h4>
            
                    <p class="alert alert-success text-center" style="font-size:2em;"><?php echo $tre_tempo_recompensa; ?> Segundos </p>
               
                </div>
                
            </div>   

            <div class="row">
            
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
           
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                           
                    <h4 class="white text-center">Acertos para o sucesso do treinamento: </h4>
               
                    <p class="alert alert-success text-center" style="font-size:2em;"><?php echo $tre_max_acertos; ?> </p>
               
                </div>
                
            </div>
            
        </div>
        
        <?php for ($i = 1; $i <= $num_baterias; $i++){ 
                    $select_command         =       "SELECT * FROM bateria WHERE testeID = $testeID AND bat_ordenador = $i ORDER BY bat_ordenador ";

                    $put_select             =       mysqli_query($link, $select_command);

                    if(!$put_select) {
                        die("Erro na consulta da tabela bateria");
                    }

                    $get_query              =       mysqli_fetch_assoc($put_select);

                    $bat_tipo               =       $get_query["bat_tipo"];

                    $bat_qtn_tentativas     =       $get_query["bat_qtn_tentativas"];

                    $bat_tempo_tentativas   =       $get_query['bat_tempo_entre_tentativas'];

                    $bat_tempo_max          =       $get_query['bat_tempo_tentativa_max'];

                    $bat_tempo_recompensa   =       $get_query['bat_tempo_recompensa'];

                    $bat_max_acertos        =       $get_query['bat_max_acertos'];
        ?>
                        
        <div class="container" id="bateria_<?php echo $i; ?>">
            
            <div class="row">
            
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
           
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
        
                   <h3 class="white text-center">Dados da Bateria <?php echo $i; ?></h3>
            
                </div>
                
            </div>   
            
            <div class="row">
            
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
           
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                  
                    <h4 class="white text-center">Tipo: </h4>

                    <p class="alert alert-warning text-center" style="font-size:2em;"><?php echo $bat_tipo; ?> </p>               
               
                </div>
                
            </div>   

               
            <div class="row">
            
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
               
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                   
                    
                    <h4 class="white text-center">Quantidade de tentativas: </h4>

                    <p class="alert alert-warning text-center" style="font-size:2em;"><?php echo $bat_qtn_tentativas; ?> </p>
               
                </div>
                
            </div>   

            <div class="row">
            
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
           
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                          
                           
                    <h4 class="white text-center">Tempo entre tentativas: </h4>
            
                    <p class="alert alert-warning text-center" style="font-size:2em;"><?php echo $bat_tempo_tentativas; ?> </p>
               
                </div>
                
            </div>   

            <div class="row">
            
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
           
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                           
                    <h4 class="white text-center">Tempo máximo de cada tentativa: </h4>
            
                    <p class="alert alert-warning text-center" style="font-size:2em;"><?php echo $bat_tempo_max; ?> </p>
               
                </div>
                
            </div>   
   
            <div class="row">
            
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
           
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                           
                    <h4 class="white text-center">Tempo para recompensa: </h4>
            
                    <p class="alert alert-warning text-center" style="font-size:2em;"><?php echo $bat_tempo_recompensa; ?> </p>
               
                </div>
                
            </div>   

            <div class="row">
            
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
           
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                           
                    <h4 class="white text-center">Acertos para o sucesso da bateria: </h4>
               
                    <p class="alert alert-warning text-center" style="font-size:2em;"><?php echo $bat_max_acertos; ?> </p>
                </div>
                
            </div>
            
        </div>

        <?php } ?>
    
        <div class="container mt-5 mb-5">
            
            <div class="row mb-5">

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">

                        <a href="confirmation.php"><button class="btn btn-success btn-lg float-right">Confirmar</button></a>

                    </div>    

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">

                        <a href="drop_all.php"><button class="btn btn-danger btn-lg">Cancelar</button></a>

                    </div>
                          
            </div>
            
        </div>            
                                                    
    </body>
</html>
<?php 
    include '../../_include/code_disconnect.php';
?>
