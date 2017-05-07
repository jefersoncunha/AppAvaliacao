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
            <?php include './menu.php'; ?>

            <center><strong><h5>Suas avaliações</h5></strong></center>
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
                    
                    
                </tbody>
            </table>
            <!-- END TABLE -->

            <?php include './footer.php'; ?>

        </div>
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="../js/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="../js/materialize.min.js"></script> 
        <script type="text/javascript" src="../js/meu_estilo.js"></script>       

    </body>
</html>


