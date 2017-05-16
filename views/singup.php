
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
        <script>
            function goBack() {
                window.history.back();
            }
        </script>

    </head>

    <body>
        <div  class="container">
            <div class="row">
                <div class="account-wall" >

                    <center><strong><h5>Cadastre-se</h5></strong></center>
                    <br>
                    <form class="cadastro-login-form" method="post">



                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type="text" name="nome" id="nome" required autofocus />
                                <label for="nome">Nome</label>
                            </div>
                        </div>

                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type="text" name="senha" id="senha"  required autofocus/>
                                <label for="senha">Senha</label>
                            </div>
                        </div>

                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type="text" name="email" id="email" required autofocus/>
                                <label for="email">E-mail</label>
                            </div>
                        </div>

                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type="text" name="empresa" id="empresa" required autofocus/>
                                <label for="empresa">Empresa</label>
                            </div>
                        </div>
                        <input type="hidden" name="op" value="cadastro_login"/>
                        <div class="row">

                            <div class="right" style=" margin-right: 10px;">
                                <label><i>Obs: Todos os campos são obrigatórios</i></label>
                            </div>
                            <br>
                            <div class=" col s12 m12 l12 ">

                                <div class="right">
                                    <button class="btn waves-effect waves-rigth" type="submit" name="action">Salvar
                                        <i class="material-icons right">send</i>
                                    </button>
                                </div>

                                <div class="left">

                                    <button class="btn waves-effect waves-rigth" onclick="goBack()" style="background-color: #bdc7bb;">Voltar
                                        <i class="material-icons left">reply</i>
                                    </button>
                                    <!--
                                    <a href="../index.php" class="text-center new-account ">
                                        <i class="material-icons">reply</i>Voltar</a>
                                    -->
                                </div>

                            </div>

                        </div>
                    </form>

                </div>
            </div>
            <?php include './footer.php'; ?>

        </div>
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="../js/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="../js/materialize.min.js"></script> 
        <script type="text/javascript" src="../js/meu_estilo.js"></script>       

    </body>
</html>
