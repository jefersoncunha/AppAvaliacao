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

    </head>

    <body>
        <?php include '../controllers/sessao.php';?>
        <?php include 'menu.php'; ?>

        <div  class="container">
            <div class="row">
                <div class="account-wall" >

                    <strong><h5>Selecione uma Loja</h5></strong>

                    <div class=" col s12 divider"></div>
                    <br>
                    <!--INICIO DO LAÇO-->

                    <div class="row">
                        <div class="col s12 m6 l6">
                            <div class="card blue darken-4 darken-1 z-depth-2">
                                <div class="card-content white-text">
                                    <strong><span class="card-title">Loja 1</span></strong>
                                    <p>
                                        Fone: <strong>9956-5856</strong>
                                    </p>
                                    <p>
                                        Funcionarios: <strong>10</strong>
                                    </p>
                                    <p>
                                        Avaliações: <strong><span class="new badge grey" data-badge-caption="" >10/10</span></strong>
                                    </p>

                                </div>
                                <div class="card-action ">
                                    <center><a href="list_aval_funcio.php">Ver Funcionarios</a></center>
                                </div>
                            </div>
                        </div>

                        <div class="col s12 m6 l6">
                            <div class="card blue darken-4 darken-1 z-depth-2">
                                <div class="card-content white-text">
                                    <strong><span class="card-title">Loja 2</span></strong>
                                    <p>
                                        Fone: <strong>9956-5856</strong>
                                    </p>
                                    <p>
                                        Funcionarios: <strong>10</strong>
                                    </p> 
                                    <p>
                                        Avaliações: <strong><span class="new badge red" data-badge-caption="">5/10</span></strong>
                                    </p>
                                </div>
                                <div class="card-action ">
                                    <center><a href="list_aval_funcio.php">Ver Funcionarios</a></center>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--FIM DO LAÇO-->

                    </form>

                </div>
            </div>
            <?php include 'footer.php'; ?>

        </div>
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="../js/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="../js/materialize.min.js"></script> 
        <script type="text/javascript" src="../js/meu_estilo.js"></script>       

    </body>
</html>
