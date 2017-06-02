<?php

include '../controllers/conexao_bd_1.php';

class filial_dao {

    public $nome_fil;
    public $fone_fil;
    public $obs_fil;

    function inserir($id) {
        //chama classe do bD
        $bd = new conexao_bd();
        $sql = "INSERT INTO filial (nome, fone, id_avaliador, observacao) VALUES "
                . "('$this->nome_fil',"
                . " '$this->fone_fil',"
                . " '.$id.',"
                . " '$this->obs_fil')";
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
    function busca_filial_nome($id_aval) {         
      $bd = new conexao_bd();
      $bd->conectar();
      $sql = 'SELECT * FROM filial WHERE nome=\''.$this->nome_fil.'\' '
              . 'AND id_avaliador=\''.$id_aval.'\'';
      return $bd->query($sql);
      
      }
     

}
