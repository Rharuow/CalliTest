<?php 
    include '../../_include/code_connect.php';
?>

<?php 
        /* Do the protection login and get the name of user */
    include '../../_include/code_session_pesquisa_login.php';
?>

<?php 

    if(isset($_POST['testeID'])){

    $_SESSION['testeID']    =   $_POST['testeID'];

    $testeID                =   $_SESSION['testeID'];

    $pesquisaID          =   $_SESSION['pesquisaID'];

    $animalID               =   $_SESSION['animalID'];
        
        /* Get pesquisa name */
        
        $select_command         =   "SELECT * FROM pesquisa WHERE pesquisaID = $pesquisaID";
        
        $put_select             =   mysqli_query($link, $select_command);
        
        if(!$put_select) {
            die("ERRO AO OBTER O NOME DO pesquisa");
        }
        
        $get_pesquisa_info   =   mysqli_fetch_assoc($put_select);
        
        $get_pesquisa_name   =   $get_pesquisa_info["pes_nome"];
        
    $animalID               =   $_SESSION['animalID'];
    } else {
        header("Location:../historic_test/"); 
        
        /* Get pesquisa name */
        
        $select_command         =   "SELECT * FROM pesquisa WHERE pesquisaID = $pesquisaID";
        
        $put_select             =   mysqli_query($link, $select_command);
        
        if(!$put_select) {
            die("ERRO AO OBTER O NOME DO pesquisa");
        }
        
        $get_pesquisa_info   =   mysqli_fetch_assoc($put_select);
        
        $get_pesquisa_name   =   $get_pesquisa_info["pes_nome"];
        
    $animalID               =   $_SESSION['animalID'];
    }
        /*   Montando a pesquisa no banco de dados   */
    $select_command         =   "SELECT * FROM teste WHERE testeID = $testeID ";

    $put_select             =   mysqli_query($link, $select_command);

    if(!$put_select) {
        die("ERRO NA BUSCA PELA TABELA teste");
    }
        /* Obtendo informações sobre o teste requerido */
    $get_test_info          =   mysqli_fetch_assoc($put_select);

    $get_treinamento_status =   $get_test_info["tes_treinamento_status"];

    if($get_treinamento_status == 1) {
        /*  Configurar informações para o treinamento  */
        
        $select_command         =       "SELECT * FROM treinamento WHERE testeID    =   $testeID";
        
        $put_select             =       mysqli_query($link, $select_command);
        
        if(!$put_select){
            die ("ERRO AO OBRTER DADOS DA TABELA treinamento");
        }
        
        $get_num_baterias       =       mysqli_num_rows($put_select);
        
        $get_treinamento_info   =       mysqli_fetch_assoc($put_select);
        
        $tre_tipo   =       $get_treinamento_info["tre_tipo"];
        
    }

    $select_command         =       "SELECT * FROM bateria WHERE testeID    =   $testeID";
        
    $put_select             =       mysqli_query($link, $select_command);
        
    if(!$put_select){
            die ("ERRO AO OBRTER DADOS DA TABELA bateria");
    }

    $get_num_baterias          =       mysqli_num_rows($put_select);
    
    while ($get_bateria_info   =       mysqli_fetch_assoc($put_select)) {
    
    $bat_tipo[]   =       $get_bateria_info["bat_tipo"];
        
    }

?>

