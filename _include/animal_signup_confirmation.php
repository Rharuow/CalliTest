<!DOCTYPE html5>
<html>

    <head>
        <title>CalliText - montando a pesquisa</title>
        <meta charset="UTF-8">
        <meta name="description" content="Pag web to make tests in behavior of Callithrix">
        <meta name="keywords" content="CalliTest,UFRN,Pesquisa,callithrix">
        <meta name="author" content="Harysson Soares">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="../_css/style.css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
        <script>
        <?php include '../_scripts/script_btn.js' ?>
        </script>
    </head>
    
    <body class="bg">
        
       <script>
            $(document).ready(function(){
                $("div").slideDown(1000);
            });
        </script>
        
        <div class="container" style="position:absolute; width:94%; left:3%; right:3%; height: 10%; top:40%; bottom:40%;">
            <div class="alert alert-success text-center" style="display:none">
                <strong>Feito!</strong> Animal adionado com sucesso!
            </div>
            <?php
                header("Refresh: 2;url=../pesquisa/index.php");
            ?>
             
        </div>
    </body>
    
    
</html>