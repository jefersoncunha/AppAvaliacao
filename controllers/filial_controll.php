<?php

//filtro contra INJECTION
$filtro = filter_input_array(INPUT_POST, FILTER_DEFAULT);

//verifica se variavel foi setada
if (isset($filtro['op'])) {

    //inclusões de classses
    require './seguranca.php';
    include '../dao/filial_dao.php';
    require '../model/Filial.php';
    require '../model/Avaliador.php';

    //inicia sessao
    session_start();

    //objetos
    $sg = new seguranca();
    $filial = new filial_dao();
    $filial_obj = new Filial();
    $avalidor_obj = new Avaliador();

    //recebe tipo de operação do form    
    $operacao = $sg->anti_sql_injection($filtro['op']);

    switch ($operacao) {

        case "cadastro_filial":

            //recebe dados form e verificando  
            //qualquer ataque sql injection    
            //setar dados no obejto

            $id_avaliador = $_SESSION["id_bd"];
            $filial_obj->setNome($sg->anti_sql_injection($filtro['nome']));
            $filial_obj->setFone($sg->anti_sql_injection($filtro['fone']));
            $filial_obj->setObs($sg->anti_sql_injection($filtro['obs']));


            //verifica filial
            $result = $filial->busca_filial_nome($id_avaliador, $filial_obj);


            if (mysqli_num_rows($result) > 0) {

                $_SESSION['numero_modal'] = 1;

                header('location:../views/new_filial.php');
            } else {

                //busca classe
                $filial->inserir($id_avaliador, $filial_obj);
                //dados para modal
                $_SESSION['local'] = './home.php';
                $_SESSION['fica'] = './new_filial.php';
                $_SESSION['numero_modal'] = 4;

                //redirecionar para a pagina

                header('location:../views/new_filial.php');
            }
            break;


        case "excluir":

            $id_avaliador = $_SESSION["id_bd"];
            $filial_obj->setId($sg->anti_sql_injection($filtro['id_filial']));

            $reslut_busca = $filial->excluir_filial($filial_obj);

            $_SESSION['local'] = './list_filial.php';
            $_SESSION['numero_modal'] = 2;
            $_SESSION['mensagem'] = "Excluido com sucesso!";

            //redirecionar para a pagina

            header('location:../views/list_filial.php');
            break;

        case "editar":

            //recebe dados form e verificando  
            //qualquer ataque sql injection    
            //setar dados no obejto
 
            $filial_obj->setId($sg->anti_sql_injection($filtro['id_filial']));
            $filial_obj->setNome($sg->anti_sql_injection($filtro['nome']));
            $filial_obj->setFone($sg->anti_sql_injection($filtro['fone']));
            $filial_obj->setObs($sg->anti_sql_injection($filtro['obs']));

            //busca classe
            $filial->alterar_filial($filial_obj);
            //dados para modal
            $_SESSION['fica'] = './list_filial.php';
            $_SESSION['numero_modal'] = 2;
            $_SESSION['mensagem'] = "Alterado com sucesso!";

            //redirecionar para a pagina
             header('location:../views/list_filial.php');
            
            break;

    }
}


