<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Conectar
 *
 * @author Rharuow
 */
abstract class Conectar {
    //put your code here
    protected function conectaDB() {
        try {
            $connection =   new PDO("mysql:host=localhost;dbname=CalliTest", "root", "password");
            echo '<p>Conexão realizada com sucesso </p>';
            return $connection;
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
    }
}
