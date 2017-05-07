
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

                    <center><strong><h5>Cadastre-se</h5></strong></center>
                    <br>
                    <form class="cadastro-login-form" method="post">
                            <input type="text" class="form-control" placeholder="Nome" id="nome" name="nome" required autofocus style="margin-top: 10px;">
                            <input type="password" class="form-control" placeholder="Senha" id="senha" name="senha"required style="margin-top: 10px;">
                            <input type="email" class="form-control" placeholder="E-mail" id="email" name="email"required style="margin-top: 10px;">
                            <input type="text" class="form-control" placeholder="Nome da Empresa" id="empresa" name="empresa"required style="margin-top: 10px;">
                            <input type="hidden" name="op" value="cadastro_login"/>
                            <div class="row">

                                <div class="right" style=" margin-right: 10px;">
                                    <label><i>Obs: Todos os campos são obrigatórios</i></label>
                                </div>
                                <br>
                                <div class=" col s12 m12 l12 ">

                                    <div class="right">
                                        <button class="btn waves-effect waves-rigth" type="submit" name="action" style="background-color: #1398d8;">Salvar
                                            <i class="material-icons right">send</i>
                                        </button>
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
