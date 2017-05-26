<?php

//verifica se variavel foi setada
if (isset($_POST['op'])) {
    //inclusões de classses
    include './seguranca.php';
    include '../dao/filial_dao.php';

    //objetos
    $sg = new seguranca();
    $filial = new filial_dao();



    //recebe tipo de operação do form    
    $operacao = $_POST['op'];



    switch ($operacao) {

        case "cadastro_filial":

            session_start();

            //recebe dados form e verificando  
            //qualquer ataque sql injection       
            $id_avaliador = $_SESSION["id_bd"];
            $nome_Filial = $sg->anti_sql_injection($_POST['nome']);
            $fone_Filial = $sg->anti_sql_injection($_POST['fone']);
            $obs_Filial = $sg->anti_sql_injection($_POST['obs']);

            //setar dados no obejto
            $filial->nome_fil = $nome_Filial;
            $filial->fone_fil = $fone_Filial;
            $filial->obs_fil = $obs_Filial;

            //verifica filial
            $result = $filial->busca_filial($id_avaliador);

            if (mysqli_num_rows($result) > 0) {

               
                //criando sessão para msmgm modal
                session_start();

                $_SESSION['numero_modal'] = 1;

                header('location:../views/new_filial.php');
            } else {

                //busca classe
                $filial->inserir($id_avaliador);
                
                
                $_SESSION['local'] = './home.php';
                $_SESSION['fica'] = './new_filial.php';
                $_SESSION['numero_modal'] = 4;

                //redirecionar para a pagina
                header('location:../views/new_filial.php');
            }


            break;
    }
}
?>

