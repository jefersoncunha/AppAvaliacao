<!DOCTYPE html>
<?php include '../controllers/sessao.php'; ?>

<html>
    <head>
        <?php include './_head.php'; ?>

        <script type="text/javascript" src="../js/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="../js/materialize.min.js"></script> 
        <script type="text/javascript" src="../js/Chart.min.js"></script> 
        <script type="text/javascript" src="../js/grafico.js"></script>     

        <script type="text/javascript">
            

            $(document).ready(function () {
                //listar o select
                $('select').material_select();

                $("#cbx_filial").change(function () {
                    //$('#cbx_localidad').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');
                    $("#cbx_filial option:selected").each(function () {
                        id_filial = $(this).val();
                        $.post("list_funcionario_select.php", {
                            id_filial: id_filial},
                                function (data) {
                                    //alert(data);
                                    $("#cbx_funcionario").html(data);
                                    //listar no select TEM QUE TER 5h para descobrir
                                    $('select').material_select();
                                });
                    });
                })

            });

            
                
        </script>  


    </head>
    <body>

        <?php
        include 'menu.php';
        include '../dao/filial_dao.php';
        include '../dao/funcionario_dao.php';

        $filial = new filial_dao();
        $funcio = new funcionario_dao();
        $result_filiais = $filial->busca_filial_listar_todas($_SESSION['id_bd']);
        ?>
        <div  class="container">
            <div class="row">
                <div class="account-wall" >
                    <div class="row">
                        <strong><h5><i>Relatório de Avaliação</i></h5></strong>
                        <div class="divider col s8 m6 l6"></div>
                    </div>  
                    <br>
                    <form id="formDados" name="formDados">

                        <div class="row">
                            <label for="filial">Filial:</label>

                            <div class="input-field col s12" >
                                <select name="cbx_filial" id="cbx_filial">
                                    <option value="" disabled selected>: Escolha uma filial :</option>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($result_filiais)) {
                                        ?>
                                        <option value="<?php echo $row['id']; ?>" > <?php echo $row['nome']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <label for="cbx_funcionario">Funcionário:</label>
                            <div class="input-field col s12" >
                                <select name="cbx_funcionario" id="cbx_funcionario" >
                                    <option value="" disabled selected>: Escolha um funcionario :</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 l4 m4">
                                <label >Periodo de avaliação:</label>
                            </div>
                            <div class="col s12 l4 m4">
                                <label for="de">De:</label>

                                <input type="date" name="de" id="de" class="datepicker"> 
                            </div>

                            <div class="col s12 l4 m4">
                                <label for="ate">Até:</label>

                                <input type="date" name="ate" id="ate" class="datepicker">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s12 m12 l12 ">
                                <div class="right">
                                    <button class="btn waves-effect waves-rigth blue darken-1" 
                                            type="submit" onclick="geraGrafico()">Buscar
                                        <i class="material-icons right">done</i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <!-- MOSTRAR O GRAFICO-->
                    <div class="row">
                        <div class=" col s12 box ">
                            <div class="box-chart">
                                <canvas id="GraficoLine" name="GraficoLine" style="width:100%;"></canvas>
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


    </body>
</html>
