<!DOCTYPE html>
<html>
    <head>
        <?php include './_head.php'; ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    </head>

    <body>
        <?php include '../controllers/sessao.php'; ?>
        <?php include 'menu.php'; ?>

        <?php
        require '../dao/filial_dao.php';
        $filial = new filial_dao();
        $result_filiais = $filial->busca_filial_listar_todas($_SESSION['id_bd']);
        ?>                                      
        <div  class="container">
            <div class="row">
                <div class="account-wall" >
                    
                    
                    <div class="row">
                        <strong><h5><i>Selecione uma Filial</i></h5></strong>
                        <div class="divider col s8 m6 l6"></div>
                    </div> 
                    <br>

                    

                    <!--<form method="get" action="../controllers/funcionario_controll.php">-->
                    <div class="row">
                        <!--<input type="hidden" name="op" value="listar_funcionarios_filial"/>-->
                        <!--INICIO DO LAÇO-->
                        <?php while ($row = mysqli_fetch_assoc($result_filiais)) {?>
                          <!--<input type="hidden" name="id_filial" value="<?php //echo $row['id']; ?>"/>-->
                            <div class="col s12 m6 l6">
                                <div class="card  blue darken-1 z-depth-5">
                                    <div class="card-content white-text">
                                        <strong><span class="card-title"><?php echo $row['nome']; ?></span></strong>
                                        <p>
                                            Fone: <strong><?php echo $row['fone']; ?></strong>
                                        </p>
                                        <!--<p>
                                            Funcionarios: <strong>10</strong>
                                        </p>
                                        <p>
                                            Avaliações: <strong><span class="new badge grey" data-badge-caption="" >10/10</span></strong>
                                        </p>-->
                                    </div>
                                    <div class="card-action  blue lighten-2">
                                        <center><a class="white-text waves-circle" href="list_aval_funcio.php?busca=<?php echo $row['id']; ?>">Ver Funcionarios</a></center>
                                    </div>
                                </div>
                            </div>
                        <?php } ?><!--FIM DO LAÇO-->
                    </div>
                    
                    <!--</form>-->
                </div>
            </div>
            <?php include 'footer.php'; ?>

        </div>
        <!--Import jQuery before materialize.js-->
        <?php include './_javaScripts.php'; ?>      

    </body>
</html>
