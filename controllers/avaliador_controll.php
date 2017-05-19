<?php

/**
 * responsavel por receber dadso e operações dos formularios
 * do ator avalaidor
 *
 * @author vagner
 */

//verifica de se variavel foi setada
if(isset($_POST['op'])){

    //inclusões de classses
    include './avaliador_dao.php';
    
    
    //inicialização de obejtos
    $avaliador = new avaliador_dao();
    
    
    
    //recebe tipo de operação do form    
    $operacao = $_POST['op']; 

    //busca operação
    switch ($operacao) {
    case "cadastro_login":
        
        //recebe dados form
        $nome_Avaliador = $_POST['nome'];
        $senha_Avaliador = $_POST['senha'];
        $email_Avaliador = $_POST['email'];
        $organizacao_Avaliador = $_POST['empresa'];
        
        //setar dados no obejto
        $avaliador->nome = $nome_Avaliador;
        $avaliador->senha = $senha_Avaliador;
        $avaliador->email = $email_Avaliador;
        $avaliador->organizacao=$organizacao_Avaliador;
        
        //busca classe
        $avaliador->inserir();
        
        break;

    default:
        break;
}
    
};




?>