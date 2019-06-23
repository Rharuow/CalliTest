
<?php 
    include '../_include/code_connect.php';
?>

<?php
    if(isset($_GET['animalID'])) {
        $animalID        =  $_GET['animalID'];
        
        $select_command  = "SELECT * ";
        $select_command  .= "FROM animal ";
        $select_command  .= "WHERE animalID = $animalID ";
        $select_command  .= "AND pesquisaID = $pesquisaID ";
        
        $put_select     = mysqli_query($link, $select_command);
        
        if(!$put_select) {
            die ("Erro na consulta do animal DB.");
        }
        
        $get_animal = mysqli_fetch_assoc($put_select);
        
        $animalID               =   $get_animal['animalID'];

        $ani_nome               =   $get_animal['ani_nome'];

        $_SESSION['animalID']   =   $animalID;

        $_SESSION['ani_nome']   =   $ani_nome;
        
    } else {
        
        $ani_nome   =   $_SESSION['ani_nome'];
        
        $animalID   =    $_SESSION['animalID'];
        
    }
?>
