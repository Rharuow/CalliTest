<?php 
    include '../../_include/code_connect.php';
?>

<?php 
        /* Do the protection login and get the name of user */
    include '../../_include/code_session_pesquisa_login.php';
?>

<?php

/* Pegar nome do pesquisa */
/* INICIO */

$select_command     =       "SELECT pes_nome FROM pesquisa WHERE pesquisaID = $pesquisaID ";

$put_select         =       mysqli_query($link, $select_command);

if(!$put_select){
    die("ERRO AO ADQUIRIR ID DO pesquisa!");
}

$get_pesquisa    =       mysqli_fetch_assoc($put_select);

$pes_nome           =       $get_pesquisa['pes_nome'];


    if(isset($_POST['test_ID'])) {
        $testeID        =       $_POST['test_ID'];
    }

    $delet_command      =       "DELETE FROM teste WHERE testeID = $testeID AND pesquisaID = $pesquisaID ";

    $put_delete         =       mysqli_query($link, $delet_command);

    if(!$put_delete){
        die("ERRO AO DELETAR O TESTE!");
    }
    
    header("Refresh: 5;url=index.php");


?>

<!DOCTYPE html5>
<html>

<head>
    <title>CalliText - Redirecionando</title>
    <meta charset="UTF-8">
    <meta name="description" content="Pag web to delete test">
    <meta name="keywords" content="CalliTest,UFRN,Pesquisa,callithrix">
    <meta name="author" content="Harysson Soares">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../_css/style.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    

</head>

<body class="bg">
    

</body>
   
    <div class="alert alert-info" style="height:auto; position:absolute; width: 90%; left:5%; top: 45%;">
        <h3 class="text-center" style="font-size:1.5em;"> O seu teste está sendo reciclado, por favor espere alguns segundos e você será redirecionado! </h3>
    </div>
    
</html>

<?php 
    include '../../_include/code_disconnect.php';
?>