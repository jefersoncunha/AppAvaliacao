<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of funcionario
 *
 * @author vagner
 */
class Funcionario {
    
    private $nome;
    private $sobrenome;
    private $email;
    private $fone;
    private $sexo;
    private $funcao;
    
    function getNome() {
        return $this->nome;
    }

    function getSobrenome() {
        return $this->sobrenome;
    }

    function getEmail() {
        return $this->email;
    }

    function getFone() {
        return $this->fone;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getFuncao() {
        return $this->funcao;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setFone($fone) {
        $this->fone = $fone;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setFuncao($funcao) {
        $this->funcao = $funcao;
    }


}
