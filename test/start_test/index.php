<?php 
    include '../../_include/code_connect.php';
?>

<?php 
        /* Do the protection login and get the name of user */
    include '../../_include/code_session_pesquisa_login.php';
?>

<?php
    
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
        
        <script type="text/javascript">
            function timeToStart () {
                var count   =   0;
                
                var timeLeft=   5;
                
                function timeDegree () {
                    var timer = timeLeft;
                    
                    if(timer >= 0) {
                    document.getElementById('timer').innerHTML = timer;
                    
                    timeLeft = timeLeft - 1;
                    } else {
                        window.location.href = "../pag_test/";
                    }
                }
                
                setInterval(timeDegree,1000);
                
            }        
        $(document).ready(function(){    
            $("button#start").click(function(){
            $("button#start").hide();
            });
        });
        </script>
        
        <style>
            #start 
        </style>
        
    </head>
    
    <body class="bg">
        
        <div class="container mt-5">    
       
            <div class="row">
           
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        
                    <h3 class="well text-center">Clique no botão "START" e o teste começará em 5 segundos!</h3>
                    
                </div>
                
            </div>
            
        </div>
        
        <div class="container mt-5">    
       
            <div class="row">
           
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
               
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
        
                    <button onclick="timeToStart()" id="start" type="button" style="border-radius:100%; width:150px; height:150px; border: 5px solid white; font-size:2em;" class="btn btn-success">START</button>

                    <h3 style="color:green; font-size:10em; width:50%;" id="timer"></h3>

                </div>
                
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
                
            </div>
                
        </div>
                 
    </body>
</html>

<?php 
    include '../../_include/code_disconnect.php';
?>