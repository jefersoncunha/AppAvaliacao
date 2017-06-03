<?php

include '../controllers/conexao_bd.php';

class avaliador_dao {

    function inserir(Avaliador $av) {

        //chama classe do bD
        $bd = new conexao_bd();

        $sql = "INSERT INTO login (nome, senha,email,organizacao) "
                . "VALUES ('" . $av->getNome() . " ','" . $av->getSenha() .
                "','" . $av->getEmail() . "','" . $av->getOrganizacao() . "')";
        //conecta
        $bd->conectar();
        //executa a query
        $bd->query($sql);
        //fecha conexao
        $bd->fechar();
    }

    function busca_login($av) {

        $bd = new conexao_bd();
        //chama classe do Avaliador
        //$av = new Avaliador();

        $bd->conectar();

        $sql = 'SELECT * FROM login WHERE nome=\'' . $av->getNome() . '\' '
                . 'AND senha=\'' . $av->getSenha() . '\'';

        $resultado = $bd->query($sql);

        $bd->fechar();

        return $resultado;
    }

    function alterar($av) {

        $bd = new conexao_bd();
        $sql = "UPDATE login SET nome='" . $av->getNome() . "',"
                . "email='" . $av->getEmail() . "' ,"
                . "organizacao='" . $av->getOrganizacao() . "'  "
                . "WHERE id='" . $av->getId() . "';";
        $bd->conectar();

        $resultado = $bd->query($sql);

        $bd->fechar();

        return $resultado;
    }

}
?>



