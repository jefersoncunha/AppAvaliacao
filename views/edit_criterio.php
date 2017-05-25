<!DOCTYPE html>
<html>
    <head>
        <?php include './_head.php'; ?>

    </head>

    <body>
        <?php include '../controllers/sessao.php';?>
        <?php include 'menu.php'; ?>

        <div  class="container">
            <div class="row">
                <div class="account-wall" >

                    <strong><h5>Editar Critério</h5></strong>
                    <br>
                    <!-- TABLE -->
                    <form class="edit-criterio-form" method="post">

                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type="text" name="criterio" id="criterio" required autofocus />
                                <label for="criterio">Critério/Questão</label>
                            </div>
                            <div class="right" style=" margin-right: 10px;">
                                <label><i>Este critério será avaliado com conta de 1 à 5</i></label>
                            </div>
                        </div>


                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="descricao" class="materialize-textarea" required autofocus></textarea>
                                <label for="descricao">Descrição</label>
                            </div>
                        </div>

                        <div class="row">

                            <div class="right" style=" margin-right: 10px;">
                                <label><i>Obs: Todos os campos são obrigatórios</i></label>
                            </div>
                        </div>


                        <input type="hidden" name="op" value="edit_criterio"/>
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
                <?php include 'footer.php'; ?>

            </div>
        </div>
        <!--Import jQuery before materialize.js-->
        <?php include './_javaScripts.php'; ?>       

    </body>
</html>
