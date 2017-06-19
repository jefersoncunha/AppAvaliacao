<!DOCTYPE html>
<html>
    <head>
        <?php include './_head.php'; ?>
        <script type="text/javascript" src="../js/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="../js/materialize.min.js"></script> 
        <script type="text/javascript" src="../js/modal.js"></script> 
        <script>
            $(document).ready(function () {
                $('select').material_select();
            });
            function showUser(str) {
                if (str == "") {
                    document.getElementById("funcionario").innerHTML = "";
                    return;
                }
                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                } else { // code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("funcionario").innerHTML = this.responseText;
                    }
                }
                xmlhttp.open("GET", "./list_funcionario.php?Buscafilial=" + str, true);
                xmlhttp.send();
            }
        </script>
    </head>
    <body>
        <?php include '../controllers/sessao.php'; ?>
        <?php include 'menu.php'; ?>
        <?php
        include '../dao/filial_dao.php';
        $filial = new filial_dao();
        require '../dao/funcionario_dao.php';

        $result_filiais = $filial->busca_filial_listar_todas($_SESSION['id_bd']);

        if ($result_filiais->num_rows > 0) {//verifica se possui criterios 
            ?>
            <div  class="container">
                <div class="row">
                    <div class="account-wall" >
                        <div class="row">
                            <strong><h5><i>Listar Funcionário(s)</i></h5></strong>
                            <div class="divider col s8 m6 l6"></div>
                        </div>                    
                        <br>
                        <form action="">
                            <div class="row">
                                <div class="col s12">
                                    <select onchange="showUser(this.value)">
                                        <option value="" disabled selected>Selecione uma filial para a busca</option>
                                        <?php
                                        while ($row = mysqli_fetch_assoc($result_filiais)) {
                                            ?>
                                            <option value="<?php echo $row['id']; ?>" > <?php echo $row['nome']; ?></option>
                                        <?php } ?>
                                    </select>                 
                                </div>
                            </div>
                        </form>
                        <div class="row" id='funcionario' name='funcionario'></div>            
                    </div>
                </div>
                <?php include 'footer.php'; ?>
                </div>
            <?php
        } else {//nao possui criterios cadastradas
            $_SESSION['cadastro'] = './new_filial.php';
            $_SESSION['mensagem'] = 'Você não possui filial cadastrada';
            $_SESSION['home'] = './home.php';
            $_SESSION['numero_modal'] = 5;
        }
        ?>    
        <script type="text/javascript" src="../js/meu_estilo.js"></script>  
        <?php
        include './modal.php';
        ?>
    </body>
</html>
