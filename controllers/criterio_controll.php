
<?php

//filtro contra INJECTION
$filtro = filter_input_array(INPUT_POST, FILTER_DEFAULT);

//limpa sessões
require './_cleanSession.php';

//inicia sessao
session_start();
    
//verifica se variavel possui valor
if (isset($filtro['op'])) {

    

    //inclusões de classses
    require './seguranca.php';
    require '../dao/criterio_dao.php';
    require '../model/Criterio.php';


    //objetos
    $criterio = new criterio_dao();
    $sg = new seguranca();
    $ObjC = new Criterio();

    //recebe tipo de operação do form    
    $operacao = $sg->anti_sql_injection($filtro['op']);

    switch ($operacao) {

        case "cadastro_criterio":

            //recebe dados form e verificando  
            //qualquer ataque sql injection       
            $id_avaliador = $_SESSION["id_bd"];

            //setar dados no obejto
            $ObjC->setNome($sg->anti_sql_injection($filtro['criterio']));
            $ObjC->setDescricao($sg->anti_sql_injection($filtro['descricao']));


            $criterio->inserir($id_avaliador, $ObjC);

            $_SESSION['local'] = './home.php';
            $_SESSION['fica'] = './new_criterio.php';
            $_SESSION['numero_modal'] = 4;

            header('location:../views/new_criterio.php');
            break;

         case "excluir":

            $id_avaliador = $_SESSION["id_bd"];
            $ObjC->setId($sg->anti_sql_injection($filtro['id_criterio']));

            $criterio->excluir_criterio($ObjC);

            $_SESSION['local'] = './list_criterio.php';
            $_SESSION['numero_modal'] = 2;
            $_SESSION['mensagem'] = "Excluido com sucesso!";

            //redirecionar para a pagina

            header('location:../views/list_criterio.php');
            break;

        case "editar":

            $ObjC->setId($sg->anti_sql_injection($filtro['id_criterio']));
            $ObjC->setNome($sg->anti_sql_injection($filtro['criterio']));
            $ObjC->setDescricao($sg->anti_sql_injection($filtro['descricao']));

                    
            //busca classe
            $criterio->alterar_criterio($ObjC);
            //dados para modal
            $_SESSION['fica'] = './list_filial.php';
            $_SESSION['numero_modal'] = 2;
            $_SESSION['mensagem'] = "Alterado com sucesso!";

            //redirecionar para a pagina
             header('location:../views/list_criterio.php');
            
            break;
    }
               

}



?>