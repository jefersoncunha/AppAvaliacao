<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Avaliacao
 *
 * @author vagner
 */
class Avaliacao {
    private  $nota;
    private  $idFuncionario;
    private  $idAvalidor;
    
    
    function getNota() {
        return $this->nota;
    }

    function getIdFuncionario() {
        return $this->idFuncionario;
    }

    function getIdAvalidor() {
        return $this->idAvalidor;
    }

    function setNota($nota) {
        $this->nota = $nota;
    }

    function setIdFuncionario($idFuncionario) {
        $this->idFuncionario = $idFuncionario;
    }

    function setIdAvalidor($idAvalidor) {
        $this->idAvalidor = $idAvalidor;
    }


}
