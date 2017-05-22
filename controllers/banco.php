<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of banco
 *
 * @author vagner
 */
class banco {
    
    private $dsn;
    private $user;
    private $pass;

    //dados para a conexão
    public function __construct() {
        
        $this->dsn = 'mysql:dbname=myteam_db;host=localhost';
        $this->user = 'root';
        $this->pass = '';
    }
    
    //conecta com o banco
    public function conectar() {
        try {
        
            $dbh = new PDO($this->dsn,$this->user,$this->pass);
            
            
        } catch (Exception $ex) {
            echo 'Falha na conexão:'. $ex->getMessage();
        }
        return $dbh;
        
    }
    
}
