<?php
include '../controllers/conexao_bd.php';

class criterio_dao {
        
    function inserir($id, Criterio $ob) {     
        
      //chama classe do bD
      $bd = new conexao_bd();
      
      
      $sql = "INSERT INTO criterio (nome, descricao, id_avaliador) VALUES "
              . "('".$ob->getNome()  ."','".$ob->getDescricao()."','".$id."');";
      //conecta
      $bd->conectar();
      //executa a query
      $bd->query($sql);
      //fecha conexao
      $bd->fechar();
      }
      
}

?>
