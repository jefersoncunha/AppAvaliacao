<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>MyTeam</title>
        <link rel="stylesheet" href="../css/login.css">
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="../css/meu_css.css"  media="screen,projection"/>
        <!--Let browser know website is optimized for mobile-->

    </head>
    <body>
        <div class="container " >
            <div class="row">
                
                <div class="col s12">
                    <div class="account-wall" >
                        <?php include './menu.php'; ?>
                        <div class="center-align"><h5>Tela de configurações da conta</h5>
                        </div>
                        <form class="cadastro-login-form" method="post">
                            <input type="text" class="form-control" placeholder="Nome" id="nome" name="nome" required autofocus style="margin-top: 10px;">
                            <input type="password" class="form-control" placeholder="Senha" id="senha" name="senha"required style="margin-top: 10px;">
                            <input type="email" class="form-control" placeholder="E-mail" id="email" name="email"required style="margin-top: 10px;">
                            <input type="text" class="form-control" placeholder="Nome da Empresa" id="empresa" name="empresa"required style="margin-top: 10px;">
                            <input type="hidden" name="op" value="editar_login"/>
                            <div class="row">
                                <div class=" col s12 m12 l12 ">
                                    
                                    <div class="right">
                                        <button class="btn waves-effect waves-rigth" type="submit" name="action" style="background-color: #1398d8;">Salvar
                                            <i class="material-icons right">done</i>
                                        </button>
                                    </div>
                                    <div class="left">

                                        <a href="home.php" class="text-center new-account ">Voltar</a>

                                    </div>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <?php include './footer.php'; ?>
        </div>
        
        <script type="text/javascript" src="../js/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="../js/materialize.min.js"></script> 
        <script type="text/javascript" src="../js/meu_estilo.js"></script> 
    </body>
</html>