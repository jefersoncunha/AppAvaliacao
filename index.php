
<!DOCTYPE html>
<html>
    <head>
                <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <title>MyTeam</title>
        <link rel="stylesheet" href="css/login.css">
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="css/meu_css.css"  media="screen,projection"/>
        <!--Let browser know website is optimized for mobile-->
    </head>

    <body>
            <div class="row">

               <center>
                <!--<img class="responsive-img" style="width: 250px;" src="http://i.imgur.com/ax0NCsK.gif" /> -->
                <div class="section"></div>

                <h5 class="blue-text">Por Favor, entre com sua conta</h5>
                <div class="section"></div>

                <div class="container" >
                    <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
                        <img class="profile-img" src="imgs/avatar.png" alt="" style= "width: 145px; height: 135px; background-color: #c7cdcf">
                        <form class="col s12 login-form" method="post" action="controllers/avaliador_dao.php">
                            <div class='row'>
                                <div class='col s12'>
                                </div>
                            </div>

                            <input type="hidden" name="op" value="login"/>

                            <div class='row'>
                                <div class='input-field col s12'>
                                    <input class='validate' type="text" name="nome" id="nome" />
                                    <label for="nome">Nome</label>
                                </div>
                            </div>

                            <div class='row'>
                                <div class='input-field col s12'>
                                    <input class='validate' type='password' name='senha' id='senha' />
                                    <label for='senha'>Senha</label>
                                </div>
                                <!--<label style='float: right;'>
                                    <a class='pink-text' href='#!'><b>Recuperar senha</b></a>
                                </label>-->
                            </div>
                            
                                 <input type="hidden" name="operacao" value="logar">

                            <br />
                            <center>
                                <div class='row'>
                                    <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect blue'>Entrar</button>
                                </div>
                            </center>
                        </form>
                    </div>
                </div>
                <a href="views/singup.php">Criar um conta</a>
            </center>

                </div>
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script> 
        <script type="text/javascript" src="js/meu_estilo.js"></script>       
        <script type="text/javascript" src="js/usuario.js"></script>       

    </body>
</html>
