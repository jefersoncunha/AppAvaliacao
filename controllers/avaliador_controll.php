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
            $avaliador->senha = $sg->cripto($senha_Avaliador);//cripto senha
            $avaliador->email = $email_Avaliador;
            $avaliador->organizacao = $organizacao_Avaliador;

            //verifica login
            $result = $avaliador->busca_login($nome_Avaliador, $senha_Avaliador);

            if (mysqli_num_rows($result) > 0) {

                //criando sessão para msmgm modal
                session_start();

                $_SESSION['local'] = './singup.php';
                 $_SESSION['numero_modal'] = 1;

                echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;URL=../views/singup.php'>";
            } else {
                //criando sessão para msmgm modal
                session_start();

                //busca classe
                $avaliador->inserir();

                $_SESSION['local'] = '../index.php';
                 $_SESSION['numero_modal'] = 2;
                //redirecionar para a pagina
                echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;URL=../views/singup.php'>";
                //echo "ok";
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

                    session_start();
                    
                    $_SESSION['nome_bd'] = $nomeBanco;
                    $_SESSION['id_bd'] = $idBanco;
                    $_SESSION['senha_bd'] = $senhaBanco;
                    $_SESSION['email_bd'] = $emailBanco;
                    $_SESSION['empre_bd'] = $empreBanco;

                    //echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;URL=../views/home.php'>";
                    header('location:../views/home.php');
                } else {
                    session_start();
                    $_SESSION['local'] = './index.php';
                    $_SESSION['numero_modal'] = 3;
                    
                    echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;URL=../index.php'>";
                }
            } else {
                session_start();
                $_SESSION['local'] = './index.php';
                $_SESSION['numero_modal'] = 3;

                echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;URL=../index.php'>";
           
                //Redireciona para a página de autenticação
                //header('location:login.php');
            }

            break;
            
        case 'editar_login':
            
            session_start();
            
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
            
             echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;URL=../index.php'>";

            
            break;
        default:
            break;
    }
};
?>