<!DOCTYPE html>
<?php include '../controllers/sessao.php'; ?>

<html>
    <head>
        <?php include './_head.php'; ?>

        <script type="text/javascript" src="../js/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="../js/materialize.min.js"></script> 
        <script type="text/javascript" src="../js/Chart.min.js"></script> 
        <script type="text/javascript" src="../js/legend.js"></script> 
        <script type="text/javascript" src="../js/chartLine.js"></script> 
        <!--<script type="text/javascript" src="../js/grafico.js"></script>-->     
        <style>

            .legend {
                width: auto;
                height:auto;
                padding:15px;
                border: 1px solid rgb(200, 200, 200);
            }

            .legend .title {
                display: block;
                margin-bottom: 0.5em;
                line-height: 1.2em;
                padding: 0 0.3em;
            }

            .legend .color-sample {
                display: block;
                float: left;
                width: 1em;
                height: 1em;
                border: 2px solid; /* Comment out if you don't want to show the fillColor */
                border-radius: 0.5em; /* Comment out if you prefer squarish samples */
                margin-right: 0.5em;
            }
        </style>
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
                });

            });

        </script>  
    </head>
    <body>
        <?php
        include 'menu.php';
        include '../dao/filial_dao.php';
        include '../dao/funcionario_dao.php';
        require '../dao/criterio_dao.php';

        $filial = new filial_dao();
        $funcio = new funcionario_dao();
        $result_filiais = $filial->busca_filial_listar_todas($_SESSION['id_bd']);

        $criterio = new criterio_dao();
        $result = $criterio->busca_todos_criterios($_SESSION['id_bd']);
        ?>
        <div  class="container">
            <div class="row">
                <div class="account-wall" >
                    <div class="row">
                        <strong><h5><i>Relatório de Avaliação</i></h5></strong>
                        <div class="divider col s8 m6 l6"></div>
                    </div>  
                    <br>
                    <form id="formRelatorio" name="formRelatorio" class="formRelatorio">
                        <div class="row">
                            <label for="cbx_filial">Filial:</label>

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
                                    <option value="" disabled selected>: Escolha um funcionário :</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <label for="cbx_criterio">Critério:</label>

                            <div class="input-field col s12" >
                                <select name="cbx_criterio" id="cbx_criterio">
                                    <option value="" disabled selected>: Escolha um critério :</option>
                                    <?php while ($ln= mysqli_fetch_assoc($result)) { ?>                                        ?>
                                        <option value="<?php echo $ln['id']; ?>" > <?php echo $ln['nome']; ?></option>
                                    <?php } ?>
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
                                            type="submit"  >Buscar
                                        <i class="material-icons right">done</i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <!-- MOSTRAR O GRAFICO-->
                    <div class="row" style="width: 100%">
                        <canvas id="canvas" height="450" width="600"></canvas>
                        
                    </div>
                    <div class="row" >
                    <label for="lineLegend">Legenda critérios:</label>
                    <div class="col s12 " id="lineLegend" id="lineLegend"></div>
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
