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

                    <strong><h5>Seus Critério</h5></strong>
                    <br>
                    
                    <form class="list-criterio" method="post">
                        
                        <!--INICIO DO LAÇO-->

                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="card indigo accent-1 darken-1 z-depth-2">
                                    <div class="card-content white-text ">
                                        <span class="card-title">Possui roupa adequada?</span>
                                        <p>Este criterio tem como objetivo de analisar se o funcionario está vindo com roupas adequadas</p>
                                    </div>
                                    <div class="card-action">
                                        <a href="edit_criterio.php">Editar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="card indigo accent-1 darken-1 z-depth-2">
                                    <div class="card-content white-text ">
                                        <span class="card-title">Possui roupa adequada?</span>
                                        <p>Este criterio tem como objetivo de analisar se o funcionario está vindo com roupas adequadas</p>
                                    </div>
                                    <div class="card-action">
                                        <a href="edit_criterio.php">Editar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!--FIM DO LAÇO-->

                    </form>

                </div>
                <?php include 'footer.php'; ?>

            </div>
        </div>
        <!--Import jQuery before materialize.js-->
        <?php include './_javaScripts.php'; ?>       

    </body>
</html>
