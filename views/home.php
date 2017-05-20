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
        <?php
        session_start();

        //Caso o usuário não esteja autenticado, limpa os dados e redireciona
        if (!isset($_SESSION['nome_db']) and ! isset($_SESSION['senha_db'])) {
            //Destrói
            session_destroy();

            //Limpa
            unset($_SESSION['nome_db']);
            unset($_SESSION['senha_db']);

            //Redireciona para a página de autenticação
            header('location:../index.php');
        }
        $nome_logado = $_SESSION['nome_bd'];
        $email_logado = $_SESSION['email_bd'];
        ?>

        <?php include './menu.php'; ?>

        <div  class="container">

            <div class="row">
                <div class="account-wall" >


                    <strong><h5>Suas avaliações</h5></strong>
                    <br>
                    <!-- TABLE -->
                    <table class="table table-action highlight centered">

                        <thead>
                            <tr>
                                <th class="t-small">Filial</th>
                                <th class="t-medium">Avaliação</th>
                                <th>Data Avaliação</th>
                                <th class="t-medium">Ação</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Nome filial</td>
                                <td>5 / 5 </td>
                                <td>27/09/2017</td>
                                <td class="t-status t-active"><a>Avaliar</a></td>
                            </tr>
                            <tr>
                                <td>Nome filial</td>
                                <td>5 / 5 </td>
                                <td>27/09/2017</td>
                                <td class="t-status t-active"><a>Avaliar</a></td>
                            </tr>
                            <tr>
                                <td>Nome filial</td>
                                <td>5 / 5 </td>
                                <td>27/09/2017</td>
                                <td class="t-status t-active"><a>Avaliar</a></td>
                            </tr>
                            <tr>
                                <td>Nome filial</td>
                                <td>5 / 5 </td>
                                <td>27/09/2017</td>
                                <td class="t-status t-active"><a>Avaliar</a></td>
                            </tr>
                            <tr>
                                <td>Nome filial</td>
                                <td>5 / 5 </td>
                                <td>27/09/2017</td>
                                <td class="t-status t-active"><a>Avaliar</a></td>
                            </tr>
                            <tr>
                                <td>Nome filial</td>
                                <td>5 / 5 </td>
                                <td>27/09/2017</td>
                                <td class="t-status t-active"><a>Avaliar</a></td>
                            </tr>
                            <tr>
                                <td>Nome filial</td>
                                <td>5 / 5 </td>
                                <td>27/09/2017</td>
                                <td class="t-status t-active"><a>Avaliar</a></td>
                            </tr>
                            <tr>
                                <td>Nome filial</td>
                                <td>5 / 5 </td>
                                <td>27/09/2017</td>
                                <td class="t-status t-active"><a>Avaliar</a></td>
                            </tr>
                            <tr>
                                <td>Nome filial</td>
                                <td>5 / 5 </td>
                                <td>27/09/2017</td>
                                <td class="t-status t-active"><a>Avaliar</a></td>
                            </tr>


                        </tbody>
                    </table>
                    <!-- END TABLE -->
                </div>
            </div>

        </div>


        <?php include './footer.php'; ?>


        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="../js/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="../js/materialize.min.js"></script> 
        <script type="text/javascript" src="../js/meu_estilo.js"></script>       

    </body>
</html>


