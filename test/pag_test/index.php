<?php 
    include '../../_include/code_connect.php';
?>

<?php 
        /* Do the protection login and get the name of user */
    include '../../_include/code_session_pesquisador_login.php';
?>

<?php
    
    $display_treinamento=       "none";

    $testeID            =       isset($_SESSION['testeID'])?$_SESSION['testeID']:header("Location:../");

    /* Get teste information */

    $select_command     =       "SELECT * FROM teste WHERE testeID = $testeID";

    $put_select         =       mysqli_query($link, $select_command);

    if(!$put_select) {
        die ("ERRO NA PESQUISA DA TABELA TESTE!");
    }

    /* checking for training */

    $get_teste_info     =       mysqli_fetch_assoc($put_select);

    $treinamento_status =       $get_teste_info['tes_treinamento_status'];

    $qnt_bateria        =       $get_teste_info['tes_qtn_bateria'];



    if($treinamento_status == 1){

        $treinamento            =       true;
        
        $display_treinamento    =       "block";
        
        $forma_treinamento      =       array("lozango", "quadrado", "circulo", "trianguloup", "triangulodown", "trianguloleft", "trianguloright", "trapezio", "trapezio2", "trapezio3");

        $key_rand_forma         =       array_rand($forma_treinamento, 1);
        
        $cor_treinamento        =       array("white", "red", "blue", "yellow", "green", "Orange", "DeepPink", "Violet");

        $rand_cor_treinamento   =       array_rand($cor_treinamento, 1);
        
        /* working with trainamento table */
    
        $select_command         =       "SELECT * FROM treinamento WHERE testeID = $testeID";
        
        $put_select             =       mysqli_query($link, $select_command);
        
        if (!$put_select) {
            die("ERRO NA CONSULTA DA TABELA TREINAMENTO");
        }
        
        $get_treinamento_info   =       mysqli_fetch_assoc($put_select);
        
        $tre_tipo               =       $get_treinamento_info['tre_tipo'];
        
        if($tre_tipo            ==      'forma') {
        
            $id_treinamento      =       $forma_treinamento[$key_rand_forma];
            
            $style_treinamento   =      "white";
            
        } elseif($tre_tipo     ==      'cor') {
            
            $id_treinamento      =       $forma_treinamento[rand(0,9)];

            $style_treinamento  =       $cor_treinamento[$rand_cor_treinamento];

        } elseif($tre_tipo      ==      'forma e cor') {

            $id_treinamento      =       $forma_treinamento[$key_rand_forma];

            $style_treinamento  =       $cor_treinamento[$rand_cor_treinamento];
        }
        
        $tre_qnt_tentativas     =       $get_treinamento_info['tre_qnt_tentativa'];
        
        $tre_tempo_maximo       =       $get_treinamento_info['tre_tempo_tentativa_max'];
        
        $tre_tempo_recompensa   =       $get_treinamento_info['tre_tempo_recompensa'];
        
        $tre_max_acertos        =       $get_treinamento_info['tre_max_acertos'];
        
    } elseif ($treinamento_status   ==  0) {
        $treinamento            =       false;
?>

<?php 

    /* kind of buttons */

        $forma_bateria          =       array("lozango", "quadrado", "circulo", "trianguloup", "triangulodown", "trianguloleft", "trianguloright", "trapezio", "trapezio2", "trapezio3");

        $rand_forma_bateria     =       array_rand($forma_bateria, $qnt_bateria);

        $cor                    =       array("white", "red", "blue", "yellow", "green");

        $rand_cor               =       array_rand($cor, $qnt_bateria);

        $select_command         =       "SELECT * FROM bateria WHERE testeID = $testeID";

        $put_select             =       mysqli_query($link, $select_command);

        if(!$put_select) {
            die("ERRO AO OBTER DADOS DA TABELA bateria");
        }

        $i = 0;

        while($get_bat_info                 =       mysqli_fetch_assoc($put_select)){

            $bat_tipo[$i]                   =       $get_bat_info['bat_tipo'];
            $bat_ordenador[$i]              =       $get_bat_info['bat_ordenador'];
            $bat_qtn_tentativas[$i]         =       $get_bat_info['bat_qtn_tentativas'];
            $bat_tempo_entre_tentativas[$i] =       $get_bat_info['bat_tempo_entre_tentativas'];
            $bat_tempo_tentativa_max[$i]    =       $get_bat_info['bat_tempo_tentativa_max'];
            $bat_max_acertos[$i]            =       $get_bat_info['bat_max_acertos'];
            $bat_tempo_recompensa[$i]       =       $get_bat_info['bat_tempo_recompensa'];

            if($bat_tipo[$i]            ==      'forma') {

                $id[$i] = $forma_bateria[$rand_forma_bateria[$i]];

            } elseif($bat_tipo[$i]      ==      'cor') {

                $style[$i] = $cor[$rand_cor[$i]];

            } elseif($bat_tipo[$i]      ==      'forma e cor') {

                $id[$i]     = $forma_bateria[$rand_forma_bateria[$i]];

                $style[$i]  = $cor[$rand_cor[$i]];
            }
            $i++;
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
        
        <script type="text/javascript">
            function error(){
                
            }
        </script>
        
        <style>
            canvas {
                padding: 0;
                margin: auto;
                display: block;
                width: 120px;
                height: 120px;
                position: absolute;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                z-index: 1;
            }

            #lozango {
                width: 120px;
                height: 120px;
                background: <?php echo $style_treinamento; ?>;
                transform: rotate(45deg);
            }

            #quadrado {
                width: 120px;
                height: 120px;
                background: <?php echo $style_treinamento; ?>;
            }
            
            #retangulo {
                width: 80px;
                height: 120px;
                background: <?php echo $style_treinamento; ?>;
            }

            #circulo {
                width: 120px;
                height: 120px;
                border-radius: 120%;
                background: <?php echo $style_treinamento; ?>;
            }

            #trianguloup {
                width: 120px;
                height: 120px;
                border-left: 125px solid transparent;
                border-right: 125px solid transparent;
                border-bottom: 120px solid <?php echo $style_treinamento; ?>;
                background: black;
            }

            #triangulodown {
                width: 120px;
                height: 120px;
                border-left: 125px solid transparent;
                border-right: 125px solid transparent;
                border-top: 120px solid <?php echo $style_treinamento; ?>;
                background: black;
            }

            #trianguloleft {
                width: 120px;
                height: 120px;
                border-right: 120px solid <?php echo $style_treinamento; ?>;
                border-bottom: 125px solid transparent;
                border-top: 125px solid transparent;
                background: black;
            }

            #trianguloright {
                width: 120px;
                height: 120px;
                border-left: 120px solid <?php echo $style_treinamento; ?>;
                border-bottom: 125px solid transparent;
                border-top: 125px solid transparent;
                background: black;
            }

            #trapezio {
                width: 0px;
                height: 0px;
                border-left: 63px solid transparent;
                border-right: 63px solid transparent;
                border-bottom: 120px solid <?php echo $style_treinamento; ?>;
                background: black;
            }
        </style>
        
    </head>
    
    <body>
    
    <?php 
        
        if($treinamento = true){
     ?>
     
      <!-- get information about training from php and pass to input tag and get the information in the JS --> 
                <canvas id="circulo"></canvas>  
    <?php } elseif ($treinamento = false) {  ?>
        
                <canvas id="<?php echo $id_treinamento ?>"></canvas>
    <?php } ?>
         
        
            <input type="number" name="try_erro" id="try_erro" value="1" hidden>
        
            <button onclick="error()" type="button" class="btn bg" style="z-index:0; width:120%; height:120%;position:absolute;"></button>
    
    </body>
    
</html>
<?php 
    include '../../_include/code_disconnect.php';
?>