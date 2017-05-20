
<?php
        session_start();

        //Caso o usuário não esteja autenticado, limpa os dados e redireciona
        if (!isset($_SESSION['nome_bd']) and ! isset($_SESSION['senha_bd'])) {
            //Destrói
            session_destroy();

            //Limpa
            unset($_SESSION['nome_bd']);
            unset($_SESSION['senha_bd']);

            //Redireciona para a página de autenticação
            header('location:../index.php');
        }
?>
   
