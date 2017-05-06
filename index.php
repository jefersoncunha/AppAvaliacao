<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Controle de Clientes</title>
        <link rel="stylesheet" href="css/login.css">
          <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <!--Let browser know website is optimized for mobile-->
        

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-md-offset-4">
                    
                    <div class="account-wall">
                        <img class="profile-img" src="imgs/avatar.png"
                             alt="">
                        <form class="login-form" method="post">
                            <input type="text" class="form-control" placeholder="Nome" id="nome" name="nome" required autofocus style="margin-top: 10px;">
                            <input type="password" class="form-control" placeholder="Senha" id="senha" name="senha"required style="margin-top: 10px;">
                            <input type="hidden" name="op" value="login"/>
                            <button class="btn btn-lg btn-secondary btn-block" type="submit" style="margin-top:20px">
                                Entrar
                            </button>
                        </form>
                        <a href="singup.php" class="text-center new-account ">Criar uma conta!</a>
                        <div class="clearfix"></div>
                        <div id="status" class=""></div>
                      
                    </div>
                </div>
            </div>
        </div>
        <script src="assets/js/usuarios.js"></script>
        
        <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script> 
        <script type="text/javascript" src="js/meu_estilo.js"></script> 
    </body>
</html>