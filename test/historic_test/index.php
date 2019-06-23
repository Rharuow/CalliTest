<?php 
    include '../../_include/code_connect.php';
?>

<?php 
        /* Do the protection login and get the name of user */
    include '../../_include/code_session_pesquisa_login.php';
?>

<?php
    
    $display_treinamento=       "none";

    $display_baterias   =       "none";
    
    /* Obtendo o nome do animal a ser testado */

    $animalID           =      $_SESSION['animalID'];

    $select_command     =       "SELECT * FROM animal WHERE animalID = $animalID";

    $put_select         =       mysqli_query($link, $select_command);

    if(!$put_select) {
        die ("ERRO AO OBTER NOME DO ANIMAL");
    }

    $get_animal         =       mysqli_fetch_assoc($put_select);

    $ani_nome           =       $get_animal['ani_nome'];

?>

<?php

    $pesquisaID = $_SESSION['pesquisaID'];

        /* Search table Teste */
    $select_command             =           "SELECT * FROM teste WHERE pesquisaID = $pesquisaID";

    $put_select                 =           mysqli_query($link, $select_command);

    if(!$put_select) {
        die("ERRO NA CONSULTA DA TABELA teste");
    }

    $get_num_testes                 =           mysqli_num_rows($put_select);

    if($get_num_testes == 0){
        $display2               =       "none";
        $mensagem               =       "Não há teste cadastrado, você será redirecionado de volta para criar um teste!";
        
        header("Refresh: 6; url=../../test/");
    } else {
            $display1               =       "none";
            $i = 1;
            while($get_info_teste             =           mysqli_fetch_assoc($put_select)){
            
            $checked[$i]                    =       "";
                
            $ID[$i]                         =       $get_info_teste['testeID'];

            if(isset($_POST['testeID']) and $ID[$i] == $_POST['testeID']) {
                    $checked[$i]            =       "checked";
            }
        
            $nome[$i]                       =       $get_info_teste['tes_nome'];
            $description[$i]                =       $get_info_teste['tes_description'];
            $treinamento_status[$i]         =       $get_info_teste['tes_treinamento_status'];
            $qnt_baterias[$i]               =       $get_info_teste['tes_qtn_bateria'];
            
            if($treinamento_status[$i] == 1) {
                $treinamento[$i]            =   "Sim";
            } else {
                $treinamento[$i]            =   "Não";
            }
            $i++;
        }
    }

        /*   Pegar nome do pesquisa   */
    
        $select_command             =       "SELECT * FROM pesquisa WHERE pesquisaID = $pesquisaID";
        
        $put_select                 =           mysqli_query($link, $select_command);
        
        if(!$put_select){
            die("ERRO NA CONSULTA DA TABELA pesquisa");
        }
        
        $get_pesquisa            =           mysqli_fetch_assoc($put_select);
        
        $pes_nome                   =           $get_pesquisa['pes_nome'];

?>

