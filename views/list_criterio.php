<!DOCTYPE html>
<html>
    <head>
        <?php include './_head.php'; ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <?php include './_javaScripts.php'; ?>     
        <script type="text/javascript" src="../js/modal.js"></script> 

        <script>

            $('.carousel').carousel();

        </script>
    </head>

    <body>
        <?php
        include '../controllers/sessao.php';
        include 'menu.php';
        require '../dao/criterio_dao.php';

        $criterio = new criterio_dao();
        $result = $criterio->busca_todos_criterios($_SESSION['id_bd']);
        if ($result->num_rows > 0) {//verifica se possui criterios 
            ?>
            <div  class="container">
                <div class="row">
                    <div class="account-wall" >
                        <div class="row">
                            <strong><h5><i>Seu(s) Critérios</i></h5></strong>
                            <div class="divider col s8 m6 l6"></div>
                        </div><br>
                        <!--INICIO DO LAÇO-->

                        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                            <form id="list-criterio" method="post" action="../views/edit_criterio.php"> 

                                <input type="hidden" name="id_criterio" value="<?php echo $row['id']; ?>"/>                 

                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="card indigo blue darken-1 z-depth-5">
                                            <div class="card-content white-text ">
                                                <span class="card-title"><?php echo $row['nome']; ?></span>
                                                <p><?php echo $row['descricao']; ?></p>
                                            </div>
                                            <button class="btn waves-effect waves-light blue darken-3" type="submit">Editar
                                                <i class="material-icons right">mode_edit</i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        <?php } ?><!--FIM DO LAÇO-->
                    </div>
                </div>
                <?php
            } else {//nao possui criterios cadastradas
                $_SESSION['cadastro'] = './new_criterio.php';
                $_SESSION['mensagem'] = 'Você não possui critério cadastrado';
                $_SESSION['home'] = './home.php';
                $_SESSION['numero_modal'] = 5;
            }
            ?>
        </div>
        <?php include 'footer.php'; ?>
        <?php
        include './modal.php';
        ?>

    </body>
</html>
