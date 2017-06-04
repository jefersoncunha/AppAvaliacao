<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of conexao_bd
 *
 * @author vagner
 */
class conexao_bd {

   
    private $servidor;
    private $usuario;
    private $senha;
    private $db;
    private $con;

    //dados para a conexão
    public function __construct() {
        $this->servidor = 'localhost';
        $this->usuario = 'root';
        $this->senha = '';
        $this->db = 'myteam_db';
    }

    //conecta com o banco
    public function conectar() {
        global $con;
        $con = mysqli_connect(
        $this->servidor, 
        $this->usuario, 
        $this->senha) or die(mysqli_error());
        mysqli_select_db($con, $this->db) or die(mysqli_error());
    }
    
    //fecha conexao
    public function fechar() {
        global $con;
        mysqli_close($con);
    }
    
    //executa query
    public function query($sql) {
        global $con;
        $query = mysqli_query($con, $sql) or die(mysqli_error());
        return $query;
    }
    
   
    
    }

?>

