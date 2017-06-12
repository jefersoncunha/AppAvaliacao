<!DOCTYPE html>
<html>
    <head>
        <?php include './_head.php'; ?>

    </head>

    <body>
        <?php include '../controllers/sessao.php'; ?>
        <?php
        include 'menu.php';

        require '../dao/criterio_dao.php';
        require '../controllers/seguranca.php';
        require '../model/Criterio.php';


        //filtro contra INJECTION
        $filtro = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        $sg = new seguranca();
        $criterio = new criterio_dao();
        $ObjC = new Criterio();


        //recebe dados form e verificando  
        //qualquer ataque sql injection       
        $id_avaliador = $_SESSION["id_bd"];

        //setar dados no obejto
        $ObjC->setId($sg->anti_sql_injection($filtro['id_criterio']));

        $reslut_busca = $criterio->busca_criterio_id($id_avaliador, $ObjC);
        ?>

        <div  class="container">
            <div class="row">
                <div class="account-wall" >

                    <div class="row">
                        <strong><h5><i>Editar Critério</i></h5></strong>
                        <div class="divider col s8 m6 l6"></div>
                    </div>                    <br>
                    <!-- TABLE -->
                    <form action="../controllers/criterio_controll.php" method="post">
                        <?php
                        while ($linha = mysqli_fetch_assoc($reslut_busca)) {
                            ?>
                            <input type="hidden" name="id_criterio" value="<?php echo $linha['id']; ?>"/>                 

                            <div class='row'>
                                <div class='input-field col s12'>
                                    <input class='validate' type="text" name="criterio" id="criterio" required autofocus value="<?php echo $linha['nome']; ?>" />
                                    <label for="criterio">Critério/Questão</label>
                                </div>
                                <div class="right" style=" margin-right: 10px;">
                                    <label><i>Este critério será avaliado com nota de 1 à 4</i></label>
                                </div>
                            </div>


                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="descricao" class="materialize-textarea" name="descricao" required autofocus><?php echo $linha['descricao']; ?></textarea>
                                    <label for="descricao">Descrição</label>
                                </div>
                            </div>

                            <div class="row">

                                <div class="right" style=" margin-right: 10px;">
                                    <label><i>Obs: Todos os campos são obrigatórios</i></label>
                                </div>
                            </div>

                        <?php } ?><!--FIM DO LAÇO-->

                        <div class="row">

                            <div class=" col s6 m6 l6 ">

                                <div>
                                    <button class="btn waves-effect waves-light red" type="submit" name="op" value="excluir">Excluir
                                        <i class="material-icons right">delete</i>
                                    </button>
                                </div>

                            </div>

                            <div class=" col s6 m6 l6 ">

                                <div class="right">
                                    <button class="btn waves-effect waves-rigth blue darken-1" type="submit" name="op" value="editar">Salvar
                                        <i class="material-icons right">done</i>
                                    </button>
                                </div>

                            </div>

                        </div>

                    </form>

                </div>
                <?php include 'footer.php'; ?>

            </div>
        </div>
        <!--Import jQuery before materialize.js-->
        <?php include './_javaScripts.php'; ?>       

    </body>
</html>
