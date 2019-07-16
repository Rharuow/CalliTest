<div class="Content">
    
    <table>
        
        <thead>
            
            <th>ID</th>
            <th>Nome</th>
            <th>Senha</th>
            <th>Sexo</th>
            
        </thead>
        
        <tbody>
            
            <?php

    require_once "Crud.php";
    
    $crud = new Crud();
    
    $select = $crud->selecttDB("*", "administrador", "", array());
    
    while ($fetch=$select->fetch(PDO::FETCH_ASSOC)) {
?>        
        <form method="get" action="../Controler/ControllerEditar.php">
            <tr>

                <td><input type="number" readonly name="ID" value="<?php echo $fetch['ID']; ?>" style="text-align: center;"></td>
                <td><input type="text" name="nome" value="<?php echo $fetch['nome']; ?>" style="text-align: center;"></td>
                <td><input type="text" name="senha" value="<?php echo $fetch['senha']; ?>" style="text-align: center;"></td>
                <td><input type="text" name="sexo" value="<?php echo $fetch['sexo']; ?>" style="text-align: center;"></td>
                <td><input type="submit" value="Editar" /></td>

            </tr>
            
        </form>  

<?php
    }
?>
            
        </tbody>
        
    </table>
    
</div>