<?php
    if(isset($_POST['testeID'])) {
        
        $display_baterias   =       "block";                          
                                  
        $testeID            =       $_POST['testeID'];
        
    /* Tabela teste */    
        $select_command     =       "SELECT * FROM teste WHERE testeID = $testeID ";
                             
        $put_select         =       mysqli_query($link, $select_command);
                             
        if(!$put_select) {
            die("ERRO NA BUSCA DA TABELA teste");
        }
                             
        $get_teste        =       mysqli_fetch_assoc($put_select);
        
    /* Tabela bateria */                         
        $select_command     =       "SELECT * FROM bateria WHERE testeID = $testeID ";
                             
        $put_select         =       mysqli_query($link, $select_command);
                             
        if(!$put_select) {
            die("ERRO NA BUSCA DA TABELA bateria");
        }
                             
        $get_num_bat        =       mysqli_num_rows($put_select);
        
        $i = 1;                     
                             
        while ($get_baterias            =   mysqli_fetch_assoc($put_select)) {
            $get_ordem_bateria[$i]      =   $get_baterias['bat_ordenador'];
            $get_tipo[$i]               =   $get_baterias['bat_tipo'];
            $get_num_tentativas[$i]     =   $get_baterias['bat_qtn_tentativas'];
            $get_temp_tentativas[$i]    =   $get_baterias['bat_tempo_entre_tentativas'];
            $get_temp_max[$i]           =   $get_baterias['bat_tempo_tentativa_max'];
            $get_max_acertos[$i]        =   $get_baterias['bat_max_acertos'];
            $get_temp_recompensa[$i]    =   $get_baterias['bat_tempo_recompensa'];
            $i++;
        }
        
        /* tabela treinamento */
        
        if($get_teste['tes_treinamento_status'] == 1) {
        
        $display_treinamento = "block";
            
        $select_command     =       "SELECT * FROM treinamento WHERE testeID = $testeID ";
                             
        $put_select         =       mysqli_query($link, $select_command);
                             
        if(!$put_select) {
            die("ERRO NA BUSCA DA TABELA treinamento");
        }
                             
        $get_treinamento        =       mysqli_fetch_assoc($put_select);
            
        $get_tipo_tre               =   $get_treinamento['tre_tipo'];
        $get_num_tentativas_tre     =   $get_treinamento['tre_qnt_tentativa'];
        $get_temp_tentativas_tre    =   $get_treinamento['tre_tempo_entre_tentativas'];
        $get_temp_max_tre           =   $get_treinamento['tre_tempo_tentativa_max'];
        $get_max_acertos_tre        =   $get_treinamento['tre_max_acertos'];
        $get_temp_recompensa_tre    =   $get_treinamento['tre_tempo_recompensa'];
        
        } else {
            $display_treinamento = "none";
        }
    }
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
        <script src="../../_scripts/events.js">
        </script>
    </head>
    
    <body class="bg">
    
        <div class="container" style="display:<?php echo $display1; ?>; height:20%; margin-top:20%;">
        
            <div class="row">
           
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    
                    <div class="alert alert-danger">
                     
                        <h3 class="text-center w-100" style="font-size:2em; padding:1%;">Desculpe!</h3>
                        
                        <p class="text-center" style="font-size:1.6em; padding:2%; position:relative;"><?php echo $mensagem;?>.</p>
                      
                    </div>
            
                </div>
                
            </div>
            
        </div>
        
        <div class="container mt-5 mb-5" style="display:<?php echo $display2; ?>;">
               
            <div class="row mb-5">
           
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
               
                        <div class="well">

                            <h4 class="text-center" style="font-size:2em;"><?php echo $pes_nome ?></h4>

                            <h5 class="text-center" style="font-size:1.6em;"> Selecione o teste para <?php echo $ani_nome; ?> </h5>

                        </div>
                
                    </div>
                    
                </div>
          
            <form method="post">
               
                <table class="table table-striped table-dark">
                   
                    <thead>
                        <tr>
                          <th scope="col" class="text-center" style="font-size:1.4em;">#</th>
                          <th scope="col" class="text-center" style="font-size:1.4em;">Nome</th>
                          <th scope="col" class="text-center" style="font-size:1.4em;">Descrição</th>
                          <th scope="col" class="text-center" style="font-size:1.4em;">Treinamento</th>
                          <th scope="col" class="text-center" style="font-size:1.4em;">Número de Baterias</th>
                        </tr>
                    </thead>

                    <tbody>
                       <?php for($i = 1; $i <= $get_num_testes; $i++) {  ?>
                    <tr>
                        <th scope="row"><input required name="testeID" <?php echo $checked[$i]; ?> type="radio" value="<?php echo $ID[$i]; ?>"></th>

                        <td class="text-center" style="font-size:1.4em;"><?php echo $nome[$i]; ?></td>
                        <td class="text-center" style="font-size:1.4em;"><?php echo utf8_encode($description[$i]) ?></td>
                        <td class="text-center" style="font-size:1.4em;"><?php echo $treinamento[$i]; ?></td>
                        <td class="text-center" style="font-size:1.4em;"><?php echo $qnt_baterias[$i]; ?></td>
                    </tr>                    
                    <?php } ?>
                     </tbody>
                </table>
                            
                <button formaction="index.php" class="btn border border-ligh text-light btn-info btn-lg" style="width:24%; margin-left:7%;">Detalhes</button>
                
                <button formaction="../configurar_teste/" class="btn btn-success border border-ligh text-center btn-lg" style="width:24%; margin-left:7%;">Confirmar</button>
                
                <a href="../"><button type="button" class="btn btn-danger border border-ligh btn-lg" style="width:24%; margin-left:7%;">Voltar</button></a>
            
            </form>
            
            <section id="details_treinamento" style="display:<?php echo $display_treinamento; ?>; margin-top:20px;">
                
                <table id="table_treinamento" class="table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl table table-dark">
                        <thead>
                           <tr>
                               <th scope="col" style="font-size:1.4em;" class="text-center w-50">Atributos</th>
                               <th scope="col" style="font-size:1.4em;" class="text-center w-50">Treinamento</th>
                           </tr>
                           
                          </thead>
                          
                          <tbody>
                            <tr id="tipo_treinamento">
                              <th scope="row" style="font-size:1.4em;" class="text-center w-50">Tipo</th>
                              <td style="font-size:1.4em;" class="text-center w-50"><?php echo $get_tipo_tre; ?></td>
                            </tr>
                            
                            <tr id="qnt_tentativas_treinamento">
                                <th scope="row" style="font-size:1.4em;" class="text-center w-50">Número de Tentativas</th>
                                <td style="font-size:1.4em;" class="text-center w-50"><?php echo $get_num_tentativas_tre ?></td>
                            </tr>
                            
                            <tr id="tempo_tentativas_treinamento">
                                <th scope="row" style="font-size:1.4em;" class="text-center w-50">Tempo entre tentativas</th>
                                <td style="font-size:1.4em;" class="text-center w-50"><?php echo $get_temp_tentativas_tre; ?></td>
                            </tr>
                            
                            <tr id="tempo_maximo_treinamento">
                                <th scope="row" style="font-size:1.4em;" class="text-center w-50">Tempo Máximo</th>
                                  <td style="font-size:1.4em;" class="text-center w-50"><?php echo $get_temp_max_tre; ?></td>
                            </tr>
                            
                            <tr id="acertos_maximos_treinamento">
                              <th scope="row" style="font-size:1.4em;" class="text-center w-50">Acertos máximos</th>
                                  <td style="font-size:1.4em;" class="text-center w-50"><?php echo $get_max_acertos_tre; ?></td>
                            </tr>
                            
                            <tr id="tempo_recompensa_treinamento">
                                <th scope="row" style="font-size:1.4em;" class="text-center w-50">Tempo para recompensa</th>
                                <td style="font-size:1.4em;" class="text-center w-50"><?php echo $get_temp_recompensa_tre; ?></td>
                            </tr>
                        </tbody>
                        
                    </table>
                
            </section>
            
            <section id="details_baterias" style="display:<?php echo $display_baterias; ?>">
                   
                    <table id="table_bateria" class="table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl table-striped table">
                        <thead>
                           <tr>
                               <th scope="col" style="font-size:1.4em;" class="text-center white">Atributos</th>
                               <th scope="col" style="font-size:1.4em;" colspan="<?php echo $get_num_bat; ?>" class="text-center white">Baterias</th>
                           </tr>
                           
                            <tr>
                                <th scope="col" style="font-size:1.4em;" class="text-center white">Ordem</th>
                                <?php for ($i = 1; $i <= $get_num_bat ; $i++) { ?>   
                                    <th scope="col" style="font-size:1.4em;" class="text-center white"><?php echo $i; ?></th>
                                <?php } ?>
                            </tr>
                          </thead>
                          <tbody>
                            <tr id="tipo_bateria">
                              <th scope="row" style="font-size:1.4em;" class="text-center">Tipo</th>
                              <?php for ($i = 1; $i <= $get_num_bat ; $i++) { ?>
                              <td style="font-size:1.4em;" class="text-center"><?php echo $get_tipo[$i]; ?></td>
                              <?php } ?>
                            </tr>
                            
                            <tr id="qnt_tentativas_bateria">
                                <th scope="row" style="font-size:1.4em;" class="text-center white">Número de Tentativas</th>
                                <?php for ($i = 1; $i <= $get_num_bat ; $i++) { ?>
                                  <td style="font-size:1.4em;" class="white text-center"><?php echo $get_num_tentativas[$i]; ?></td>
                              <?php } ?>
                            </tr>
                            
                            <tr id="tempo_tentativas_bateria">
                                <th scope="row" style="font-size:1.4em;" class="text-center">Tempo entre tentativas</th>
                                <?php for ($i = 1; $i <= $get_num_bat ; $i++) { ?>
                                  <td style="font-size:1.4em;" class="text-center"><?php echo $get_temp_tentativas[$i]; ?></td>
                              <?php } ?>
                            </tr>
                            
                            <tr id="tempo_maximo_bateria">
                                <th scope="row" style="font-size:1.4em;" class="text-center white">Tempo Máximo</th>
                                <?php for ($i = 1; $i <= $get_num_bat ; $i++) { ?>
                                  <td style="font-size:1.4em;" class="white text-center"><?php echo $get_max_acertos[$i]; ?></td>
                              <?php } ?>
                            </tr>
                            
                            <tr id="acertos_maximos_bateria">
                              <th scope="row" style="font-size:1.4em;" class="text-center">Acertos máximos</th>  
                                <?php for ($i = 1; $i <= $get_num_bat ; $i++) { ?>
                                  <td style="font-size:1.4em;" class="text-center"><?php echo $get_max_acertos[$i]; ?></td>
                              <?php } ?>
                            </tr>
                            
                            <tr id="tempo_recompensa_bateria">
                                <th scope="row" style="font-size:1.4em;" class="text-center white">Tempo para recompensa</th>
                                <?php for ($i = 1; $i <= $get_num_bat ; $i++) { ?>
                                  <td style="font-size:1.4em;" class="white text-center"><?php echo $get_temp_recompensa[$i]; ?></td>
                              <?php } ?>
                            </tr>
                        </tbody>
                        
                    </table>
                    
                
            </section>
            
            
            
        </div>
    </body>
    
</html>

<?php 
    include '../../_include/code_disconnect.php';
?>