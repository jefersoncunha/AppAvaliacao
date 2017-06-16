<?php

/**
 * responsavel por receber dadso e operações dos formularios
 * do ator avalaidor
 *
 * @author vagner
 */
//filtro contra INJECTION
$filtro = filter_input_array(INPUT_POST, FILTER_DEFAULT);

//criando sessão para msmgm modal
session_start();

//inclusões de classses
require './seguranca.php';
require '../dao/funcionario_dao.php';
require '../model/Funcionario.php';

//verifica se variavel possui valor
if (isset($filtro['op'])) {

    //inicialização de obejtos
    $fucionario = new funcionario_dao();
    $sg = new seguranca();
    $ob_func = new Funcionario();

    //recebe tipo de operação do form    
    $operacao = $filtro['op'];

    //busca operação
    switch ($operacao) {

        //cadastro funionario
        case "cadastro_funcionario":

            //recebe dados form e verificando  
            //qualquer ataque sql injection
            $id_loja = $sg->anti_sql_injection($filtro['id_loja']);
            $id_avaliador = $sg->anti_sql_injection($_SESSION['id_bd']);

            //setar dados no obejto
            $ob_func->setEmail($sg->anti_sql_injection($filtro['email']));
            $ob_func->setFone($sg->anti_sql_injection($filtro['fone']));
            $ob_func->setFuncao($sg->anti_sql_injection($filtro['funcao']));
            $ob_func->setNome($sg->anti_sql_injection($filtro['nome']));
            $ob_func->setSexo($sg->anti_sql_injection($filtro['sexo']));
            $ob_func->setSobrenome($sg->anti_sql_injection($filtro['sobrenome']));


            //verifica login
            $result = $fucionario->busca_funcionario($id_avaliador, $id_loja, $ob_func);

            if (mysqli_num_rows($result) > 0) {

                $_SESSION['numero_modal'] = 1;

                header('location:../views/new_funcio.php');
            } else {
                //busca classe
                $fucionario->inserir_funcionario($id_avaliador, $id_loja, $ob_func);

                $_SESSION['local'] = './home.php';
                $_SESSION['fica'] = './new_funcio.php';
                $_SESSION['numero_modal'] = 4;
                //redirecionar para a pagina
                header('location:../views/new_funcio.php');
            }
            break;
        //cadastro funionario
        case "editar":

            //recebe dados form e verificando  
            //qualquer ataque sql injection
            $id_avaliador = $sg->anti_sql_injection($_SESSION['id_bd']);
            //setar dados no obejto
            $ob_func->setId($sg->anti_sql_injection($filtro['id_funcio']));
            $ob_func->setEmail($sg->anti_sql_injection($filtro['email']));
            $ob_func->setFone($sg->anti_sql_injection($filtro['fone']));
            $ob_func->setFuncao($sg->anti_sql_injection($filtro['funcao']));
            $ob_func->setNome($sg->anti_sql_injection($filtro['nome']));
            $ob_func->setSobrenome($sg->anti_sql_injection($filtro['sobrenome']));
            //$ob_func->setSexo($sg->anti_sql_injection($filtro['sexo']));
            $id_loja = $sg->anti_sql_injection($filtro['id_loja']);
            
            //busca classe
            $fucionario->editar_funcionario($id_avaliador, $id_loja, $ob_func);
            //dados para modal
            $_SESSION['local'] = './list_filial_funcio.php';
            $_SESSION['numero_modal'] = 2;
            $_SESSION['mensagem'] = "Alterado com sucesso!";
            //redirecionar para a pagina
            header('location:../views/list_filial_funcio.php');

            break;

        case "excluir":

            $ob_func->setId($sg->anti_sql_injection($filtro['id_funcio']));

            $fucionario->excluir_funcionario($ob_func);

            $_SESSION['local'] = './list_filial_funcio.php';
            $_SESSION['numero_modal'] = 2;
            $_SESSION['mensagem'] = "Excluido com sucesso!";

            //redirecionar para a pagina

            header('location:../views/list_filial_funcio.php');
            break;
    }
}
