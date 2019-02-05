<?php 
    include '../../_include/code_connect.php';
?>

<?php 
        /* Do the protection login and get the name of user */
    include '../../_include/code_session_pesquisa_login.php';
    
?>

<?php
    
    if(isset($_SESSION['testeID'])){
    
    $testeID        =   $_SESSION['testeID'];
        } else {
        header("Location:../pag1/");
    }

    /* Colocar na tabela teste as variáveis do treinamento determinada pelo pesquisa */

    if(isset($_GET['tre_tipo'])) {
        
        /*  Recebendo os dados vindos do formulário */
        /* INICIO */
        $tipo                   =   $_GET['tre_tipo'];
        $qnt_tentativas         =   $_GET['tre_qnt_tentativa'];
        $intervalo_tentativa    =   $_GET['tre_tempo_entre_tentativa'];
        $intervalo_recompensa   =   $_GET['tre_tempo_recompensa'];
        $max_acertos            =   $_GET['tre_max_acertos'];
        $tempo_max_tentativa    =   $_GET['tre_tempo_tentativa_max'];
        /* FIM */
        
        /* Inserindo no banco de dados os dados recebidos pelo formulário */
        
        /* INICIO */
        $insert_command     =   "INSERT INTO treinamento (tre_tipo, tre_qnt_tentativa, tre_tempo_entre_tentativas, tre_tempo_recompensa, tre_max_acertos, tre_tempo_tentativa_max, testeID)";
        
        $insert_command     .=  "VALUES ('$tipo', $qnt_tentativas, $intervalo_tentativa, $intervalo_recompensa, $max_acertos, $tempo_max_tentativa, $testeID)";
        
        $put_insert         =   mysqli_query($link, $insert_command);
        
        /* FIM */
        
        /* Conferir se os dados foram adicionados com sucesso */
        
        /* INICIO */
        if(!$put_insert){
            die("ERRO AO INSERIR OS DADOS NA TABELA TREINAMENTO!");
        }
        /* FIM */
        
        /* Redirecionando para próxima pagina localizada na pasta "../pag2/ */
        
        header("Location:../pag2/");
    }

    
?>

<!DOCTYPE html5>
<html>

<head>
    <title>CalliText - Montando Treinamento</title>
    <meta charset="UTF-8">
    <meta name="description" content="Pag web to creat a training">
    <meta name="keywords" content="CalliTest,UFRN,Pesquisa,callithrix">
    <meta name="author" content="Harysson Soares">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../_css/style.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../../_scripts/script_btn.js"></script>
    <script src="../../_scripts/events.js"></script>

</head>


<body class="bg">
    
    <h3 class="white" id="teste"></h3>

    <div class="container">
   
        <div class="row">
   
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
   
                <header class="well">
        
                    <h3 class="text-center"> Configuração do treinamento</h3>
    
                </header>
    
            </div>
    
        </div>
    
    </div>
       
    <form class="form-group form-group-lg" action="index.php" class="" method="get">

        <div class="container">

            <div class="row">

                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6"> 

                    <label class="white text-center" for="tre_tipo" style="font-size:1.5em; height:60px; width:50%; margin-left:25%;">Escolha uma modalidade de treinamento</label>

                    <select required class="form-control" id="tre_tipo" name="tre_tipo" style="width:30%; margin-left:35%; padding-left:auto;">

                        <option value="forma" style="width:50%;">Forma</option>
                        <option value="cor">Cor</option>
                        <option value="forma e cor">Forma e cor</option>

                    </select>

                </div>

                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">

                    <label class="white text-center" for="tre_tempo_tentativa_max" style="font-size:1.5em; height:60px; width:50%; margin-left:25%;">Tempo máximo por tentativa (em segundos)</label>

                    <input required type="number" class="form-control text-center" max="480" min="1" id="tre_tempo_tentativa_max" name="tre_tempo_tentativa_max" style="width:30%; margin-left:35%">

                </div>

            </div>
            
        </div>

        <div class="container mt-5">

            <div class="row mt-5">

                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <label class="white text-center" for="tre_qnt_tentativa" style="font-size:1.5em; height:60px; width:50%; margin-left:25%;">Número total de tentativas</label>

                    <input onblur="getTrys()" required type="number" class="form-control text-center" max="20" min="1" id="tre_qnt_tentativa" name="tre_qnt_tentativa" style="width:40%; margin-left:30%">
                </div>
                
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                   
                    <label class="white text-center" for="tre_tempo_entre_tentativa" style="font-size:1.5em; height:60px; width:50%; margin-left:25%;">Intervalo entre cada tentativas (em segundos)</label>

                    <input required type="number" class="form-control text-center" max="60" min="1" id="tre_tempo_entre_tentativa" name="tre_tempo_entre_tentativa" style="width:40%; margin-left:30%">
                    
                </div>
                
            </div>
            
        </div>

        <div class="container mt-5">
           
            <div class="row mt-5 mb-5">
               
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                   
                    <label class="white text-center" for="tre_tempo_recompensa" style="font-size:1.5em; height:60px; width:50%; margin-left:25%;">Intervalo de recompensa (em segundos)</label>

                    <input required type="number" class="form-control text-center" max="120" min="1" id="tre_tempo_recompensa" name="tre_tempo_recompensa" style="width:40%; margin-left:30%">
                    
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                   
                    <label class="white text-center" for="tre_max_acertos" style="font-size:1.5em; height:60px; width:50%; margin-left:25%;">Número máximo de acertos</label>

                    <input required type="number" class="form-control text-center" max="20" min="1" id="tre_max_acertos" name="tre_max_acertos" style="width:40%; margin-left:30%">
                    
                </div>
                
            </div>
            
        </div>
        
        <div class="container mt-5">
           
            <div class="row mt-5 mb-5">
               
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                
                    <button type="submit" style="width:20%; margin-left:40%;" class="btn btn-success btn-lg">Continuar</button>

                </div>
               
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">   
                   
                    <form action="../pag1/delete_test.php" method="post">

                        <input type="number" id="test_ID" name="test_ID" value="<?php echo $testeID; ?>" hidden>

                        <input type="number" id="pesquisa_ID" name="pesquisa_ID" value="<?php echo $pesquisaID; ?>" hidden>

                        <button name="cancel" id="cancel" type="submit" style="width:20%; margin-left:40%;" class="btn btn-danger btn-lg">Cancelar</button>

                    </form>
                    
                </div>
                
            </div>

        </div>
        
    </form>
        
</body>


</html>

<?php 
    include '../../_include/code_disconnect.php';
?>