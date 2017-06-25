<?php

/**
 * responsavel por receber dadso e operações dos formularios
 * do ator avalaidor
 * @author vagner
 */
//filtro contra INJECTION
$filtro = filter_input_array(INPUT_POST, FILTER_DEFAULT);


//inicia sessao
session_start();

//verifica se variavel foi setada
if (isset($filtro['op'])) {

    //inclusões de classses
    require './seguranca.php';
    require '../dao/avaliacao_dao.php';
    require '../model/Avaliacao.php';

    //inicialização de obejtos
    $avaliacao_dao = new avaliacao_dao();
    $av_Objeto = new Avaliacao();
    $sg = new seguranca();

    //recebe tipo de operação do form    
    $operacao = $sg->anti_sql_injection($filtro['op']);

    //busca operação
    switch ($operacao) {
        case "avaliar":
            date_default_timezone_set("America/Sao_Paulo");

            $av_Objeto->setData(date('Y-m-d'));
            $av_Objeto->setIdAvalidor($sg->anti_sql_injection($_SESSION['id_bd']));
            $av_Objeto->setIdFuncionario($sg->anti_sql_injection($filtro["id_funcionario"]));

            $avaliacao = array();
            //array multdirecional

            $avaliacao['criterio'] = $filtro["id_criterio"];
            $avaliacao['nota'] = $filtro["nota"];
            $avaliacao['obs'] = $filtro["obs"];
            //seta array multdirecional            
            $av_Objeto->setAvalicao($avaliacao);

            //print_r(sizeof($avaliacao['criterio']));
            //busca classe
            $avaliacao_dao->inserirNotas($av_Objeto);

            $_SESSION['local'] = '../views/list_aval_filial.php';
            $_SESSION['mensagem'] = "Avaliado com sucesso!";

            //redirecionar para a pagina            
            header('location:../views/list_aval_filial.php');

            break;


        default:
            break;
    }
};
?>