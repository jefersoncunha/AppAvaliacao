<!DOCTYPE html>
<html>
    <head>
        <?php
        include './_head.php';
        ?>
        <script type="text/javascript" src="../js/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="../js/materialize.min.js"></script> 
        <script type="text/javascript">

            //abrir modal
            $(document).ready(function () {
                $('.modal').modal();
                //now you can open modal from code
                $('#modal').modal('open');
            });
        </script>
    </head>
    <body>
        <?php include '../controllers/sessao.php'; ?>
        <?php include 'menu.php'; ?>
        <div  class="container">
            <div class="row">
                <div class="account-wall" >
                    <div class="row">
                        <strong><h5><i>Novo Critério</i></h5></strong>
                        <div class="divider col s8 m6 l6"></div>
                    </div>                    <br>
                    <!-- TABLE -->
                    <form  method="post" action="../controllers/criterio_controll.php">

                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type="text" name="criterio" id="criterio" required autofocus/>
                                <label for="criterio">Critério/Questão</label>
                            </div>
                            <div class="right" style=" margin-right: 10px;">
                                <label><i>Este critério será avaliado com conta de 1 à 5</i></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="descricao" class="materialize-textarea" name="descricao" required autofocus></textarea>
                                <label for="descricao">Descrição</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="right" style=" margin-right: 10px;">
                                <label><i>Obs: Todos os campos são obrigatórios</i></label>
                            </div>
                        </div>
                        <input type="hidden" name="op" value="cadastro_criterio"/>
                        <div class="row">
                            <div class=" input-field  col s12 m12 l12 ">

                                <div class="right">
                                    <button class="btn waves-effect waves-rigth" type="submit" name="action">Cadastrar
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
         <script type="text/javascript" src="../js/meu_estilo.js"></script> 
        <?php
        //verifica se exites valor sessao
        include './modal.php';
        ?>

       
    </body>
</html>
