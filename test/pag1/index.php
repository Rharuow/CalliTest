<?php 
    include '../../_include/code_connect.php';
?>

<?php 
        /* Do the protection login and get the name of user */
    include '../../_include/code_session_pesquisa_login.php';
?>

<?php

$erro           = 0;

?>

<?php

    if(isset($_GET["nome_teste"])) {
        
        /* Verificando se o pesquisa esta dando um nome válido para o teste */
        
        /* INÍCIO */
        
        $nome               = $_GET["nome_teste"];
        
        $select_command     = "SELECT * FROM teste WHERE pesquisaID = $pesquisaID AND tes_nome = '$nome'";
        
        $put_select         = mysqli_query($link, $select_command);
        
        if(!$put_select) {
            die("Erro na pesquisa de validade para o nome do teste");
        }
        
        $get_query_row      = mysqli_fetch_row($put_select);
        
        if($get_query_row >= 1) {
            $message_error  =   "O nome do teste já existe, por favor escolha outro!";
            $erro           =   1;
        } else {
            
        /* FIM */
        
        /* Adcionar dados na tabela "teste" após clicar em continuar  */

            /* INICIO */
            $new_nome               = $_GET["nome_teste"];

            if ($_GET["description_teste"] == "")   {
            $description = utf8_decode("Não houve descrição!");
            } else {
            $description        = $_GET["description_teste"];
                }

            $qnt_bateria        = $_GET["num_bateria_teste"];
            
            $status_treinamento = $_GET["status_training"];

            $insert_command     = "INSERT INTO teste (tes_nome, tes_description, tes_qtn_bateria, tes_treinamento_status, pesquisaID) ";
            
            $insert_command     .=" VALUES ('$new_nome', '$description', $qnt_bateria, $status_treinamento, $pesquisaID) ";

            $put_insert         = mysqli_query($link, $insert_command);

            if(!$put_insert) {
                die ("Erro ao inserir na tabela de teste");
            }
            /* FIM */
            
                /* Criar variável global SESSION para recuperar o testeID da tabela teste */
            
            /* INICIO */    
            
            $select_command     =   "SELECT * FROM teste WHERE tes_nome = '$new_nome' AND pesquisaID = $pesquisaID ";
                
            $put_select         =   mysqli_query($link, $select_command);
                
            if(!$put_select) {
                die("ERRO AO OBTER O ID DA TABELA TESTE!");
            }
                
            $get_query          =   mysqli_fetch_assoc($put_select);
                
            $_SESSION['testeID']=   $get_query['testeID'];
            
            /* FIM */
            
            /* Encaminhar para página correta após decisão de haver treinamento ou não */
            
            if($status_treinamento == 1 ) {
                
                header("Location:../treinamento/");
                
            }else {
                
                header("Location:../pag2/");
                
            }

        }
            
    }
?>


<!DOCTYPE html5>
<html>

<head>
    <title>CalliText - Criação do teste - Página 2</title>
    <meta charset="UTF-8">
    <meta name="description" content="Pag web to creat teste, the second pag">
    <meta name="keywords" content="CalliTest,UFRN,Pesquisa,callithrix">
    <meta name="author" content="Harysson Soares">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../_css/style.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../../_scripts/events.js"></script>

</head>

<body class="bg" onload="makeGreen()">
   
    <div class="container">
   
        <div class="row mt-5">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">   
    
                <header class="well">

                    <h3 class="text-center" style="font-size:2em;"> Criando um teste</h3>

                </header>
        
            </div>
    
        </div>
    
        <div class="row mt-5">

            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
           
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
               
                <?php if($erro == 1) { ?>
                    <div class="alert alert-warning">
                      <strong>Registro negado!</strong> <?php echo $message_error; ?>
                    </div>

                <?php } ?>

            </div>
            
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
       
        </div>
   
    </div>

    <div class="container">
   
        <div class="row mt-2 mb-5">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-5">
           
                <section id="pagina1">

                    <form action="index.php" method="get">
                        <div class="form-group form-group-lg">
                            <label style="font-size:1.5em;" class="white text-center w-100" for="nome_teste">Escolha um nome para o teste</label>
                            <br>
                            <input required name="nome_teste" id="nome_teste" class="form-control text-center" type="text" placeholder="No máximo 30 caracteres">
                        </div>

                        <div class="form-group form-group-lg">
                            <label style="font-size:1.5em;" class="white text-center w-100" for="description_teste">Faça uma descrição do teste se desejar</label>
                            <br>
                            <textarea name="description_teste" id="description_teste" class="form-control" type="text" placeholder="No máximo 100 caracteres" size="100"></textarea>
                        </div>

                        <div class="form-group form-group-lg">
                            <label style="font-size:1.5em;" class="white text-center w-100" for="num_bateria_teste">Quantas baterias você deseja fazer?</label>
                            <br>
                            <input required min="1" style="width: 20%; margin-left: 40%;" type="number" class="form-control text-center" name="num_bateria_teste" id="num_bateria_teste">
                        </div>

                        <div class="form-group form-group-lg">
                           
                            <p class="white text-center" style="font-size:1.5em;">Você deseja adicionar um treinamento ao teste?</p>

                            <div class="radio">
                                
                                <label style="font-size:1.5em; width:10%; margin-left:45%;" for="input_have_training" id="label_have_training" class="btn btn-danger btn-lg">Sim</label>

                                <input checked name="status_training" hidden onclick="makeGreen()" id="input_have_training" type="radio" value="1">

                            </div>

                            <div class="radio">

                                <label style="font-size:1.5em; width:10%; margin-left:45%; margin-bottom:50px;" for="input_have_training_no" id="label_have_training_no" class="btn btn-danger btn-lg">Não</label>

                                <input name="status_training" hidden id="input_have_training_no" onclick="makeGreen()" type="radio" value="0">

                            </div>
                            
                        </div>  

                            <button type="submit" style="width:25%; border-radius:50px; margin-left:20%;" class="btn btn-success btn-lg">Continuar</button>
                            
                            <a href="../"><button type="button" style="width:25%;margin-right:20%;border-radius:50px;" class="btn btn-danger btn-lg float-right">Cancelar</button></a>

                    </form>

                </section>

            </div>
            
        </div>
        
    </div>

</body>

</html>

<?php 
    include '../../_include/code_disconnect.php';
?>