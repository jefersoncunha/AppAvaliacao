<?php

include '../controllers/conexao_bd.php';

class funcionario_dao {

    public $nome;
    public $sobrenome;
    public $email;
    public $fone;
    public $sexo;
    public $funcao;
    
        
    function inserir_funcionario($id_avaliador,$id_filial) {
        
      //chama classe do bD
      $bd = new conexao_bd();
      $sql = "INSERT INTO funcionario (nome, sobrenome, sexo, "
              . "email, funcao, fone, id_avaliador, id_filial) VALUES "
      . "('$this->nome',"
      . " '$this->sobrenome',"
      . " '$this->sexo',"
      . " '$this->email',"
      . " '$this->funcao',"
      . " '$this->fone',"
      . " '.$id_avaliador.',"
      . " '.$id_filial.');";
      //conecta
      $bd->conectar();
      //executa a query
      $bd->query($sql);
      //fecha conexao
      $bd->fechar();
      }
      
      function busca_funcionario($id_avaliador,$id_filial) {         
      $bd = new conexao_bd();
      $bd->conectar();
      
      $sql = 'SELECT * FROM funcionario WHERE nome=\''.$this->nome.'\' '
              . 'AND sobrenome=\''.$this->sobrenome.'\''
              . 'AND id_avaliador=\''.$id_avaliador.'\''
              . 'AND id_filial=\''.$id_filial.'\'';

      return $bd->query($sql);

      $bd->fechar();
      }
      
      

}
