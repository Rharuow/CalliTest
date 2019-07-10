<pre>
    <?php
    /* Conexão com banco de dados */
    include("connection.php");

    /* Controle para erro de falta de dados */
    if(!empty($_GET["ID"]) and !empty($_GET["nome"]) and !empty($_GET["senha"])):
        
        /* Pegando valores via método GET */
        $nome   =   $_GET["nome"];
        $senha   =   $_GET["senha"];
        $ID   =   $_GET["ID"];
        $pdo=conectar();
        /* Tabela que será usada na query */
        $table  =   "administrador";
        /* Realizando a consulta */
        $atualizar = $pdo->prepare("UPDATE $table SET nome=:nome, senha=:senha WHERE ID=:ID");
        /* atribuindo valores pros pseudonomes */
        $atualizar->bindValue(":nome", $nome);
        $atualizar->bindValue(":senha", $senha);
        $atualizar->bindValue(":ID", $ID);
        /* Executando a consulta */
        $atualizar->execute();
        if ($atualizar->rowCount() > 0): /* Se 0 é porque não tem atualização. Se 1 é pq teve 1 tupla atualizada */
            echo "Usuário atualizado com sucesso";

        else:
            echo "Desculpe, o usuário não foi atualizado!";
        endif;
    
    else:
        echo "Nenhum Usuário encontrado, profavor informar os dados!";

    endif;

    ?>


</pre>