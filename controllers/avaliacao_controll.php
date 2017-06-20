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
             
            /*echo 'id_funcionario: ', $_POST["id_funcionario"];
              echo '<br>';
              echo 'id_avalidor: ', $_SESSION['id_bd'];
              echo '<br>';
              echo 'Obs: ';
              foreach ($_POST["obs"] as $obs) {
              print_r $obs ;
              }
              echo '<br>';
              echo 'Notas: ';
              foreach ($_POST["nota"] as $notas) {
              print_r $notas ;
              }
              echo '<br>';
              echo 'id_criterios: ';
              print_r($_POST["id_criterio"]);
                                  echo '<br>';*/

            
            
            //$total = sizeof($_POST["avaliacao"]);
            
            $av_Objeto->setData(date('d/m/y'));
            $av_Objeto->setIdAvalidor($_SESSION['id_bd']);
            $av_Objeto->setIdFuncionario($_POST["id_funcionario"]);
            //$av_Objeto->setIdCriterio($_POST["id_criterio"]);
            //$av_Objeto->setNota($_POST["nota"]);
            //$av_Objeto->setObs($_POST["obs"]);

            $avaliacao = array();
            //array multdirecional
            
            $avaliacao['criterio']=$_POST["id_criterio"];
            $avaliacao['nota']=$_POST["nota"];
            $avaliacao['obs']=$_POST["obs"];
                        
            $av_Objeto->setAvalicao($avaliacao);
                  
            $avaliacao_dao->inserirNotas($av_Objeto);
            
            
            
            
          //header('location:../views/home.php');
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