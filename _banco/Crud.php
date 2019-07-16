<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'Conectar.php';
/**
 * Description of Crud
 *
 * @author rharuow
 */
class Crud extends Conectar {
    
    //atributos
    private $crud;
    private $contador;
    
    //preparação das declarativas
    /* Definições do prepare */
    private function preparedStatements($query, $parametters) {
        $this->countParametters($parametters);
        $this->crud = $this->conectaDB()->prepare($query);
        if($this->contador > 0) {
            for($i=1; $i <= $this->contador; $i++){
                $this->crud->bindValue($i, $parametters[$i-1]);
            }
        }
        $this->crud->execute();
        echo '<p>Query feita</p>';
    }
    
    //Contador de parâmetros
    private function countParametters($parametters){
        $this->contador= count($parametters);
    }
    
    
    //Insert
    public function insertDB($tabela, $valores, $parametters) {
        $this->preparedStatements("INSERT INTO $tabela VALUES ($valores)", $parametters);
        echo '<p>Insert feito</p>';
        return $this->crud;
    }
    
    //Select
    public function selecttDB($campos, $tabela, $restrincaoComWhere, $parametters) {
        $this->preparedStatements("SELECT $campos FROM $tabela $restrincaoComWhere", $parametters);
        return $this->crud;
    }
    //Deletar
    public function deletDB($tabela, $restrincaoSemWhere, $parametters) {
        $this->preparedStatements("DELETE FROM $tabela WHERE $restrincaoSemWhere", $parametters);
        return $this->crud;
    }
    //Atualizar
    public function updateDB($tabela, $set, $restrincaoID, $parametters) {
        $this->preparedStatements("UPDATE $tabela SET $set WHERE ID = $restrincaoID", $parametters);
        return $this->crud;
    }
    
}
