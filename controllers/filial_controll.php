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
    
    

    switch ($operacao){
    
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
            
            $filial->inserir($id_avaliador);
            
            $_SESSION["msgm"]="Cadastrado com Sucesso!";
            
            echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;URL=../views/index.php'>";
            
            break;
    
            
    }

    }
?>

