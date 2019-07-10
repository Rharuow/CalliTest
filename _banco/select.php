<pre>
    <?php
    /* Conexão com banco de dados */
    include("connection.php");

    $pdo=conectar();
    /* Tabela que será usada na query */
    $table  =   "administrador";
    /* Realizando a consulta */
    $buscar = $pdo->prepare("SELECT * FROM $table");
    /* Executando a consulta */
    $buscar->execute();
    /* Atribuindo a consulta a uma varável */
    $linha = $buscar->fetchAll(PDO::FETCH_ASSOC);

    print_r($linha);

    var_dump($linha);
    /* percorrendo a variável para pegar todos os dados */
    foreach($linha as $listar) {
        echo "<p>$listar->id</p>";
        echo "<p>$listar->nome</p>";
        echo "<p>$listar->senha</p>";
    }
    
    
    $linha = $buscar->fetchAll(PDO::FETCH_ASSOC);

    foreach($linha as $listar) {
        echo "<p>$listar[ID]</p>";
        echo "<p>$listar[nome]</p>";
        echo "<p>$listar[senha]</p>";
    }
    
    var_dump($linha);

    while($linha = $buscar->fetch(PDO::FETCH_ASSOC)){
        echo $linha["nome"];
    }

    var_dump($linha);
    
    ?>


</pre>