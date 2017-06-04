<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of filial
 *
 * @author vagner
 */
class Filial {
    
    private $id;
    private $nome;
    private $fone;
    private $obs;
    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }

    
    function getNome() {
        return $this->nome;
    }

    function getFone() {
        return $this->fone;
    }

    function getObs() {
        return $this->obs;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setFone($fone) {
        $this->fone = $fone;
    }

    function setObs($obs) {
        $this->obs = $obs;
    }


    
}
