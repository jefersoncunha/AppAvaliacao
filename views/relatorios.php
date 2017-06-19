<!DOCTYPE html>
<html>
    <head>
        <?php include './_head.php'; ?>

        <script type="text/javascript" src="../js/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="../js/materialize.min.js"></script> 
        <script type="text/javascript" src="../js/Chart.min.js"></script> 
        <script type="text/javascript">
            var randomnb = function () {
                return Math.round(Math.random() * 300);
            };

            $(document).ready(function () {
                $('select').material_select();

                //$('#loja').change(function () {
                //   $('#funcionario').load('fucionario.php?filial=' + $('#loja').val());
                //});


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
             xmlhttp.open("GET", "./funcionario.php?filial=" + str, true);
             xmlhttp.send();
             }

/*
            function showUser(str) {
                $('#funcionario').empty(); //Limpando a tabela
                $.ajax({
                    type: 'get', //Definimos o método HTTP usado
                    dataType: 'json', //Definimos o tipo de retorno
                    url: './funcionario.php?filial='+str , //Definindo o arquivo onde serão buscados os dados
                    success: function (dados) {
                        for (var i = 0; dados.length > i; i++) {
                            //Adicionando registros retornados na tabela
                            $('#funcionario').append('<option value="'+dados[i].id+'">'+dados[i].nome+'</option>');
                        }
                    }
                });
            }*/

        </script>  


    </head>
    <body>
        <?php include '../controllers/sessao.php'; ?>

        <?php
        include 'menu.php';
        include '../dao/filial_dao.php';
        include '../dao/funcionario_dao.php';

        $filial = new filial_dao();
        $funcio = new funcionario_dao();
        ?>
        <div  class="container">
            <div class="row">
                <div class="account-wall" >
                    <div class="row">
                        <strong><h5><i>Relatório</i></h5></strong>
                        <div class="divider col s8 m6 l6"></div>
                    </div>  
                    <br>
                    <div class="row">
                        <div class="input-field col s12" >
                            <select onchange="showUser(this.value)">
                                <option value="" disabled selected>Selecione Loja Filial
                                </option>
                                <?php
                                $result_filiais = $filial->busca_filial_listar_todas($_SESSION['id_bd']);

                                while ($row = mysqli_fetch_assoc($result_filiais)) {
                                    ?>
                                    <option value="<?php echo $row['id']; ?>" > 
                                        <?php echo $row['nome']; ?>
                                    </option>
                                    <?php
                                }
                                ?>
                            </select>               
                        </div>
                    </div>
                    <div class="row">
                        <div class='input-field col s12'>
                            <div id="funcionario" name="funcionario">

                            </div>        
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 l4 m4">
                            <label>Periodo</label>
                        </div>
                        <div class="col s12 l4 m4">
                            <input type="date" class="datepicker"> 
                        </div>
                        <div class="col s12 l4 m4">
                            <input type="date" class="datepicker">
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col s12 m12 l12 ">
                            <div class="right">
                                <button class="btn waves-effect waves-rigth blue darken-1" type="submit" name="action">Buscar
                                    <i class="material-icons right">done</i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- MOSTRAR O GRAFICO-->
                    <div class="row">
                        <div class=" col s12 box ">
                            <div class="box-chart">
                                <canvas id="GraficoLine" style="width:100%;"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col s12 m12 l12 ">

                            <div class="right">
                                <button class="btn waves-effect waves-rigth  amber darken-2" type="submit" name="action">Exportar
                                    <i class="material-icons right">done</i>
                                </button>
                            </div>

                        </div>

                    </div>


                </div>
            </div>
            <?php include 'footer.php'; ?>

        </div>
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="../js/meu_estilo.js"></script>       
        <script type="text/javascript" src="../js/grafico.js"></script>       

    </body>
</html>
