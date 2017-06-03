<?php

include '../controllers/conexao_bd.php';

class filial_dao {


    function inserir($id, filial $fil) {
        //chama classe do bD
        $bd = new conexao_bd();
        $sql = "INSERT INTO filial (nome, fone, id_avaliador, observacao) VALUES "
                . "('".$fil->getNome()."',"
                . " '".$fil->getFone()."',"
                . " '.$id.',"
                . " '".$fil->getObs()."')";
        //conecta
        $bd->conectar();
        //executa a query
        $bd->query($sql);
        //fecha conexao
        $bd->fechar();
    }

    //mostar todas filiais referentes ao avalidor
    function busca_filial_listar_todas($id_aval) {
        $bd = new conexao_bd();
        $bd->conectar();
        $sql = 'SELECT * FROM filial WHERE id_avaliador=' . $id_aval . ';';
        return $bd->query($sql);
    }

    //busca para verficar se exixte nome igual
    function busca_filial_nome($id_aval, filial $fil) {         
      $bd = new conexao_bd();
      $bd->conectar();
      $sql = 'SELECT * FROM filial WHERE nome=\''.$fil->getNome().'\' '
              . 'AND id_avaliador=\''.$id_aval.'\'';
      return $bd->query($sql);
      
      }
     

}
