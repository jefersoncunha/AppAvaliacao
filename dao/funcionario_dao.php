<?php

include '../controllers/conexao_bd.php';

class funcionario_dao {

    function inserir_funcionario($id_avaliador, $id_filial, Funcionario $func) {

        //chama classe do bD
        $bd = new conexao_bd();
        $sql = "INSERT INTO funcionario (nome, sobrenome, sexo, "
                . "email, funcao, fone, id_avaliador, id_filial) VALUES "
                . "('" . $func->getNome() . "',"
                . " '" . $func->getSobrenome() . "',"
                . " '" . $func->getSexo() . "',"
                . " '" . $func->getEmail() . "',"
                . " '" . $func->getFuncao() . "',"
                . " '" . $func->getFone() . "',"
                . " '.$id_avaliador.',"
                . " '.$id_filial.');";
        //conecta
        $bd->conectar();
        //executa a query
        $bd->query($sql);
        //fecha conexao
        $bd->fechar();
    }

    function busca_funcionario($id_avaliador, $id_filial, Funcionario $func) {
        $bd = new conexao_bd();
        $bd->conectar();

        $sql = 'SELECT * FROM funcionario WHERE nome=\'' . $func->getNome() . '\' '
                . 'AND sobrenome=\'' . $func->getSobrenome() . '\''
                . 'AND id_avaliador=\'' . $id_avaliador . '\''
                . 'AND id_filial=\'' . $id_filial . '\'';

        $returno = $bd->query($sql);

        $bd->fechar();

        return $returno;
    }

    //busca para verficar se exixte nome igual
    function busca_funcionario_filial($id_filial) {
        $bd = new conexao_bd();
        $bd->conectar();
        $sql = 'SELECT * FROM funcionario WHERE id_filial=\'' . $id_filial . '\'';
        $retorno = $bd->query($sql);

        $bd->fechar();

        return $retorno;
    }

}
