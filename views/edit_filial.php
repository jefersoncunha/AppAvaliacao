<!DOCTYPE html>
<html>
    <head>
        <?php include './_head.php'; ?>

    </head>

    <body>
        <?php include '../controllers/sessao.php'; ?>
        <?php include 'menu.php'; ?>

        <?php
        require '../dao/filial_dao.php';
        require '../controllers/seguranca.php';


        //filtro contra INJECTION
        $filtro = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        $sg = new seguranca();
        $filial_dao = new filial_dao();

        $id_fil = ($sg->anti_sql_injection($filtro['id_filial']));
        $id_aval = $_SESSION['id_bd'];
        ?>



        <div  class="container">
            <div class="row">
                <div class="account-wall" >

                    <div class="row">
                        <strong><h5><i>Editar Filial</i></h5></strong>
                        <div class="divider col s8 m6 l6"></div>
                    </div>
                    <br>
                    <!-- TABLE -->
                    <form class="edit-filial-form" method="post" action="../controllers/filial_controll.php">
                        <?php
                        $reslut_busca = $filial_dao->busca_filial_id($id_aval, $id_fil);

                        while ($linha = mysqli_fetch_assoc($reslut_busca)) {
                            ?>
                            <input type="hidden" name="id_filial" value="<?php echo $linha['id']; ?>"/>                 
                            <input type="hidden" name="op" value="edit_filial"/>

                            <div class='row'>
                                <div class='input-field col s12'>
                                    <input class='validate' type="text" name="nome" id="nome" value="<?php echo $linha['nome']; ?>"required autofocus/>
                                    <label for="nome">*Nome</label>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='input-field col s12'>
                                    <input class='validate' type="text" name="fone" id="fone" required autofocus value="<?php echo $linha['fone']; ?>"/>
                                    <label for="fone">*Telefone</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="obs" class="materialize-textarea" value="<?php echo $linha['observacao']; ?>"></textarea>
                                    <label for="obs">Observação</label>
                                </div>
                                <div class="right" style=" margin-right: 10px;">
                                    <label><i>*Campos obrigatórios</i></label>
                                </div>

                            </div>
                        <?php } ?><!--FIM DO LAÇO-->

                        <div class="row">
                            <div class=" col s6 m6 l6 ">

                                <div>
                                    <button class="btn waves-effect waves-light red" type="submit" name="action">Excluir
                                        <i class="material-icons right">delete</i>
                                    </button>
                                </div>

                            </div>

                            <div class=" col s6 m6 l6 ">

                                <div class="right">
                                    <button class="btn waves-effect waves-rigth" type="submit" name="action">Salvar
                                        <i class="material-icons right">done</i>
                                    </button>
                                </div>

                            </div>

                        </div>

                    </form>

                </div>
            </div>
            <?php include 'footer.php'; ?>

        </div>
        <!--Import jQuery before materialize.js-->
        <?php include './_javaScripts.php'; ?>

    </body>
</html>
