<!DOCTYPE html>
<html>
    <head>
        <?php include './_head.php'; ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    </head>

    <body>
        <?php include '../controllers/sessao.php';?>
        <?php include 'menu.php'; ?>

        <div  class="container">
            <div class="row">
                <div class="account-wall" >

                    <strong><h5>Sua(s) Loja(s)</h5></strong>
                    <br>
                    <!--INICIO DO LAÇO-->

                    <div class="row">
                        <div class="col s12 m6 l12">
                            <div class="card blue darken-4 darken-1 z-depth-2">
                                <div class="card-content white-text">
                                    <span class="card-title">Loja 1</span>
                                    <p>
                                        Fone: <strong>9956-5856</strong>
                                    </p>

                                </div>
                                <div class="card-action">
                                    <a href="edit_filial.php">Editar</a>
                                </div>
                            </div>
                        </div>
                   
                        <div class="col s12 m6 l12">
                            <div class="card blue darken-4 darken-1 z-depth-2">
                                <div class="card-content white-text">
                                    <span class="card-title">Loja 2</span>
                                    <p>
                                        Fone: <strong>9956-5856</strong>
                                    </p>                                    </div>
                                <div class="card-action">
                                    <a href="edit_filial.php">Editar</a>
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
        <?php include './_javaScripts.php'; ?>       

    </body>
</html>
