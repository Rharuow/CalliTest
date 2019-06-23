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

    /* Identificando a quantidade de bateria configurada no teste! */
    /* INICIO */
    $select_command         =       "SELECT tes_qtn_bateria FROM teste WHERE testeID = $testeID";
    
    $put_select             =       mysqli_query($link, $select_command);

    if(!$put_select) {
        die("ERRO AO CONSULTAR TABELA DE TESTE!");
    }

    $get_num_bateria        =       mysqli_fetch_assoc($put_select);

    $num_baterias           =       $get_num_bateria['tes_qtn_bateria'];
    
    /* FIM */
    
?>

<?php
/* Loop para pegar os valores de cada bateria */

/* INCIO */

    for ($i = 1;$i <= $num_baterias; $i++){
            
        /* Capturando o valor de cada bateria */
        /* INICIO */
        
        if(isset($_POST["bat$i"."_tipo"])) {
            $bat_tipo                   =       $_POST["bat$i"."_tipo"];
            $bat_tempo_tentativa_max    =       $_POST["bat$i"."_tempo_tentativa_max"];
            $bat_qnt_tentativa          =       $_POST["bat$i"."_qnt_tentativa"];
            $bat_tempo_entre_tentativas =       $_POST["bat$i"."_tempo_entre_tentativa"];
            $bat_max_acertos            =       $_POST["bat$i"."_max_acertos"];
            $bat_tempo_recompensa       =       $_POST["bat$i"."_tempo_recompensa"];
            $testeID                    =       $_SESSION["testeID"];
            $ordem_bateria              =       $_POST["bat_ordenador"];
        /* FIM */
            
        /* Montando a linha de código SQL para inserir os dados na tabela bateria */
        /* INICIO */
            $insert_command             =       "INSERT INTO bateria (bat_tipo, bat_tempo_tentativa_max, bat_qtn_tentativas, bat_tempo_entre_tentativas, bat_max_acertos, bat_tempo_recompensa, testeID, bat_ordenador) ";
            
            $insert_command             .=      "VALUES ('$bat_tipo', $bat_tempo_tentativa_max, $bat_qnt_tentativa, $bat_tempo_entre_tentativas, $bat_max_acertos, $bat_tempo_recompensa, $testeID, $ordem_bateria)";
        /* FIM */
            $put_insert                 =       mysqli_query($link, $insert_command);
            
            if(!$put_insert) {
                die("ERRO AO INSERIR OS DADOS NA TABELA BATERIA");
            }
                
        }
    }

    
    /* Adquirindo a ordem da bateria cadastrado */

    /* INICIO */

    $select_command         =           "SELECT * FROM bateria WHERE testeID = $testeID";

    $put_select             =           mysqli_query($link, $select_command);

    if(!$put_select) {
        die("ERRO AO CONSULTAR A TABELA DE BATERIA");
    }

        $ordem        =       array();

    while ($get_bat_ordenador = mysqli_fetch_array($put_select)){
        
        $ordem[]        =       $get_bat_ordenador['bat_ordenador'];
    }

    $num_linhas         =       mysqli_num_rows($put_select);
    

    /* FIM */


?>

<!DOCTYPE html5>
<html>

<head>
    <title>CalliText - Página 2</title>
    <meta charset="UTF-8">
    <meta name="description" content="Pag 2">
    <meta name="keywords" content="CalliTest,UFRN,Pesquisa,callithrix">
    <meta name="author" content="Harysson Soares">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../_css/style.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../../_scripts/events.js"></script>

</head>

<body class="bg">

    <div class="container">
   
        <div class="row mt-5">
   
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
   
                <header class="well">

                <h3 class="text-center"> Configurando as baterias</h3>

                </header>
    
            </div>
            
        </div>
        
    </div>
    
