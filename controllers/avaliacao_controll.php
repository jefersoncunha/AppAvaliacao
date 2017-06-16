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
            /* echo 'id_funcionario: ', $_POST["id_funcionario"];
              echo '<br>';
              echo 'id_avalidor: ', $_SESSION['id_bd'];
              echo '<br>';
              echo 'Obs: ';
              foreach ($_POST["obs"] as $obs) {
              echo $obs ;
              }
              echo '<br>';
              echo 'Notas: ';
              foreach ($_POST["nota"] as $notas) {
              echo $notas ;
              }
              echo '<br>';
              echo 'id_criterios: ';
              foreach ($_POST["id_criterio"]as $criterios) {
              echo $criterios;
              } */
            $total = sizeof($_POST["id_criterio"]);
            
            $av_Objeto->setData(date('d/m/y'));
            $av_Objeto->setIdAvalidor($_SESSION['id_bd']);
            $av_Objeto->setIdFuncionario($_POST["id_funcionario"]);
            
            $lista_obs = array($_POST["obs"]);
            $lista_crit = array($_POST["id_criterio"]);
            $lista_not = array($_POST["nota"]);
                    
            for ($i=0; $i < $total; $i++) {
                
            $av_Objeto->setObs($lista_obs[$i]);
            $av_Objeto->setIdCriterio($lista_crit[$i]);
            $av_Objeto->setNota($lista_not[$i]);

            $avaliacao_dao->inserirNotas($av_Objeto);
            } 
            /*
              $id_funcionario = $sg->anti_sql_injection($filtro['idFuncionario']);
              $nota = $sg->anti_sql_injection($filtro['email']);

              //verifica login
              $result = $avaliador_dao->busca_login($aval_model);

              //busca classe
              $avaliador_dao->inserir($aval_model);

              $_SESSION['local'] = '../index.php';
              $_SESSION['numero_modal'] = 2;
              //redirecionar para a pagina
              header('location:../views/singup.php');
             * /
             */
            break;


        default:
            break;
    }
};
?>