<?php
require_once('../controllers/conexao_bd.php');


/**
 * Description of avaliacao_dao
 *
 * @author vagner
 */
class avaliacao_dao {
    
    function inserirNotas(Avaliacao $av) {

        //chama classe do bD
        $bd = new conexao_bd();
         //conecta
        $bd->conectar();

        $sql = "INSERT INTO avaliacao (nota, id_funcionario, id_avaliador, id_criterio, obs, data) "
                . "VALUES ('" 
                . $av->getNota() . "','"
                . $av->getIdFuncionario() ."','"
                . $av->getIdAvalidor() . "','" 
                . $av->getIdCriterio() . "','" 
                . $av->getObs() . "','" 
                . $av->getData() . 
                "')";
       
        //executa a query
        $bd->query($sql);
        //fecha conexao
        $bd->fechar();
    }
    
    
}
