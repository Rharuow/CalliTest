<pre>
    <?php
    /* Conexão com banco de dados */
    include("connection.php");

    $pdo=conectar();

    //Definindo a table q será usada

    $table  =   "administrador";

    //Usando método get para pegar as variáveis

    $ID =   $_GET["ID"];
    $nome =   $_GET["nome"];
    $senha =   $_GET["senha"];
    $sexo =   $_GET["sexo"];

    $ID2 =   $_GET["ID2"];
    $nome2 =   $_GET["nome2"];
    $senha2 =   $_GET["senha2"];
    $sexo2 =   $_GET["sexo2"];

    //Iniciando a transação

    $pdo->beginTransaction();

    // sequência de querys
    
    //Cadastrar um adm

    $adm=$pdo->query("INSERT INTO $table (ID, nome, senha, sexo) VALUES ($ID, '$nome', '$senha', '$sexo')");
    if(!$adm) {
        die("houve um erro no cadastro de dados 1");
    }

    //Cadastrar outro adm

    $adm=$pdo->query("INSERT INTO $table (ID, nome, senha, sexo) VALUES ($ID2, '$nome2', '$senha2', '$sexo2')");
    if(!$adm) {
        $pdo->rollBack();//Cancela o anterior caso esse dê errado!
        die("houve um erro no cadastro de dados 2");
    }

    //Confirmação da transação

    $pdo->commit();

    ?>


</pre>