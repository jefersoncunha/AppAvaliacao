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
    
    /*
     * função verifica se o valor informado não é numérico, 
     *  verifica se a diretiva get_magic_quotes_gpc() está ativada.
     *  Se estiver usamos a função stripslashes(). 
     * Em seguida verificamos se existe a função mysqli_real_escape_string().
     *  Se existir usamos ela, caso contrário, usamos a função mysql_escape_string().
     */
    public function anti_sql_injection($str) {
        global $con;
     if (!is_numeric($str)) {
          $str = get_magic_quotes_gpc() ? stripslashes($str) : $str;
          $str = function_exists('mysqli_real_escape_string') ? mysqli_real_escape_string($con,$str) : mysqli_escape_string($con,$str);
          }
     return $str;
     
    }
    
    }

?>

