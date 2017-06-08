<!DOCTYPE html>
<html>
    <head>
        <?php include './_head.php'; ?>

        <!--iniciando js para carregar o select das lojasa-->
        <script type="text/javascript" src="../js/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="../js/materialize.min.js"></script> 
        <script type="text/javascript" src="../js/modal.js"></script> 

        <script>
            $(document).ready(function () {
                $('select').material_select();
                //abrir modal

                $('.modal').modal();
                //now you can open modal from code
                $('#modal').modal('open');

            });
        </script>
    </head>

    <body>
        <?php include '../controllers/sessao.php'; ?>
        <?php include 'menu.php'; ?>
        <?php
        include '../dao/filial_dao.php';

        $filial = new filial_dao();
        ?>

        <div  class="container">
            <div class="row">
                <div class="account-wall" >

                    <div class="row">
                        <strong><h5><i>Listar Funcionário(s)</i></h5></strong>
                        <div class="divider col s8 m6 l6"></div>
                    </div>                    <br>

                    <form action="list_funcio.php" method="post">
                        <div class="row">

                            <div class="col s6 m6 l6">

                                <select name="id_loja">
                                    <option value="" disabled selected>Selecione uma loja para a busca</option>
                                    <?php
                                    $result_filiais = $filial->busca_filial_listar_todas($_SESSION['id_bd']);

                                    while ($row = mysqli_fetch_assoc($result_filiais)) {
                                        ?>
                                        <option value="<?php echo $row['id']; ?>" > <?php echo $row['nome']; ?></option>
                                        <?php
                                    }
                                    ?>
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
                    </form>

                    <div class="section"></div>

                    <?php
                    require '../dao/funcionario_dao.php';

                    //filtro contra injecton
                    $filtro = filter_input_array(INPUT_POST, FILTER_DEFAULT);

                    $funcionario = new funcionario_dao();

                    $result_funcionario = $funcionario->busca_todos_funcionarios($_SESSION['id_bd']);
                    
                    if ($result_funcionario->num_rows > 0) {
                        ?>
                        <div class="row">
                            <strong><h5><i>Seus Funcionário(s)</i></h5></strong>
                            <div class="divider col s8 m6 l6"></div>
                        </div> 

                        <div class="section"></div>



                        <div class="row">
                            <div class="col s12 m6 l6">
                                <div class="card   blue lighten-4 lighten-3 z-depth-2">
                                    <div class="card-content black-text">
                                        <span class="card-title  "><strong>Funcionario 1</strong></span>
                                        <p>
                                            Sobrenome: sobrenome
                                        </p>
                                        <p>
                                            Função: função
                                        </p>
                                    </div>
                                    <div class="card-action ">
                                        <a class="blue-text" href="edit_funcio.php">Editar</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--FIM DO FOR-->
                        <?php
                    } else {//nao possui filiais cadastradas
                        $_SESSION['cadastro'] = './new_funcio.php';
                        $_SESSION['mensagem'] = 'Você não possui funcionario cadastrado';
                        $_SESSION['home'] = './home.php';
                        $_SESSION['numero_modal'] = 5;
                    }
                    ?>


                </div>
            </div>
            <?php include 'footer.php'; ?>

        </div>
        <!--Import jQuery before materialize.js-->

        <script type="text/javascript" src="../js/meu_estilo.js"></script>       

    </body>
</html>
