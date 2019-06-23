<!DOCTYPE html5>
<html>

    <head>
        <title>CalliText - Confirmation update animal</title>
        <meta charset="UTF-8">
        <meta name="description" content="Pag web to make  Confirmation update animal">
        <meta name="keywords" content="CalliTest,UFRN,Pesquisa,callithrix">
        <meta name="author" content="Harysson Soares">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="../_css/style.css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    
    <body class="bg">
        
       <script>
            $(document).ready(function(){
                $("div").slideDown(1000);
            });
        </script>
        
        <div class="container" style="position:absolute; width:94%; left:3%; right:3%; height: 10%; top:40%; bottom:40%;">
            
            <div class="alert alert-success text-center alert-lg" style="display:none">
                <strong style="font-size:2em">Feito!</strong><h3> Os dados foram atualizados com Sucesso!</h3>
            </div>
            
            <?php
                header("Refresh: 4;url=../pesquisa/");
            ?>
             
        </div>
    </body>
    
    
</html>