<?php

require_once('../controllers/conexao_bd_cloud.php');

class filial_dao {

    function inserir($id, filial $fil) {

        //chama classe do bD
        $bd = new conexao_bd();
        $sql = "INSERT INTO filial (nome, fone, id_avaliador, observacao) VALUES "
                . "('" . $fil->getNome() . "',"
                . " '" . $fil->getFone() . "',"
                . " '" . $id . "',"
                . " '" . $fil->getObs() . "');";
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

        $retorno = $bd->query($sql);
        //fecha conexao
        $bd->fechar();

        return $retorno;
    }

    //busca para verficar se exixte nome igual
    function busca_filial_nome($id_aval, filial $fil) {
        $bd = new conexao_bd();
        $bd->conectar();
        $sql = 'SELECT * FROM filial WHERE nome=\'' . $fil->getNome() . '\' '
                . 'AND id_avaliador=\'' . $id_aval . '\'';

        $retorno = $bd->query($sql);

        //fecha conexao
        $bd->fechar();
        return $retorno;
    }

    //busca para verficar se exixte nome igual
    function busca_filial_id($id_aval, $fil) {
        $bd = new conexao_bd();
        $bd->conectar();
        $sql = 'SELECT * FROM filial WHERE id=\'' . $fil . '\' '
                . 'AND id_avaliador=\'' . $id_aval . '\'';

        $retorno = $bd->query($sql);

        //fecha conexao
        $bd->fechar();

        return $retorno;
    }

    //busca para verficar se exixte nome igual
    function excluir_filial(Filial $fil) {
        $bd = new conexao_bd();
        $bd->conectar();
        $sql = 'DELETE FROM filial WHERE id=' . $fil->getId() . '';

        $retorno = $bd->query($sql);

        //fecha conexao
        $bd->fechar();

        return $retorno;
    }

    function alterar_filial(Filial $fil) {

        $bd = new conexao_bd();
         $bd->conectar();
         
        $sql = "UPDATE filial SET nome='" . $fil->getNome() . "',"
                . "fone='" . $fil->getFone() . "' ,"
                . "observacao='" . $fil->getObs() . "'  "
                . "WHERE id='" . $fil->getId() . "';";
       

        $resultado = $bd->query($sql);

        $bd->fechar();

        return $resultado;
    }

}
