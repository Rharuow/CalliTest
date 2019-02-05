<?php 
    include '../../_include/code_connect.php';
?>

<?php 
        /* Do the protection login and get the name of user */
    include '../../_include/code_session_pesquisa_login.php';
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

    <div class="alert alert-success" style="position:absolute; height10%; width:94%; left:3%; top:45%;">
        <h4 class="text-center"><strong>Tudo pronto!</strong></h4><p class="text-center">Você cadastrou o teste e poderá usá-lo para qualquer Animal!</p>
    </div>
    
    <?php header("Refresh: 3, url=../../test"); ?>
   
    </body>
</html>