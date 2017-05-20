<?php

/**
 * responsavel por receber dadso e operações dos formularios
 * do ator avalaidor
 *
 * @author vagner
 */
//verifica de se variavel foi setada
if (isset($_POST['op'])) {

    //inclusões de classses
    include './avaliador_dao.php';


    //inicialização de obejtos
    $avaliador = new avaliador_dao();



    //recebe tipo de operação do form    
    $operacao = $_POST['op'];

    //busca operação
    switch ($operacao) {
        case "cadastro_login":

            //Deixando apenas letras e números na variável
            $_POST['nome'] = preg_replace('/[^[:alnum:]_]/', '',$_POST['nome']);
            $_POST['senha'] = preg_replace('/[^[:alnum:]_]/', '',$_POST['senha']);
            $_POST['email'] = preg_replace('/[^[:alnum:]_]/', '',$_POST['email']);
            $_POST['empresa'] = preg_replace('/[^[:alnum:]_]/', '',$_POST['empresa']);

            //recebe dados form e gerando criptografia da senha
            $nome_Avaliador = $_POST['nome'];
            $senha_Avaliador = sha1(md5($_POST['senha']));
            $email_Avaliador = $_POST['email'];
            $organizacao_Avaliador = $_POST['empresa'];

            //setar dados no obejto
            $avaliador->nome = $nome_Avaliador;
            $avaliador->senha = $senha_Avaliador;
            $avaliador->email = $email_Avaliador;
            $avaliador->organizacao = $organizacao_Avaliador;

            //verifica login
            $result = $avaliador->busca_login($nome_Avaliador, $senha_Avaliador);

            if (mysqli_num_rows($result) > 0) {

                //criando sessão para msmgm modal
                session_start();

                $_SESSION['local'] = './singup.php';

                echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;URL=../views/singup.php?numero=1'>";
            } else {
                //criando sessão para msmgm modal
                session_start();

                //busca classe
                $avaliador->inserir();

                $_SESSION['local'] = '../index.php';
                //redirecionar para a pagina
                echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;URL=../views/singup.php?numero=2'>";
                //echo "ok";
            }
            break;

        case "logar":
            //recebe dados form
            $nome_login = $_POST['nome_login'];
            //crpto senha
            $senha_login = sha1(md5($_POST['senha_login']));

            $nomeBanco = null;
            $senhaBanco = null;
            $emailBanco = null;

            $reslut_busca = $avaliador->busca_login($nome_login, $senha_login);

            while ($linha = mysqli_fetch_assoc($reslut_busca)) {
                $nomeBanco = $linha['nome'];
                $senhaBanco = $linha['senha'];
                $emailBanco = $linha['email'];
                
            } if ($nome_login == $nomeBanco) {
                if ($senha_login == $senhaBanco) {

                    session_start();
                    $_SESSION['nome_bd'] = $nomeBanco;
                    $_SESSION['senha_bd'] = $senhaBanco;
                    $_SESSION['email_bd'] = $emailBanco;

                    //echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;URL=../views/home.php'>";
                    header('location:../views/home.php');
                } else {
                    session_start();
                    $_SESSION['local'] = './index.php';
                    
                    echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;URL=../index.php?numero=3'>";
                }
            } else {
                session_start();
                $_SESSION['local'] = './index.php';

                echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;URL=../index.php?numero=3'>";
           
                //Redireciona para a página de autenticação
                //header('location:login.php');
            }

            break;
        default:
            break;
    }
};
?>