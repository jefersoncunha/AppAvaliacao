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

    private $id;
    private $nota;
    private $idFuncionario;
    private $idAvalidor;
    private $idCriterio;
    private $obs;
    private $data;

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

    function getId() {
        return $this->id;
    }

    function getIdCriterio() {
        return $this->idCriterio;
    }

    function getObs() {
        return $this->obs;
    }

    function getData() {
        return $this->data;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setIdCriterio($idCriterio) {
        $this->idCriterio = $idCriterio;
    }

    function setObs($obs) {
        $this->obs = $obs;
    }

    function setData($data) {
        $this->data = $data;
    }

}
