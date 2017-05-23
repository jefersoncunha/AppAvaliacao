<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of seguranca
 *
 * @author vagner
 */
class seguranca {

    //FUNCAO KILL INJECTION
    public function anti_sql_injection($valor) {
        $postfinal = preg_replace("/(;|alter|from|select|insert|delete|where|"
                . "drop|drop table|show tables|#|\*|--|\\\\)/", "", $valor);
        $postfinal = trim($postfinal);      //TIRAR ESPACOS VAZIOS
        $postfinal = strip_tags($postfinal); //TIRAR TAGS HTML E PHP
        $postfinal = addslashes($postfinal); //ADICIONAR BARRAS INVERTIDAS A UMA STRING
        return $postfinal;
    }

    //criptografar variaveis
    public function cripto($var) {
        return sha1(md5($var));
        //return base64_encode($var);
        
    }
    //descriptografar variaveis
    public function descripto($var) {
        //return sha1(md5($var));
        return base64_decode($var);
        
    }

    /*
     * função verifica se o valor informado não é numérico, 
     *  verifica se a diretiva get_magic_quotes_gpc() está ativada.
     *  Se estiver usamos a função stripslashes(). 
     * Em seguida verificamos se existe a função mysqli_real_escape_string().
     *  Se existir usamos ela, caso contrário, usamos a função mysql_escape_string().

      public function anti_sql_injection($str) {
      global $con;
      if (!is_numeric($str)) {
      $str = get_magic_quotes_gpc() ? stripslashes($str) : $str;
      $str = function_exists('mysqli_real_escape_string') ? mysqli_real_escape_string($con,$str) : mysqli_escape_string($con,$str);
      }
      return $str;

      } */
}
