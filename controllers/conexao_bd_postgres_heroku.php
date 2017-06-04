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
        private $port;

        private $con;

        public function __construct(){
            $this->servidor='ec2-50-19-218-160.compute-1.amazonaws.com';
            $this->usuario='jarbmjikhubtmz';
            $this->senha='e93f07d0caad928ce6e7279634c97dd78960189ff3ba7f9f46d25448dff7c78d';
            $this->db='dc306c7jfif8ln';
            $this->port='5432';
        }

        public function conectar(){
            global $con;
            $con = new PDO( "pgsql:"
                    . "dbname=$this->db; "
                    . "user=$this->usuario; "
                    . "password=$this->senha; "
                    . "host=$this->servidor; "
                    . "port=$this->port" );

        }

        public function fechar(){
            global $con;
            $con = null;
        }

        public function query($sql){
            global $con;
            $query = $con->query($sql);
            return $query;
        }
    
    }

?>

