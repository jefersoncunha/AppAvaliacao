<?php

include '../controllers/conexao_bd.php';

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
      
      function busca_filial($id_aval) {         
      $bd = new conexao_bd();
      $bd->conectar();
      
      $sql = 'SELECT * FROM filial WHERE id_avaliador='.$id_aval.';';

      return $bd->query($sql);

      //$bd->fechar();
      }
      
      
}
