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

}
