<?php

include '../controllers/conexao_bd.php';

class filial_dao {
    public $nome_fil;
    public $fone_fil;
    public $obs_fil;
        
    function inserir($id) {
      //chama classe do bD
      $bd = new conexao_bd();
      $sql = "INSERT INTO filial (nome, fone, id_avalaidor, observacao) VALUES "
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
      
      function busca_login($no, $se) {         
      $bd = new conexao_bd();
      $sg = new seguranca();
      $bd->conectar();
      
      $sql = 'SELECT * FROM filial WHERE nome=\''.$no.'\' '
              . 'AND senha=\''.$se.'\'';

      return $bd->query($sql);

      $bd->fechar();
      }
      
      function alterar() {
            $bd = new conexao_bd();
            $sql = "UPDATE login SET nome='$this->nome',"
                    . "email='$this->email' ,"
                    . "organizacao='$this->organizacao'  "
                    . "WHERE id='$this->id';";
            $bd->conectar();
            return $bd->query($sql);
            $bd->fechar();
        }
        
      
}
