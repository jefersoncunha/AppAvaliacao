<?php

include './conexao_bd.php';

class avaliador_dao {

    public $nome;
    public $senha;
    public $email;
    public $organizacao;

    function inserir() {
        //chama classe do bD
        $bd = new conexao_bd();

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

    function buscaUser($nomeAdm, $senhaAdm) {

        $bd = new ConexaoBD();
        $bd->conectar();
        $sql = "SELECT * FROM login WHERE nome='{$nomeAdm}' AND senha='{$senhaAdm}';";
        return $bd->query($sql);
        $bd->fechar();
    }

}

?>
