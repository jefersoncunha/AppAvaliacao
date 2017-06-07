<?php

/**
 * responsavel por receber dadso e operações dos formularios
 * do ator avalaidor
 * @author vagner
 */
//filtro contra INJECTION
$filtro = filter_input_array(INPUT_POST, FILTER_DEFAULT);

//verifica se variavel foi setada
if (isset($filtro['op'])) {

    //inclusões de classses
    require './seguranca.php';
    require '../dao/avaliador_dao.php';

    //inicialização de obejtos
    $avaliador_dao = new avaliador_dao();
    $sg = new seguranca();

    //inicia sessao
    session_start();

    //recebe tipo de operação do form    
    $operacao = $sg->anti_sql_injection($filtro['op']);

    //busca operação
    switch ($operacao) {
        case "avaliar":

                $plausible_answers = array(1, 2, 3, 4);
                $answers = array();
                for ($i = 1; !empty($_POST["v$i"]);  ++$i) {
                    if (in_array($_POST["v$i"], $plausible_answers)) {
                       $answers[$_POST["v$i"]][] = $i;
                    }
                     
                }
                print_r($plausible_answers);

/*
            //recebe dados form e verificando  
            //qualquer ataque sql injection
            $id_funcionario = $sg->anti_sql_injection($filtro['idFuncionario']);
            $nota = $sg->anti_sql_injection($filtro['email']);


            //setar dados no objeto 
            $aval_model->setNome($nome_Avaliador);
            $aval_model->setEmail($email_Avaliador);

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
            echo"ok";
            break;


        default:
            break;
    }
};
?>