<!DOCTYPE html>
<html>
    <head>
        <?php include './_head.php'; ?>
        <script type="text/javascript" src="../js/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="../js/materialize.min.js"></script> 
        <script type="text/javascript">

            
            $(document).ready(function () {
                //abrir modal
                
                $('.modal').modal();
                //now you can open modal from code
                $('#modal').modal('open');
            });
        </script>
    </head>

    <body>
        <?php
        include '../controllers/sessao.php';
        include 'menu.php';
        ?>

        <div  class="container">
            <div class="row">
                <div class="account-wall" >
                    <div class="row">
                        <strong><h5><i>Nova Filial</i></h5></strong>
                        <div class="divider col s8 m6 l6"></div>
                    </div>
                    <br>
                    <!-- TABLE -->
                    <form  method="post" action="../controllers/filial_controll.php">

                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type="text" name="nome" id="nome" required autofocus />
                                <label for="nome">*Nome</label>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type="text" name="fone" id="fone" required autofocus/>
                                <label for="fone">*Telefone</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="obs" class="materialize-textarea" name="obs"></textarea>
                                <label for="obs">Observação</label>
                            </div>
                            <div class="right" style=" margin-right: 10px;">
                                <label><i>*Campos obrigatórios</i></label>
                            </div>

                        </div>
                        <div class="row">
                            <div class=" col s12 m12 l12 ">

                                <div class="right">
                                    <button class="btn waves-effect waves-rigth blue darken-1" type="submit" name="op" value="cadastro_filial">Cadastrar
                                        <i class="material-icons right">done</i>
                                    </button>
                                </div>

                            </div>

                        </div>

                    </form>

                </div>
            </div>
            <?php include 'footer.php'; ?>

            <?php include './modal.php'; ?>
        </div>
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="../js/meu_estilo.js"></script> 
        <script type="text/javascript"src="../js/jquery-mask.js"></script>
        <script>
            //mascara 
            $(document).ready(function () {
                $('#fone').mask("(00) 00000-0000");
            });
        </script>
    </body>
</html>
