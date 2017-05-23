<?php

include '../controllers/conexao_bd.php';

class avaliador_dao {

    public $id;
    public $nome;
    public $senha;
    public $email;
    public $organizacao;

     function inserir() {
      //chama classe do bD
      $bd = new conexao_bd();
      $sg = new seguranca();

      $sql = "INSERT INTO login (nome, senha,email,organizacao) VALUES "
      . "('$this->nome',"
      . " '$this->senha',"
      . " '$this->email',"
      . " '$this->organizacao')";
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
      
      //anti_sql_injection função verficar sql injection
      $sql = 'SELECT * FROM login WHERE nome=\''.$no.'\' '
              . 'AND senha=\''.$se.'\'';

      return $bd->query($sql);

      $bd->fechar();
      }
      
      function alterar() {
            $bd = new conexao_bd();
            $sql = "UPDATE login SET nome='$this->nome',"
                    . "email='$this->email' ,"
                    . "organizacao='$this->organizacao'  WHERE id='$this->id';";
            $bd->conectar();
            return $bd->query($sql);
            $bd->fechar();
        }
      
}
      
?>



