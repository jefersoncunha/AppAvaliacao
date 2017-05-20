<?php

        session_start();
        session_destroy();
        //Limpa
        unset($_SESSION['nome_bd']);
        unset($_SESSION['senha_bd']);

        //Redireciona para a página de autenticação
        header('location:../index.php');
?>
