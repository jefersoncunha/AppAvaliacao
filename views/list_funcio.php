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

        <script>
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

                    <center><strong><h5>Listar Funcionário</h5></strong></center>
                    <br>


                    <div class="row">

                        <div class="col s6 m6 l6">

                            <select>
                                <option value="" disabled selected>Selecione Loja</option>
                                <option value="1">Loja 1</option>
                                <option value="2">Loja 2</option>
                                <option value="3">Loja 3</option>
                            </select>               
                        </div>

                        <div class=" col s6 m6 l6 ">

                            <div class="right">
                                <button class="btn waves-effect waves-rigth" type="submit" name="action">Buscar
                                    <i class="material-icons right">done</i>
                                </button>
                            </div>

                        </div>
                    </div>

                    <div class="section"></div>

                    <strong><h5>Seus Funcionários</h5></strong>

                    <div class="section"></div>


                    <!-- AQUI COLOCAR FOR PARA LISTAR FUNCIONARIOS DA FILIAL SELECIOANDA NO DROP--> 

                    <div class="row">
                        <div class="col s12 m4 l3">
                            <div class="card  deep-orange lighten-3">
                                <div class="card-content white-text">
                                    <span class="card-title ">Funcionario 1</span>
                                    <p>

                                    </p>
                                </div>
                                <div class="card-action ">
                                    <a class="blue-text" href="edit_funcio.php">Editar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m4 l3">
                            <div class="card deep-orange lighten-3">
                                <div class="card-content white-text">
                                    <span class="card-title">Funcionario 2</span>
                                    <p>

                                    </p>
                                </div>
                                <div class="card-action">
                                    <a class="blue-text" href="edit_funcio.php">Editar</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--FIM DO FOR-->



                </div>
            </div>
            <?php include 'footer.php'; ?>

        </div>
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="../js/meu_estilo.js"></script>       

    </body>
</html>
