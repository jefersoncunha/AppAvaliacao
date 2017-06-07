<!DOCTYPE html>
<html>
    <head>
        <?php include './_head.php'; ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <?php include './_javaScripts.php'; ?>     
        <script type="text/javascript" src="../js/modal.js"></script> 
    </head>

    <body>
        <?php include '../controllers/sessao.php'; ?>
        <?php include 'menu.php'; ?>
        <?php
        require '../dao/filial_dao.php';
        $filial = new filial_dao();
        $result_filiais = $filial->busca_filial_listar_todas($_SESSION['id_bd']);
        if ($result_filiais->num_rows > 0) {//verifica se possui filiais 
            ?>  
            <div  class="container">
                <div class="row">
                    <div class="account-wall" >

                        <div class="row">
                            <strong><h5><i>Sua(s) Filial(is)</i></h5></strong>
                            <div class="divider col s8 m6 l6"></div>
                        </div>
                        <br>
                        <form name="formFilial" method="post" action="../views/edit_filial.php">
                            <div class="row">
                                <?php while ($row = mysqli_fetch_assoc($result_filiais)) { ?>
                                    <div class="col s12 m6 l6">
                                        <div class="card blue darken-4 darken-1 z-depth-2">
                                            <div class="card-content white-text">
                                                <strong><span class="card-title"><?php echo $row['nome']; ?></span></strong>
                                                <p>
                                                    Fone: <strong><?php echo $row['fone']; ?></strong><br>
                                                    Obs: <strong><?php echo $row['observacao']; ?></strong>
                                                </p>
                                                <!--<p>
                                                    Funcionarios: <strong>10</strong>
                                                </p>
                                                <p>
                                                    Avaliações: <strong><span class="new badge grey" data-badge-caption="" >10/10</span></strong>
                                                </p>-->
                                            </div>
                                            <input type="hidden" value="editarFilial" >
                                            <div class="card-action ">
                                                <center><a href="edit_filial.php?idFilial=<?php echo $row['id']; ?>">Editar</a></center>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?><!--FIM DO LAÇO-->
                            </div>
                        </form>
                    </div>
                </div>
                <?php
            }  else {//nao possui filiais cadastradas
            
            $_SESSION['cadastro'] = './new_filial.php';
            $_SESSION['mensagem'] = 'Você não possui Filial cadastrada';
            $_SESSION['home'] = './home.php';
            $_SESSION['numero_modal'] = 5;
            }
            ?>
            <?php include 'footer.php'; ?>
        </div>
        <!--Import jQuery before materialize.js-->
        <?php
        include './modal.php';
        ?>

    </body>
</html>
