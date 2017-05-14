<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="../css/meu_css.css"  media="screen,projection"/>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    </head>

    <body>
        <?php include 'menu.php'; ?>

        <div  class="container">
            <div class="row">
                <div class="account-wall" >

                    <strong><h5>Nova Filial</h5></strong>
                    <br>
                    <!-- TABLE -->
                    <form class="cadastro-filial-form" method="post">

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
                                <textarea id="obs" class="materialize-textarea"></textarea>
                                <label for="obs">Observação</label>
                            </div>
                            <div class="right" style=" margin-right: 10px;">
                                <label><i>*Campos obrigatórios</i></label>
                            </div>

                        </div>
                        <input type="hidden" name="op" value="cadastro_filial"/>
                        <div class="row">
                            <div class=" col s12 m12 l12 ">

                                <div class="right">
                                    <button class="btn waves-effect waves-rigth" type="submit" name="action">Cadastrar
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
        <script type="text/javascript" src="../js/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="../js/materialize.min.js"></script> 
        <script type="text/javascript" src="../js/meu_estilo.js"></script>       

    </body>
</html>
