<?php

/**
 * responsavel por receber dadso e operações dos formularios
 * do ator avalaidor
 *
 * @author vagner
 */
//verifica se variavel foi setada
if (isset($_POST['op'])) {

    //inclusões de classses
    include './seguranca.php';
    include '../dao/avaliador_dao.php';



    //inicialização de obejtos
    $avaliador = new avaliador_dao();
    $sg = new seguranca();

    session_start();


    //recebe tipo de operação do form    
    $operacao = $_POST['op'];

    //busca operação
    switch ($operacao) {
        case "cadastro_login":

            //recebe dados form e verificando  
            //qualquer ataque sql injection
            $nome_Avaliador = $sg->anti_sql_injection($_POST['nome']);
            $email_Avaliador = $sg->anti_sql_injection($_POST['email']);
            $organizacao_Avaliador = $sg->anti_sql_injection($_POST['empresa']);
            $senha_Avaliador = $sg->anti_sql_injection($_POST['senha']);

            //setar dados no obejto
            $avaliador->nome = $nome_Avaliador;
            $avaliador->senha = $sg->cripto($senha_Avaliador); //cripto senha
            $avaliador->email = $email_Avaliador;
            $avaliador->organizacao = $organizacao_Avaliador;

            //verifica login
            $result = $avaliador->busca_login($nome_Avaliador, $senha_Avaliador);

            if (mysqli_num_rows($result) > 0) {


                $_SESSION['local'] = './singup.php';
                $_SESSION['numero_modal'] = 1;
                header('location:../views/singup.php');
            } else {

                //busca classe
                $avaliador->inserir();

                $_SESSION['local'] = '../index.php';
                $_SESSION['numero_modal'] = 2;
                //redirecionar para a pagina
                header('location:../views/singup.php');
            }
            break;

        case "logar":
            //recebe dados form e verifica sqlinjection
            $nome_login = $sg->anti_sql_injection($_POST['nome_login']);
            //crpto senha
            $senha_login = sha1(md5($sg->anti_sql_injection($_POST['senha_login'])));

            $idBanco = null;
            $nomeBanco = null;
            $senhaBanco = null;
            $emailBanco = null;
            $empreBanco = null;

            $reslut_busca = $avaliador->busca_login($nome_login, $senha_login);

            while ($linha = mysqli_fetch_assoc($reslut_busca)) {
                $idBanco = $linha['id'];
                $nomeBanco = $linha['nome'];
                $senhaBanco = $linha['senha'];
                $emailBanco = $linha['email'];
                $empreBanco = $linha['organizacao'];
            } if ($nome_login == $nomeBanco) {
                if ($senha_login == $senhaBanco) {


                    $_SESSION['nome_bd'] = $nomeBanco;
                    $_SESSION['id_bd'] = $idBanco;
                    $_SESSION['senha_bd'] = $senhaBanco;
                    $_SESSION['email_bd'] = $emailBanco;
                    $_SESSION['empre_bd'] = $empreBanco;

                    header('location:../views/home.php');
                } else {
                    $_SESSION['local'] = './index.php';
                    $_SESSION['numero_modal'] = 3;

                    header('location:../index.php');
                }
            } else {
                $_SESSION['local'] = './index.php';
                $_SESSION['numero_modal'] = 3;
                header('location:../index.php');
            }

            break;

        case 'editar_login':

            $id_Avaliador = $_SESSION['id_bd'];
            $nome_Avaliador = $sg->anti_sql_injection($_POST['nome']);
            $email_Avaliador = $sg->anti_sql_injection($_POST['email']);
            $organizacao_Avaliador = $sg->anti_sql_injection($_POST['empresa']);

            //setar dados no obejto
            $avaliador->id = $id_Avaliador;
            $avaliador->nome = $nome_Avaliador;
            $avaliador->email = $email_Avaliador;
            $avaliador->organizacao = $organizacao_Avaliador;

            $avaliador->alterar();
            header('location:../index.php');

            break;
        default:
            break;
    }
};
?>