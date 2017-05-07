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
        <div  class="container">
            <div class="row">
                <div class="account-wall" >
                    <?php include 'menu.php'; ?>

                    <center><strong><h5>Editar Filial</h5></strong></center>
                    <br>
                    <!-- TABLE -->
                    <form class="edit-filial-form" method="post">

                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type="text" name="nome" id="nome" />
                                <label for="nome">*Nome</label>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type="text" name="fone" id="fone" />
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
                        <input type="hidden" name="op" value="edit_filial"/>
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
        <script type="text/javascript" src="../js/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="../js/materialize.min.js"></script> 
        <script type="text/javascript" src="../js/meu_estilo.js"></script>       

    </body>
</html>
