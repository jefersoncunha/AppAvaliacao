
<?php
//filtro contra INJECTION
$filtro= filter_input_array(INPUT_POST,FILTER_DEFAULT);

//verifica se variavel possui valor
if (isset($filtro['op'])) {
    
    //inicia sessao
    session_start();
    
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
    }
}
?>