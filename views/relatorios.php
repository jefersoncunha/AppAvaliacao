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
        <script type="text/javascript" src="../js/Chart.min.js"></script> 
        <script type="text/javascript">
            var randomnb = function () {
                return Math.round(Math.random() * 300)
            };
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
        <script type="text/javascript" src="../js/grafico.js"></script>       

    </body>
</html>
