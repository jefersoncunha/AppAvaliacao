<?php
include '../controllers/conexao_bd.php';

class criterio_dao {
    
    public $nome_cri;
    public $descricao_cri;
        
    function inserir($id) {
      //chama classe do bD
      $bd = new conexao_bd();
      $sql = "INSERT INTO criterio (nome, descricao, id_avaliador) VALUES "
              . "('$this->nome_cri','$this->descricao_cri','".$id."');";
      //conecta
      $bd->conectar();
      //executa a query
      $bd->query($sql);
      //fecha conexao
      $bd->fechar();
      }
      
}

?>
