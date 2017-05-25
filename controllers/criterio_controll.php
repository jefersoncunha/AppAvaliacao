
<?php

//verifica se variavel possui valor
if (isset($_POST['op'])) {
    
    //inicia sessao
    session_start();
    
    //inclusões de classses
    include './seguranca.php';
    include '../dao/criterio_dao.php';

    //objetos
    $sg = new seguranca();
    $criterio = new criterio_dao();

    //recebe tipo de operação do form    
    $operacao = $_POST['op'];

    switch ($operacao) {

        case "cadastro_criterio":
            
            
            //recebe dados form e verificando  
            //qualquer ataque sql injection       
            $id_avaliador = $_SESSION["id_bd"];
            $nome_criterio = $sg->anti_sql_injection($_POST['criterio']);
            $descricao = $sg->anti_sql_injection($_POST['descricao']);

            //setar dados no obejto
            $criterio->nome_cri=$nome_criterio;
            $criterio->descricao_cri=$descricao;

            $criterio->inserir($id_avaliador);

            $_SESSION['local'] = './home.php';
            $_SESSION['fica'] = './new_criterio.php';
            $_SESSION['numero_modal'] = 4;

            header('location:../views/new_criterio.php');
            break;
    }
}
?>