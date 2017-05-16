<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="../css/meu_css.css"  media="screen,projection"/>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <script type="text/javascript" src="../js/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="../js/materialize.min.js"></script> 
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load('current', {'packages': ['line']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {

                var data = new google.visualization.DataTable();
                data.addColumn('number', 'Dia');
                data.addColumn('number', 'Funcionario 1');

                data.addRows([
                    [1, 1],
                    [2, 2],
                    [3, 3],
                    [4, 4],
                    [5, 1],
                    [6, 5],
                    [7, 3],
                    [8, 5],
                    [9, 5],
                    [10, 4],
                    [11, 4],
                    [12, 2],
                    [13, 2],
                    [14, 4]
                ]);

                var options = {
                    chart: {
                        title: 'Grafico ',
                        
                    },
                    width: 800,
                    height: 400,
                    axes: {
                        x: {
                            0: {side: 'top'}
                        }
                    }
                };

                var chart = new google.charts.Line(document.getElementById('line_top_x'));

                chart.draw(data, google.charts.Line.convertOptions(options));
            }

            // dropdows
            $(document).ready(function () {
                $('select').material_select();
            });

        </script>
    </head>
    <body>
        <?php include 'menu.php'; ?>
        <div  class="container">
            <div class="row">
                <div class="account-wall" >
                    <strong><h5> Relátorios</h5></strong>
                    <br>
                    <div class="divider"></div>
                    <br>
                    <div class="row">

                        <div class='input-field col s12 '>
                            <select>
                                <option value="" disabled selected>Selecione Loja Filial</option>
                                <option value="1">Loja 1</option>
                                <option value="2">Loja 2</option>
                                <option value="3">Loja 3</option>
                            </select>               
                        </div>
                    </div>
                    <div class="row">
                        <div class='input-field col s12'>

                            <select>
                                <option value="" disabled selected>Selecione funcionario</option>
                                <option value="1">Todos</option>
                                <option value="2">Funcionario 1</option>
                                <option value="3">Funcionario 2</option>
                            </select>               
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
                                <button class="btn waves-effect waves-rigth" type="submit" name="action">Buscar
                                    <i class="material-icons right">done</i>
                                </button>
                            </div>

                        </div>

                    </div>
                    <div class="row">
                        <div class="col s12">
                            <div id="line_top_x"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col s12 m12 l12 ">

                            <div class="right">
                                <button class="btn waves-effect waves-rigth" type="submit" name="action">Exportar
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
