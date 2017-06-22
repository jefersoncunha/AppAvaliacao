<?php

require_once('../controllers/conexao_bd_cloud.php');

class criterio_dao {

    function inserir($id, Criterio $ob) {

        //chama classe do bD
        $bd = new conexao_bd();


        $sql = "INSERT INTO criterio (nome, descricao, id_avaliador) VALUES "
                . "('" . $ob->getNome() . "','" . $ob->getDescricao() . "','" . $id . "');";
        //conecta
        $bd->conectar();
        //executa a query
        $bd->query($sql);
        //fecha conexao
        $bd->fechar();
    }

    function busca_todos_criterios($id) {

        $bd = new conexao_bd();

        $bd->conectar();

        $sql = 'SELECT * FROM criterio WHERE id_avaliador= '.$id.';';

        $resultado = $bd->query($sql);

        $bd->fechar();

        return $resultado;
    }
    
    //busca para verficar se exixte nome igual
    function busca_criterio_id($id_aval, Criterio $criterio) {
        $bd = new conexao_bd();
        $bd->conectar();
        $sql = 'SELECT * FROM criterio WHERE id=\'' . $criterio->getId() . '\' '
                . 'AND id_avaliador=\'' . $id_aval . '\'';

        $retorno = $bd->query($sql);

        //fecha conexao
        $bd->fechar();

        return $retorno;
    }
   
    function excluir_criterio(Criterio $c) {
        $bd = new conexao_bd();
        $bd->conectar();
        $sql = 'DELETE FROM criterio WHERE id=' . $c->getId() . '';

        $retorno = $bd->query($sql);

        //fecha conexao
        $bd->fechar();

        return $retorno;
    }

    function alterar_criterio(Criterio $cri) {

       
        
        $bd = new conexao_bd();
        $sql = "UPDATE criterio SET "
                . "nome ='".$cri->getNome().
                  "',descricao ='".$cri->getDescricao().
                    "' WHERE id=".$cri->getId().";";
        
        $bd->conectar();

        $resultado = $bd->query($sql);

        $bd->fechar();

        return $resultado;
    }

}

?>
