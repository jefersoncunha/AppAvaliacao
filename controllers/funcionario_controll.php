<?php

/**
 * responsavel por receber dadso e operações dos formularios
 * do ator avalaidor
 *
 * @author vagner
 */
//verifica se variavel foi setada
if (isset($_POST['op'])) {

    session_start();
    
    //inclusões de classses
    include './seguranca.php';
    include '../dao/funcionario_dao.php';



    //inicialização de obejtos
    $fucionario = new funcionario_dao();
    $sg = new seguranca();



    //recebe tipo de operação do form    
    $operacao = $_POST['op'];

    //busca operação
    switch ($operacao) {
        
        //cadastro funionario
        case "cadastro_funcionario":

            //recebe dados form e verificando  
            //qualquer ataque sql injection

            $nome_funcionario = $sg->anti_sql_injection($_POST['nome']);
            $sobrenome_funcionario = $sg->anti_sql_injection($_POST['sobrenome']);
            $email_funcionario = $sg->anti_sql_injection($_POST['email']);
            $fone_funcionario = $sg->anti_sql_injection($_POST['fone']);
            $sexo_funcionario = $sg->anti_sql_injection($_POST['sexo']);
            $funcao_funcionario = $sg->anti_sql_injection($_POST['funcao']);
            $id_loja = $sg->anti_sql_injection($_POST['id_loja']);
            $id_avaliador = $sg->anti_sql_injection($_SESSION['id_bd']);

            //setar dados no obejto
            $fucionario->nome = $nome_funcionario;
            $fucionario->sobrenome = $sobrenome_funcionario;
            $fucionario->email = $email_funcionario;
            $fucionario->fone = $fone_funcionario;
            $fucionario->sexo = $sexo_funcionario;
            $fucionario->funcao = $funcao_funcionario;

            //verifica login
            $result = $fucionario->busca_funcionario($id_avaliador, $id_loja);

            if (mysqli_num_rows($result) > 0) {

                //criando sessão para msmgm modal
                session_start();

                $_SESSION['numero_modal'] = 1;

                header('location:../views/new_funcio.php');

            } else {
                

                //busca classe
                $fucionario->inserir_funcionario($id_avaliador, $id_loja);

                $_SESSION['local'] = './home.php';
                $_SESSION['fica'] = './new_funcio.php';
                $_SESSION['numero_modal'] = 4;
                //redirecionar para a pagina
                header('location:../views/new_funcio.php');

                //echo "ok";
            }
            break;
            ///////////////////////////////////////////////////////////////////////////////////
            //faz busca dos funcionarios refrentes a loja
            case "listar_funcionarios_filial":
            
            $id_Filial = $sg->anti_sql_injection($_POST['id_filial']);
            
            $fucionario->busca_funcionario_filial($id_Filial);

            break;
    }
}
?>