<!-- Depois do Submit -->

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
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
        <script src="../../_scripts/script_btn.js">
        </script>
        <script src="../../_scripts/events.js">
        </script>
        
        <style>
        
            .triangle-up {
                width: 0;
                height: 0;
                border-left: 50px solid transparent;
                border-right: 50px solid transparent;
                border-bottom: 100px solid #fff;
            }          
            .triangle-down {
                width: 0;
                height: 0;
                border-left: 50px solid transparent;
                border-right: 50px solid transparent;
                border-top: 100px solid #fff;
            }
            .circle {
                height: 100px;
                width: 100px;
                background-color: #fff;
                border-radius: 50%;
            }
            .trapezoid {
                border-bottom: 75px solid #fff;
                border-left: 50px solid transparent;
                border-right: 50px solid transparent;
                height: 0;
                width: 150px;
            }
            .triangle-down {
                width: 0;
                height: 0;
                border-left: 50px solid transparent;
                border-right: 50px solid transparent;
                border-top: 100px solid #fff;
            }
            .triangle-left {
                width: 0;
                height: 0;
                border-top: 50px solid transparent;
                border-right: 100px solid #fff;
                border-bottom: 50px solid transparent;
            }
            .triangle-right {
                width: 0;
                height: 0;
                border-top: 50px solid transparent;
                border-left: 100px solid #fff;
                border-bottom: 50px solid transparent;
            }
            .rectangle {
                height: 50px;
                width: 200px;
                background-color: #fff;
            }
            
        </style>
        
    </head>
    
    <body class="bg">
    
    <div class="container">    
       
        <div class="row">
           
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
   
                <h3 class="well text-center"><?php echo $get_pesquisa_name ?> <br> Escolha os parâmetros para o teste</h3>
            
            </div>
            
        </div>
           
    </div>
            
    <div class="container">    
       
               <form method="post">
               
                <!-- definir formas e cores para o treinamneto -->        
                <?php if($get_treinamento_status == 1) { ?>
                      <input hidden id="tipoTreinamento" value="<?php echo $tre_tipo ?>">
                    <?php if($tre_tipo == "forma" or $tre_tipo  == "forma e cor") { ?>  
                        
                        <div class="row">

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">

                                <h4 class="well text-center" style="font-size:1.8em;">Treinamento</h4>

                                <h4 class="white text-center" style="font-size:1.8em;">Selecione as formas</h4>                   

                            </div>

                        </div>
                        
                        <div class="row mt-5">
                           
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center">

                                <label id="label_quadrado" class="white fas fa-square" style="font-size:7em;" for="input_forma_quadrado_treinamento">
                                
                                <input hidden class="forma_treinamento" onclick="selectedFormsTreinamento()" type="checkbox" id="input_forma_quadrado_treinamento" name="input_forma_quadrado_treinamento" value="quadrado"> 
                                
                                </label>
                                
                            </div>

                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center">

                                <label id="label_losango" class="white fas fa-square" style="font-size:7em; transform: rotate(45deg);" for="input_forma_losango_treinamento">
                                    
                                <input hidden class="forma_treinamento" onclick="selectedFormsTreinamento()" type="checkbox" id="input_forma_losango_treinamento" name="input_forma_losango_treinamento" value="losango">
                                     
                                </label>
                                
                            </div>

                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center">

                                <label id="label_triangle_up" class="white triangle-up" for="input_forma_trianguloup_treinamento">
                                      
                                <input hidden class="forma_treinamento" type="checkbox" onclick="selectedFormsTreinamento()" id="input_forma_trianguloup_treinamento" name="input_forma_trianguloup_treinamento" value="trianguloup">
                                
                                </label>

                            </div>

                        </div>

                        <div class="row mt-5">

                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center">      

                                <label id="label_circle" class="white circle" for="input_forma_circulo_treinamento">
                                
                                <input hidden onclick="selectedFormsTreinamento()" class="forma_treinamento" id="input_forma_circulo_treinamento" name="input_forma_circulo_treinamento" type="checkbox" value="circulo">
                                
                                </label>

                            </div>

                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center">

                                <label id="label_trapezoid" class="white trapezoid" for="input_forma_trapezio_treinamento">
                                
                                <input hidden onclick="selectedFormsTreinamento()" id="input_forma_trapezio_treinamento" name="input_forma_trapezio_treinamento" class="forma_treinamento" type="checkbox" value="trapezio">
                                
                                </label>

                            </div>

                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center">

                                <label id="label_triangle_down" class="white triangle-down" for="input_forma_triangulodown_treinamento">
                                
                                <input hidden onclick="selectedFormsTreinamento()" class="forma_treinamento" id="input_forma_triangulodown_treinamento" name="input_forma_triangulodown_treinamento" type="checkbox" value="forma_triangulodown">
                                
                                </label>

                            </div>

                        </div>

                        <div class="row mt-5">

                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center">

                                <label id="label_triangle_left" class="white triangle-left" for="input_forma_trianguloleft_treinamento">
                                
                                <input hidden onclick="selectedFormsTreinamento()" class="forma_treinamento" id="input_forma_trianguloleft_treinamento" name="input_forma_trianguloleft_treinamento" type="checkbox" value="forma_trianguloleft">
                                
                                </label>

                            </div>

                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center">

                                <label id="label_triangle_right" class="white triangle-right" for="input_forma_trianguloright_treinamento">
                                     
                                <input hidden onclick="selectedFormsTreinamento()" class="forma_treinamento" id="input_forma_trianguloright_treinamento" name="input_forma_trianguloright_treinamento" type="checkbox" value="forma_trianguloright">
                                      
                                </label>
                                
                            </div>

                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 mt-5 text-center">

                                <label id="label_rectangle" class="white rectangle" for="input_forma_retangulo_treinamento">
                                       
                                <input hidden onclick="selectedFormsTreinamento()" class="forma_treinamento" id="input_forma_retangulo_treinamento" name="input_forma_retangulo_treinamento" type="checkbox" value="forma_retangulo">
                                        
                                </label>

                            </div>

                        </div>
                        
                        <div class="row mt-5">

                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center">

                                <label id="label_estrela" class="white fas fa-star" style="font-size:7em;" for="input_forma_estrela_treinamento">
                                
                                <input hidden class="forma_treinamento" onclick="selectedFormsTreinamento()" type="checkbox" id="input_forma_estrela_treinamento" name="input_forma_estrela_treinamento" value="estrela"> 
                                
                                </label>
                                
                            </div>

                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center">

                                <label id="label_estrela2" class="white fas fa-star-of-life" style="font-size:7em;" for="input_forma_estrela2_treinamento">
                                    
                                <input hidden class="forma_treinamento" onclick="selectedFormsTreinamento()" type="checkbox" id="input_forma_estrela2_treinamento" name="input_forma_estrela2_treinamento" value="estrela2">
                                     
                                </label>
                                
                            </div>
                            
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center">

                                <label id="label_cruz" class="white fas fa-plus" style="font-size:7em;" for="input_forma_cruz_treinamento">
                                
                                <input hidden class="forma_treinamento" onclick="selectedFormsTreinamento()" type="checkbox" id="input_forma_cruz_treinamento" name="input_forma_cruz_treinamento" value="cruz"> 
                                
                                </label>
                                
                            </div>

                        </div>

                        <div class="row mt-5">

                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center"></div>
                           
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center">

                                <label style="width:100%; font-size:1.4em;" class="white text-center" for="num_formas_treinamento">Quantidade de formas selecionadas</label>
                                
                                <input hidden type="number" class="text-center treinamento" min="1" id="num_formas_treinamento" name="num_formas_treinamento" readonly style="width:auto;">
                                
                                <h4 class="white" id="qnt_form_treinamento"></h4>
                   
                            </div>
                    
                        </div>
                   


                <?php } ?>

                <?php if($tre_tipo  == "cor" or $tre_tipo  == "forma e cor") { ?>  
                       
                       <?php if($tre_tipo  == "cor") { ?>
                                      
                        <div class="row">

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                                         
                               <h4 class="well text-center" style="font-size:1.5em;" onload="CoresTreinamento()">Treinamento</h4>
                
                            </div>
                                    
                        </div>
                                     
                       <?php } ?>
                                        
                        <div class="row mt-5 mb-5">

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">

                                <h4 class="white text-center" style="font-size:1.8em;">Selecione as Cores</h4>

                            </div>

                        </div>

                        <div class="row">

                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">

                                <label id="label_red_black_treinamento" class="btn" for="input_color_red_black_treinamento" style="background:#800000; width:100%; height:40px; font-size:2em;"></label>

                                <input onclick="CoresTreinamento()" id="input_color_red_black_treinamento" name="input_color_red_black_treinamento" type="checkbox" hidden value="#800000">

                            </div>

                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">

                                <label id="label_orange_black_treinamento" class="btn" for="input_color_orange_black_treinamento" style="background:#805300; width:100%; height:40px; font-size:2em;"></label>

                                <input onclick="CoresTreinamento()" id="input_color_orange_black_treinamento" name="input_color_orange_black_treinamento" type="checkbox" hidden>

                            </div>

                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">

                                <label id="label_yellow_black_treinamento" class="btn" for="input_color_yellow_black_treinamento" style="background:#808000; width:100%; height:40px;font-size:2em;"></label>

                                <input id="input_color_yellow_black_treinamento" onclick="CoresTreinamento()" name="input_color_yellow_black_treinamento" type="checkbox" hidden>

                            </div>

                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">

                                <label id="label_green_black_treinamento" class="btn" for="input_color_green_black_treinamento" style="background:#008000; width:100%; height:40px;font-size:2em;"></label>

                                <input id="input_color_green_black_treinamento" onclick="CoresTreinamento()" name="input_color_green_black_treinamento" type="checkbox" hidden>

                            </div>

                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">

                                <label id="label_blue_black_treinamento" class="btn" for="input_color_blue_black_treinamento" style="background:#000080; width:100%; height:40px;font-size:2em;"></label>

                                <input id="input_color_blue_black_treinamento" onclick="CoresTreinamento()" name="input_color_blue_black_treinamento" type="checkbox" hidden>

                            </div>

                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">

                                <label id="label_purple_black_treinamento" class="btn" for="input_color_purple_black_treinamento" style="background:#800080; width:100%; height:40px;font-size:2em;"></label>

                                <input id="input_color_purple_black_treinamento" onclick="CoresTreinamento()" name="input_color_purple_dark_treinamento" type="checkbox" hidden>

                            </div>

                        </div>

                        <div class="row" style="margin-top:50px;">

                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">

                                <label id="label_red_treinamento" class="btn" for="input_color_red_treinamento" style="background:#ff0000; width:100%; height:40px;font-size:2em;"></label>

                                <input id="input_color_red_treinamento" onclick="CoresTreinamento()" name="input_color_red_treinamento" type="checkbox" hidden>

                            </div>

                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">

                                <label id="label_orange_treinamento" class="btn" for="input_color_orange_treinamento" style="background:#ffa500; width:100%; height:40px;font-size:2em;"></label>

                                <input id="input_color_orange_treinamento" onclick="CoresTreinamento()" name="input_color_orange_treinamento" type="checkbox" hidden>

                            </div>

                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">

                                <label id="label_yellow_treinamento" class="btn" for="input_color_yellow_treinamento" style="background:#ffff00; width:100%; height:40px;font-size:2em;"></label>

                                <input id="input_color_yellow_treinamento" onclick="CoresTreinamento()" name="input_color_yellow_treinamento" type="checkbox" hidden>

                            </div>

                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">

                                <label id="label_green_treinamento" class="btn" for="input_color_green_treinamento" style="background:#00ff00; width:100%; height:40px;font-size:2em;"></label>

                                <input id="input_color_green_treinamento" onclick="CoresTreinamento()" name="input_color_green_treinamento" type="checkbox" hidden>

                            </div>

                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">

                                <label id="label_blue_treinamento" class="btn" for="input_color_blue_treinamento" style="background:#0000ff; width:100%; height:40px;font-size:2em;"></label>

                                <input id="input_color_blue_treinamento" onclick="CoresTreinamento()" name="input_color_blue_treinamento" type="checkbox" hidden>

                            </div>  

                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">

                                <label id="label_purple_treinamento" class="btn" for="input_color_purple_treinamento" style="background:#ff00ff; width:100%; height:40px;font-size:2em;"></label>

                                <input id="input_color_purple_treinamento" onclick="CoresTreinamento()" name="input_color_purple_treinamento" type="checkbox" hidden>

                            </div>

                        </div>

                        <div class="row" style="margin-top:50px;">

                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">

                                <label id="label_red_light_treinamento" class="btn" for="input_color_red_light_treinamento" style="background:#ff8080; width:100%; height:40px;font-size:2em;"></label>

                                <input id="input_color_red_light_treinamento" onclick="CoresTreinamento()" name="input_color_red_light_treinamento" type="checkbox" hidden>

                            </div>

                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">

                                <label id="label_orange_light_treinamento" class="btn" for="input_color_orange_light_treinamento" style="background:#ffd280; width:100%; height:40px;font-size:2em;"></label>

                                <input id="input_color_orange_light_treinamento" onclick="CoresTreinamento()" name="input_color_orange_light_treinamento" type="checkbox" hidden>

                            </div>

                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">

                                <label id="label_yellow_light_treinamento" class="btn" for="input_color_yellow_light_treinamento" style="background:#ffff80; width:100%; height:40px;font-size:2em;"></label>

                                <input id="input_color_yellow_light_treinamento" onclick="CoresTreinamento()" name="input_color_yellow_light_treinamento" type="checkbox" hidden>

                            </div>

                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">

                                <label id="label_green_light_treinamento" class="btn" for="input_color_green_light_treinamento" style="background:#80ff80; width:100%; height:40px;font-size:2em;"></label>

                                <input id="input_color_green_light_treinamento" onclick="CoresTreinamento()" name="input_color_green_light_treinamento" type="checkbox" hidden>

                            </div>

                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">

                                <label id="label_blue_light_treinamento" class="btn" for="input_color_blue_light_treinamento" style="background:#8080ff; width:100%; height:40px;font-size:2em;"></label>

                                <input id="input_color_blue_light_treinamento" onclick="CoresTreinamento()" name="input_color_blue_light_treinamento" type="checkbox" hidden>

                            </div>


                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">

                                <label id="label_purple_light_treinamento" class="btn" for="input_color_purple_light_treinamento" style="background:#ff80ff; width:100%; height:40px;font-size:2em;"></label>

                                <input id="input_color_purple_light_treinamento" onclick="CoresTreinamento()" name="input_color_purple_light_treinamento" type="checkbox" hidden>

                            </div>


                        </div>

                        <div class="row">

                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>

                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">

                            <label style="width:100%; font-size:1.4em;" class="white text-center" for="num_cores_treinamento">Quantidade de cores selecionadas</label>
                            
                            <input hidden class="text-center treinamento" id="num_cores_treinamento" name="num_cores_treinamento">

                            <h4 class="white" id="qnt_cores_treinamento" style="width:6%; margin-left:47%;"></h4>
                       
                        </div>

                    </div>

                <?php } ?>

                <?php } ?>       
                
                <?php for($i=0;$i<$get_num_baterias;$i++) { ?>        
                        
                        <input id="qntBateria" hidden value="<?php echo $get_num_baterias; ?>">
                                       
                        <input id="ordemBateria" hidden value="<?php echo $i; ?>">               
                                        
                <?php if($bat_tipo[$i] == "forma" || $bat_tipo[$i]  == "forma e cor") { ?>
                       
                        <h4 class="well text-center" onload="selectedFormsBateria()">Bateria <?php echo $num = $i + 1; ?> </h4>
                      
                        <h4 class="white text-center">Selecione as formas</h4>
                   
                        <div class="row mt-5">
                           
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center">

                                <label class="white fas fa-square label_quadrado_bateria" style="font-size:7em;" for="input_forma_quadrado_bateria<?php echo $i; ?>">
                                
                                <input hidden class="input_forma_quadrado_bateria" id="input_forma_quadrado_bateria<?php echo $i; ?>" onclick="selectedFormsBateria()" type="checkbox" name="input_forma_quadrado_bateria<?php echo $i; ?>" value="quadrado"> 
                                
                                </label>
                                
                            </div>

                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center">

                                <label id="label_losango_bateria" class="white fas fa-square label_losango_bateria" style="font-size:7em; transform: rotate(45deg);" for="input_forma_losango_bateria<?php echo $i; ?>">
                                    
                                <input hidden class="input_forma_losango_bateria" onclick="selectedFormsBateria()" type="checkbox" id="input_forma_losango_bateria<?php echo $i; ?>" name="input_forma_losango_bateria<?php echo $i; ?>" value="losango">
                                     
                                </label>
                                
                            </div>

                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center">

                                <label id="label_triangle_up_bateria" class="white triangle-up label_triangle_up_bateria" for="input_forma_trianguloup_bateria<?php echo $i; ?>">
                                      
                                <input hidden class="input_forma_trianguloup_bateria" type="checkbox" onclick="selectedFormsBateria()" id="input_forma_trianguloup_bateria<?php echo $i; ?>" name="input_forma_trianguloup_bateria<?php echo $i; ?>" value="trianguloup">
                                
                                </label>

                            </div>

                        </div>

                        <div class="row mt-5">

                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center">      

                                <label id="label_circle_bateria" class="white circle label_circle_bateria" for="input_forma_circulo_bateria<?php echo $i; ?>">
                                
                                <input hidden onclick="selectedFormsBateria()" class="input_forma_circulo_bateria" id="input_forma_circulo_bateria<?php echo $i; ?>" name="input_forma_circulo_bateria<?php echo $i; ?>" type="checkbox" value="circulo">
                                
                                </label>

                            </div>

                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center">

                                <label id="label_trapezoid_bateria" class="white trapezoid label_trapezoid_bateria" for="input_forma_trapezio_bateria<?php echo $i; ?>">
                                
                                <input hidden onclick="selectedFormsBateria()" id="input_forma_trapezio_bateria<?php echo $i; ?>" name="input_forma_trapezio_bateria<?php echo $i; ?>" class="input_forma_trapezio_bateria" type="checkbox" value="trapezio">
                                
                                </label>

                            </div>

                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center">

                                <label id="label_triangle_down_bateria" class="white triangle-down label_triangle_down_bateria" for="input_forma_triangulodown_bateria<?php echo $i; ?>">
                                
                                <input hidden onclick="selectedFormsBateria()" class="input_forma_triangulodown_bateria" id="input_forma_triangulodown_bateria<?php echo $i; ?>" name="input_forma_triangulodown_bateria<?php echo $i; ?>" type="checkbox" value="forma_triangulodown">
                                
                                </label>

                            </div>

                        </div>

                        <div class="row mt-5">

                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center">

                                <label id="label_triangle_left_bateria" class="white triangle-left label_triangle_left_bateria" for="input_forma_trianguloleft_bateria<?php echo $i; ?>">
                                
                                <input hidden onclick="selectedFormsBateria()" class="input_forma_trianguloleft_bateria" id="input_forma_trianguloleft_bateria<?php echo $i; ?>" name="input_forma_trianguloleft_bateria<?php echo $i; ?>" type="checkbox" value="forma_trianguloleft">
                                
                                </label>

                            </div>

                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center">

                                <label id="label_triangle_right_bateria" class="white triangle-right label_triangle_right_bateria" for="input_forma_trianguloright_bateria<?php echo $i; ?>">
                                     
                                <input hidden onclick="selectedFormsBateria()" class="input_forma_trianguloright_bateria" id="input_forma_trianguloright_bateria<?php echo $i; ?>" name="input_forma_trianguloright_bateria<?php echo $i; ?>" type="checkbox" value="forma_trianguloright">
                                      
                                </label>
                                
                            </div>

                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 mt-5 text-center">

                                <label id="label_rectangle_bateria" class="white rectangle label_rectangle_bateria" for="input_forma_retangulo_bateria<?php echo $i; ?>">
                                       
                                <input hidden onclick="selectedFormsBateria()" class="input_forma_retangulo_bateria" id="input_forma_retangulo_bateria<?php echo $i; ?>" name="input_forma_retangulo_bateria<?php echo $i; ?>" type="checkbox" value="forma_retangulo">
                                        
                                </label>

                            </div>

                        </div>
                        
                        <div class="row mt-5">

                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center">

                                <label id="label_estrela_bateria" class="white fas fa-star label_estrela_bateria" style="font-size:7em;" for="input_forma_estrela_bateria<?php echo $i; ?>">
                                
                                <input hidden class="input_forma_estrela_bateria" onclick="selectedFormsBateria()" type="checkbox" id="input_forma_estrela_bateria<?php echo $i; ?>" name="input_forma_estrela_bateria<?php echo $i; ?>" value="estrela"> 
                                
                                </label>
                                
                            </div>

                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center">

                                <label id="label_estrela2_bateria" class="white fas fa-star-of-life label_estrela2_bateria" style="font-size:7em;" for="input_forma_estrela2_bateria<?php echo $i; ?>">
                                    
                                <input hidden class="input_forma_estrela2_bateria" onclick="selectedFormsBateria()" type="checkbox" id="input_forma_estrela2_bateria<?php echo $i; ?>" name="input_forma_estrela2_bateria<?php echo $i; ?>" value="estrela2">
                                     
                                </label>
                                
                            </div>

                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center">

                                <label id="label_cruz_bateria" class="white fas fa-plus label_cruz_bateria" style="font-size:7em;" for="input_forma_cruz_bateria<?php echo $i; ?>">
                                    
                                <input hidden class="input_forma_cruz_bateria" onclick="selectedFormsBateria()" type="checkbox" id="input_forma_cruz_bateria<?php echo $i; ?>" name="input_forma_cruz_bateria<?php echo $i; ?>" value="cruz">
                                     
                                </label>

                            </div>

                        </div>

                        <div class="row">

                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center"></div>
                           
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center">

                                <label style="width:100%; font-size:1.4em;" class="white text-center" for="num_formas_bateria<?php echo $i; ?>">Quantidade de formas selecionadas</label>
                                
                                <input type="number" class="text-center num_formas_bateria" min="1" id="num_formas_bateria<?php echo $i; ?>" name="num_formas_bateria<?php echo $i; ?>" readonly style="width:auto;">
                                
                                <h4 class="white output_qnt_bateria"></h4>
                   
                            </div>
                    
                        </div>
                    
                <?php } ?>

                <?php if($bat_tipo[$i]  == "cor" || $bat_tipo[$i]  == "forma e cor") { ?>  
                        
                        <?php if($bat_tipo[$i]  == "cor") { ?>
                        
                        <h4 class="well text-center">Bateria <?php echo $num = $i + 1; ?> </h4>
                        
                        <?php } ?>
                        
                        <h4 class="testeh4 white"></h4>
                        
                        <div class="row mt-5 mb-5">

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">

                                <h4 class="white text-center" style="font-size:1.8em;">Selecione as Cores</h4>

                            </div>

                        </div>

                        <div class="row">

                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">

                                <label id="label_red_black_bateria<?php echo $i; ?>" class="btn label_red_black_bateria" for="input_color_red_black_bateria<?php echo $i; ?>" style="background:#800000; width:100%; height:40px; font-size:2em;"></label>

                                <input onclick="CoresBateria()" class="input_color_red_black_bateria" id="input_color_red_black_bateria<?php echo $i; ?>" name="input_color_red_black_bateria" type="checkbox" value="#800000">

                            </div>

                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">

                                <label id="label_orange_black_bateria<?php echo $i; ?>" class="btn label_orange_black_bateria" for="input_color_orange_black_bateria<?php echo $i; ?>" style="background:#805300; width:100%; height:40px; font-size:2em;"></label>

                                <input onclick="CoresBateria()" id="input_color_orange_black_bateria<?php echo $i; ?>" name="input_color_orange_black_bateria" type="checkbox" hidden>

                            </div>

                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">

                                <label id="label_yellow_black_bateria<?php echo $i; ?>" class="btn label_yellow_black_bateria" for="input_color_yellow_black_bateria<?php echo $i; ?>" style="background:#808000; width:100%; height:40px;font-size:2em;"></label>

                                <input id="input_color_yellow_black_bateria<?php echo $i; ?>" onclick="CoresBateria()" name="input_color_yellow_black_bateria" type="checkbox" hidden>

                            </div>

                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">

                                <label id="label_green_black_bateria<?php echo $i; ?>" class="btn label_green_black_bateria" for="input_color_green_black_bateria<?php echo $i; ?>" style="background:#008000; width:100%; height:40px;font-size:2em;"></label>

                                <input id="input_color_green_black_bateria<?php echo $i; ?>" onclick="CoresBateria()" name="input_color_green_black_bateria" type="checkbox" hidden>

                            </div>

                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">

                                <label id="label_blue_black_bateria<?php echo $i; ?>" class="btn label_blue_black_bateria" for="input_color_blue_black_bateria<?php echo $i; ?>" style="background:#000080; width:100%; height:40px;font-size:2em;"></label>

                                <input id="input_color_blue_black_bateria<?php echo $i; ?>" onclick="CoresBateria()" name="input_color_blue_black_bateria" type="checkbox" hidden>

                            </div>

                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">

                                <label id="label_purple_black_bateria<?php echo $i; ?>" class="btn label_purple_black_bateria" for="input_color_purple_black_bateria<?php echo $i; ?>" style="background:#800080; width:100%; height:40px;font-size:2em;"></label>

                                <input id="input_color_purple_black_bateria<?php echo $i; ?>" onclick="CoresBateria()" name="input_color_purple_dark_bateria" type="checkbox" hidden>

                            </div>

                        </div>

                        <div class="row" style="margin-top:50px;">

                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">

                                <label id="label_red_bateria<?php echo $i; ?>" class="btn label_red_bateria" for="input_color_red_bateria<?php echo $i; ?>" style="background:#ff0000; width:100%; height:40px;font-size:2em;"></label>

                                <input id="input_color_red_bateria<?php echo $i; ?>" onclick="CoresBateria()" name="input_color_red_bateria" type="checkbox" hidden>

                            </div>

                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">

                                <label id="label_orange_bateria<?php echo $i; ?>" class="btn label_orange_bateria" for="input_color_orange_bateria<?php echo $i; ?>" style="background:#ffa500; width:100%; height:40px;font-size:2em;"></label>

                                <input id="input_color_orange_bateria<?php echo $i; ?>" onclick="CoresBateria()" name="input_color_orange_bateria" type="checkbox" hidden>

                            </div>

                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">

                                <label id="label_yellow_bateria<?php echo $i; ?>" class="btn label_yellow_bateria" for="input_color_yellow_bateria<?php echo $i; ?>" style="background:#ffff00; width:100%; height:40px;font-size:2em;"></label>

                                <input id="input_color_yellow_bateria<?php echo $i; ?>" onclick="CoresBateria()" name="input_color_yellow_bateria" type="checkbox" hidden>

                            </div>

                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">

                                <label id="label_green_bateria<?php echo $i; ?>" class="btn label_green_bateria" for="input_color_green_bateria<?php echo $i; ?>" style="background:#00ff00; width:100%; height:40px;font-size:2em;"></label>

                                <input id="input_color_green_bateria<?php echo $i; ?>" onclick="CoresBateria()" name="input_color_green_bateria" type="checkbox" hidden>

                            </div>

                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">

                                <label id="label_blue_bateria<?php echo $i; ?>" class="btn label_blue_bateria" for="input_color_blue_bateria<?php echo $i; ?>" style="background:#0000ff; width:100%; height:40px;font-size:2em;"></label>

                                <input id="input_color_blue_bateria<?php echo $i; ?>" onclick="CoresBateria()" name="input_color_blue_bateria" type="checkbox" hidden>

                            </div>  

                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">

                                <label id="label_purple_bateria<?php echo $i; ?>" class="btn label_purple_bateria" for="input_color_purple_bateria<?php echo $i; ?>" style="background:#ff00ff; width:100%; height:40px;font-size:2em;"></label>

                                <input id="input_color_purple_bateria<?php echo $i; ?>" onclick="CoresBateria()" name="input_color_purple_bateria" type="checkbox" hidden>

                            </div>

                        </div>

                        <div class="row" style="margin-top:50px;">

                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">

                                <label id="label_red_light_bateria<?php echo $i; ?>" class="btn label_red_light_bateria" for="input_color_red_light_bateria<?php echo $i; ?>" style="background:#ff8080; width:100%; height:40px;font-size:2em;"></label>

                                <input id="input_color_red_light_bateria<?php echo $i; ?>" onclick="CoresBateria()" name="input_color_red_light_bateria" type="checkbox" hidden>

                            </div>

                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">

                                <label id="label_orange_light_bateria<?php echo $i; ?>" class="btn label_orange_light_bateria" for="input_color_orange_light_bateria<?php echo $i; ?>" style="background:#ffd280; width:100%; height:40px;font-size:2em;"></label>

                                <input id="input_color_orange_light_bateria<?php echo $i; ?>" onclick="CoresBateria()" name="input_color_orange_light_bateria" type="checkbox" hidden>

                            </div>

                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">

                                <label id="label_yellow_light_bateria<?php echo $i; ?>" class="btn label_yellow_light_bateria" for="input_color_yellow_light_bateria<?php echo $i; ?>" style="background:#ffff80; width:100%; height:40px;font-size:2em;"></label>

                                <input id="input_color_yellow_light_bateria<?php echo $i; ?>" onclick="CoresBateria()" name="input_color_yellow_light_bateria" type="checkbox" hidden>

                            </div>

                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">

                                <label id="label_green_light_bateria<?php echo $i; ?>" class="btn label_green_light_bateria" for="input_color_green_light_bateria<?php echo $i; ?>" style="background:#80ff80; width:100%; height:40px;font-size:2em;"></label>

                                <input id="input_color_green_light_bateria<?php echo $i; ?>" onclick="CoresBateria()" name="input_color_green_light_bateria" type="checkbox" hidden>

                            </div>

                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">

                                <label id="label_blue_light_bateria<?php echo $i; ?>" class="btn label_blue_light_bateria" for="input_color_blue_light_bateria<?php echo $i; ?>" style="background:#8080ff; width:100%; height:40px;font-size:2em;"></label>

                                <input id="input_color_blue_light_bateria<?php echo $i; ?>" onclick="CoresBateria()" name="input_color_blue_light_bateria" type="checkbox" hidden>

                            </div>


                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">

                                <label id="label_purple_light_bateria<?php echo $i; ?>" class="btn label_purple_light_bateria" for="input_color_purple_light_bateria<?php echo $i; ?>" style="background:#ff80ff; width:100%; height:40px;font-size:2em;"></label>

                                <input id="input_color_purple_light_bateria<?php echo $i; ?>" onclick="CoresBateria()" name="input_color_purple_light_bateria" type="checkbox" hidden>

                            </div>


                        </div>

                        <div class="row">

                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>

                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">

                            <label style="width:100%; font-size:1.4em;" class="white text-center" for="num_cores_bateria">Quantidade de cores selecionadas</label>
                            
                            <input class="text-center num_cores_bateria" id="num_cores_bateria<?php echo $i; ?>" name="num_cores_bateria">

                            <h4 class="white qnt_cores_bateria" id="qnt_cores_bateria<?php echo $i; ?>" style="width:6%; margin-left:47%;"></h4>
                            
                            <h3 class="white Teste"></h3>
                       
                        </div>

                    </div>

                <?php } ?>
    
                <?php } ?>  
                    <div class="container mb-5">
                  
                        <div class="row">
                     
                            <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                           
                                <input name="testeID" hidden id="testeID" value="<?php echo $testeID; ?>">
                               
                                <button id="send_button" type="submit" class="btn btn-success btn-lg" style="width:50%; margin-left:25%;" formaction="index.php">Continuar</button>
                           
                            </div>

                           <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                           
                                <button type="submit" class="btn btn-danger btn-lg" style="margin-left:25%; width:50%;" formaction="../historic_test/">Voltar</button>
                           
                            </div>
                                                                     
                        </div>
                  
                  </div>
                  
               </form>

            </div>
           
    </body>
    
</html>

<?php 
    include '../../_include/code_disconnect.php';
?>