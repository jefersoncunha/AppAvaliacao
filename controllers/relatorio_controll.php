<?php

//filtro contra INJECTION
$filtro = filter_input_array(INPUT_POST, FILTER_DEFAULT);

//inicia sessao
session_start();

//verifica se variavel foi setada
if (isset($filtro['op'])) {

    //inclusões de classses
    require './seguranca.php';

    //objetos
    $sg = new seguranca();

    //recebe tipo de operação do form    
    $operacao = $sg->anti_sql_injection($filtro['op']);

    switch ($operacao) {

        case "buscaDados":

            //recebe dados form e verificando  
            //qualquer ataque sql injection    
            //setar dados no obejto
            $id_avaliador = $_SESSION["id_bd"];
            $de = $sg->anti_sql_injection($filtro['de']);
            $ate =$sg->anti_sql_injection($filtro['ate']);
            $id_funcionario = $sg->anti_sql_injection($filtro['cbx_funcionario']);

            echo 'DE: ', $de;
            echo 'ATE: ', $ate;
            echo 'Funcionario: ', $id_funcionario;

            //verifica filial
            /*$result = $filial->busca_filial_nome($id_avaliador, $filial_obj);


            if (mysqli_num_rows($result) > 0) {

                $_SESSION['numero_modal'] = 1;

                header('location:../views/new_filial.php');
            } else {

                //busca classe
                $filial->inserir($id_avaliador, $filial_obj);
                //dados para modal
                $_SESSION['home'] = './home.php';
                $_SESSION['fica'] = './new_filial.php';
                $_SESSION['numero_modal'] = 4;

                //redirecionar para a pagina
                header('location:../views/new_filial.php');
            }*/
            break;
    }
}


