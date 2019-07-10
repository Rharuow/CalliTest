<pre>
    <?php
    /* Conexão com banco de dados */
    include("connection.php");

    /* Controle para erro de falta de dados */
    if(!empty($_GET["ID"])):
        
        /* Pegando valores via método GET */
        $ID   =   $_GET["ID"];
        $pdo=conectar();
        /* Tabela que será usada na query */
        $table  =   "administrador";
        /* Realizando a consulta */
        $deletar = $pdo->prepare("DELETE FROM $table WHERE ID=:ID");
        /* atribuindo valores pros pseudonomes */
        $deletar->bindValue(":ID", $ID);
        /* Executando a consulta */
        $deletar->execute();
        if ($deletar->rowCount() > 0): /* Se 0 é porque não tem atualização. Se 1 é pq teve 1 tupla atualizada */
            echo "Usuário deletado com sucesso";

        else:
            echo "Desculpe, o usuário não foi deletado!";
        endif;
    
    else:
        echo "Nenhum Usuário encontrado, profavor informar os dados!";

    endif;

    ?>


</pre>