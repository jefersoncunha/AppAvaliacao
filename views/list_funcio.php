<!DOCTYPE html>
<html>
    <head>
        <?php include './_head.php'; ?>

        <!--iniciando js para carregar o select das lojasa-->
        <script type="text/javascript" src="../js/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="../js/materialize.min.js"></script> 
        <script type="text/javascript" src="../js/modal.js"></script> 

        <script>
            $(document).ready(function () {
                $('select').material_select();
                //abrir modal

                $('.modal').modal();
                //now you can open modal from code
                $('#modal').modal('open');



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
                xmlhttp.open("GET", "./funcionario.php?Buscafilial=" + str, true);
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
                                    <option value="" disabled selected>Selecione uma loja para a busca</option>
                                    <?php
                                    $result_filiais = $filial->busca_filial_listar_todas($_SESSION['id_bd']);
                                    while ($row = mysqli_fetch_assoc($result_filiais)) {
                                        ?>
                                        <option value="<?php echo $row['id']; ?>" > <?php echo $row['nome']; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>                 
                            </div>
                          </div>
                    </form>
                    <div class="row" id='funcionario' name='funcionario'>
                    </div>



                    <!--
                    
                    <div class="section"></div>
                    <div class="row">
                        <strong><h5><i>Seus Funcionário(s)</i></h5></strong>
                        <div class="divider col s8 m6 l6"></div>
                    </div> 

                    <div class="row">
                        <div class="col s12" id='funcionario' name='funcionario'>

                        </div>
                    </div>
                    
                    <div class="section"></div>
                        <div class="row" id="status">
                            <div class="col s12 m6 l6">
                                <div class="card   blue lighten-4 lighten-3 z-depth-2">
                                    <div class="card-content black-text">
                                        <span class="card-title  "><strong></strong></span>
                                        <p>
                                            Sobrenome: 
                                        </p>
                                        <p>
                                            Função: 
                                        </p>
                                    </div>
                                    <div class="card-action ">
                                        <a class="blue-text" href="edit_funcio.php">Editar</a>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                    <!--FIM DO FOR-->                         
                </div>
            </div>
            <?php include 'footer.php'; ?>

        </div>
        <!--Import jQuery before materialize.js-->

        <script type="text/javascript" src="../js/meu_estilo.js"></script>       

    </body>
</html>
