<?php
    session_start();

    include '../../_include/code_connect.php';
?>

<?php 
    $testeID    =   $_SESSION['testeID'];

    if(isset($_POST['drop'])) {
        
        $delete_command       =       "DELETE FROM bateria WHERE testeID = $testeID";
        
        $put_delete           =         mysqli_query($link, $delete_command);
        
        if(!$put_delete) {
            die("erro ao deletar baterias");
        }
        
        $delete_command       =       "DELETE FROM treinamento WHERE testeID = $testeID";
        
        $put_delete           =         mysqli_query($link, $delete_command);
        
        if(!$put_delete) {
            die("erro ao deletar treinamento");
        }
        
        $delete_command       =       "DELETE FROM teste WHERE testeID = $testeID";
        
        $put_delete           =         mysqli_query($link, $delete_command);
        
        if(!$put_delete) {
            die("erro ao deletar teste");
        }
        
        header("location:../");
        
    }
?>

<!DOCTYPE html5>
<html>

<head>
    <title>CalliText - perfil do pesquisador</title>
    <meta charset="UTF-8">
    <meta name="description" content="Pag web to make tests in behavior of Callithrix">
    <meta name="keywords" content="CalliTest,UFRN,Pesquisa,callithrix">
    <meta name="author" content="Harysson Soares">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../_css/style.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        <?php include '../../_scripts/script_btn.js' ?>
        <?php include '../../_scripts/scripts_json_animal.js' ?>
        <?php include '../../_scripts/events.js' ?>
    </script>

</head>

    <body class="bg">

        <div class="container">
            
            <div class="row">
           
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                    <div class="alert alert-warning" style="position:relative; top:320px">
                        <h5 class="text-center" style="font-size:1.8em;"><strong class="text-center">ATENÇÃO!</strong></h5><p class="text-center" style="font-size:1.8em;">Você deseja apagar toda a configuração do teste? </p> 
                    </div>
            
                </div>
                
            </div>
                   
        <form action="drop_all.php" method="post">
                  
            <div class="row">
           
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">

                        <input hidden name="drop" id="drop">

                        <button class="btn btn-success btn-lg" style="position:relative; width:30%; top:330px; left:35%;">APAGAR</button>
                
                </div>
                        
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">

                        <button class="btn btn-danger btn-lg" formaction="index.php" style="position:relative; width:30%; top:330px; left:35%;">VOLTAR</button>
            
                </div>
                
            </div>
            
        </form>    
            
        </div>

    </body>
    
</html>