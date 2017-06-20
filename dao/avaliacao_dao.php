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

        $avaliao_array=$av->getAvalicao();
         //print_r($avaliacao['nota'][2]);
        //inserir com array multdirecional
                
        for($i=0; $i< 5; $i++) {              
        $sql = "INSERT INTO avaliacao (nota, id_funcionario, id_avaliador, id_criterio, obs, data) "
                . "VALUES ('" 
                . $avaliao_array['nota'][$i] . "','"
                . $av->getIdFuncionario() ."','"
                . $av->getIdAvalidor() . "','" 
                . $avaliao_array['criterio'][$i]  .  "','" 
                . $avaliao_array['obs'][$i] .  "','" 
                . $av->getData() . 
                "');";       
        
        //executa a query
        $bd->query($sql);
        }
        
        //fecha conexao
        $bd->fechar();
    }
    
    
}