<?php
    
    /* Verificar se todas as baterias foram cadastradas */
    /* INICIO */
    if($num_linhas < $num_baterias) {
    
    /* Loop para criar a configuração de cada bateria */
    for($i=1; $i<=$num_baterias; $i++){
        
                 /* Loop para conferir quais baterias foram configuradas */
        if(isset($ordem)){
            for($j=0; $j < count($ordem); $j++) {
                if($ordem[$j] ==  $i) {
                    $display = "none";
                } 
            }
        }
        
?>

    <div class="container mb-5">
   
        <div class="row mt-5">
   
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
      
                <div id="div_num_<?php echo $i; ?>" class="form-group" style="display:<?php echo $display; ?>;">
                   
                    <h4 class="well text-center"> <strong>Bateria <?php echo $i; ?></strong></h4>
                    
                </div>
                   
            </div>
                   
        </div>
                
    </div>
                    
<form action="index.php" method="post" class="form-group-lg" style="display:<?php echo $display; ?>;">

    <div class="container mt-5">

        <div class="row">

            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6"> 

                <label class="white text-center w-100" for="bat<?php echo $i; ?>_tipo" style="height:60px; font-size:1.5em;">Escolha uma modalidade de treinamento</label>

                <select required class="form-control text-center" id="bat<?php echo $i; ?>_tipo" name="bat<?php echo $i; ?>_tipo" style="width:80%; margin-left:60px;">

                    <option value="forma">Forma</option>
                    <option value="cor">Cor</option>
                    <option value="forma e cor">Forma e cor</option>

                </select>

            </div>

            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">

                <label class="white text-center w-100" for="bat<?php echo $i; ?>_tempo_tentativa_max" style="height:60px; font-size:1.5em;">Tempo máximo por tentativa (em segundos)</label>

                <input required type="number" class="form-control text-center" max="240" min="1" id="bat<?php echo $i; ?>_tempo_tentativa_max" name="bat<?php echo $i; ?>_tempo_tentativa_max" style="width:40%; margin-left:30%">

            </div>

        </div>

    </div>


    <div class="container mt-5">

        <div class="row">

            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">

                <label class="white text-center w-100" for="bat<?php echo $i ?>_qnt_tentativa" style="height:60px; font-size:1.5em;">Número total de tentativas</label>
                
                <input required type="number" onblur="getTrysBateria()" class="form-control text-center input_num_tentativas" max="20" min="1" id="bat<?php echo $i ?>_qnt_tentativa" name="bat<?php echo $i ?>_qnt_tentativa" style="width:40%; margin-left:30%">
                
            </div>
            
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
               
                <label class="white text-center w-100" for="bat<?php echo $i ?>_tempo_entre_tentativa" style="height:60px; font-size:1.5em;">Intervalo entre tentativas (em segundos)</label>
                
                <input required type="number" class="form-control text-center" max="60" min="1" id="bat<?php echo $i ?>_tempo_entre_tentativa" name="bat<?php echo $i ?>_tempo_entre_tentativa" style="width:40%; margin-left:30%">
                
            </div>
            
        </div>
        
    </div>


    <div class="container mt-5">
       
        <div class="row">
           
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
               
                <label class="white text-center w-100" for="bat<?php echo $i ?>_tempo_recompensa" style="height:60px; font-size:1.5em;">Intervalo de recompensa (em segundos)</label>
                
                <input required type="number" class="form-control text-center" max="240" min="1" id="bat<?php echo $i ?>_tempo_recompensa" name="bat<?php echo $i ?>_tempo_recompensa" style="width:40%; margin-left:30%">
                
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
               
                <label class="white text-center w-100" for="bat<?php echo $i ?>_max_acertos" style="height:60px; font-size:1.5em;">Número máximo de acertos</label>
                
                <input required type="number" class="form-control text-center num_acertos" max="20" min="1" id="bat<?php echo $i ?>_max_acertos" name="bat<?php echo $i ?>_max_acertos" style="width:40%; margin-left:30%">
                
            </div>
            
        </div>
        
    </div>

    <div class="container mt-5">    
       
        <div class="row">
           
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    
                <input hidden type="number" id="num_bateria" value="<?php echo $num_baterias; ?>">
                
                <input type="number" name="bat_ordenador" id="bat_ordenador" hidden value="<?php echo $i ?>">

                <button id="botao_<?php $i ?>" type="submit" class="btn btn-success btn-lg" style="margin:20px; width:20%; margin-left:40%;">Salvar</button>
                
            </div>
        </div>
    </div>

</form>

    
<?php
    $display = "inline";
    }
} else {
?>

    <div class="container">    
       
        <div class="row">
           
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                           

                <div id="baterias_cadastradas" class="alert alert-success text-center" style="width:94%; margin-left:3%; height:30%; margin-top:20%; padding-top:5%;">

                    <strong style="font-size:1.5em; padding:1%; position:relative;">Suas baterias foram salvas com sucesso!</strong>

                    <p style="font-size:1.4em; padding:2%; position:relative;">Clique no botão "Prosseguir" para confirmar a criação do seu teste!</p>

                    <a href="../pag3/"><button class="btn btn-success btn-lg" type="button" id="next_pag_test" style="width:30%;">Prosseguir <i class="glyphicon glyphicon-forward"></i></button></a>

                </div>
                
            </div>
            
        </div>
        
    </div>

<?php } ?>
</body>

</html>

<?php 
    include '../../_include/code_disconnect.php';
?>