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
    require '../model/Avaliador.php';

    //inicialização de obejtos
    $avaliador_dao = new avaliador_dao();
    $sg = new seguranca();
    $aval_model = new Avaliador();

    //inicia sessao
    session_start();

    //recebe tipo de operação do form    
    $operacao = $sg->anti_sql_injection($filtro['op']);

    //busca operação
    switch ($operacao) {
        case "cadastro_login":

            //recebe dados form e verificando  
            //qualquer ataque sql injection
            $nome_Avaliador = $sg->anti_sql_injection($filtro['nome']);
            $email_Avaliador = $sg->anti_sql_injection($filtro['email']);
            $organizacao_Avaliador = $sg->anti_sql_injection($filtro['empresa']);
            $senha_Avaliador = $sg->anti_sql_injection($filtro['senha']);

            //setar dados no objeto 
            $aval_model->setNome($nome_Avaliador);
            $aval_model->setEmail($email_Avaliador);
            $aval_model->setOrganizacao($organizacao_Avaliador);
            $aval_model->setSenha($sg->cripto($senha_Avaliador)); //cripto senha
            
            //verifica login
            $result = $avaliador_dao->busca_login($aval_model);

            if (mysqli_num_rows($result) > 0) {

                $_SESSION['local'] = './singup.php';
                $_SESSION['numero_modal'] = 1;
                header('location:../views/singup.php');
            } else {

                //busca classe
                $avaliador_dao->inserir($aval_model);

                $_SESSION['local'] = '../index.php';
                $_SESSION['numero_modal'] = 2;
                //redirecionar para a pagina
                header('location:../views/singup.php');
            }
            break;

        case "logar":
            //recebe dados form e verifica sqlinjection
            $email_login = $sg->anti_sql_injection($filtro['email_login']);
            //crpto senha
            $senha_login = sha1(md5($sg->anti_sql_injection($filtro['senha_login'])));

            //para armazenar dados do banco
            $idBanco = null;
            $nomeBanco = null;
            $senhaBanco = null;
            $emailBanco = null;
            $empreBanco = null;

            //seta obejto
            $aval_model->setEmail($email_login);
            $aval_model->setSenha($senha_login);

            $reslut_busca = $avaliador_dao->busca_login($aval_model);

            while ($linha = mysqli_fetch_assoc($reslut_busca)) {
                $idBanco = $linha['id'];
                $nomeBanco = $linha['nome'];
                $senhaBanco = $linha['senha'];
                $emailBanco = $linha['email'];
                $empreBanco = $linha['organizacao'];
            } if ($email_login == $emailBanco && $senha_login == $senhaBanco) {
                
                    $_SESSION['nome_bd'] = $nomeBanco;
                    $_SESSION['id_bd'] = $idBanco;
                    $_SESSION['senha_bd'] = $senhaBanco;
                    $_SESSION['email_bd'] = $emailBanco;
                    $_SESSION['empre_bd'] = $empreBanco;

                    header('location:../views/home.php');
                }
             else {
                $_SESSION['local'] = './index.php';
                $_SESSION['numero_modal'] = 3;
                header('location:../index.php');
            }

            break;

        case 'editar_login':

            $id_Avaliador = $_SESSION['id_bd'];
            $nome_Avaliador = $sg->anti_sql_injection($filtro['nome']);
            $email_Avaliador = $sg->anti_sql_injection($filtro['email']);
            $organizacao_Avaliador = $sg->anti_sql_injection($filtro['empresa']);

            //setar dados no objeto 
            $aval_model->setNome($nome_Avaliador);
            $aval_model->setEmail($email_Avaliador);
            $aval_model->setOrganizacao($organizacao_Avaliador);
            $aval_model->setId($id_Avaliador);

            $avaliador_dao->alterar($aval_model);
            header('location:../index.php');

            break;
        default:
            break;
    }
};
?>