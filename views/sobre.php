<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?php include './_head.php'; ?>
        <!--Import jQuery before materialize.js-->
        <?php include './_javaScripts.php'; ?> 
        <script type="text/javascript">
            $(document).ready(function () {
                $('.slider').slider();

            });
        </script>
    </head>
    <body>
        <div class="slider fullscreen">

            <ul class="slides ">
                <li>
                    <img src="../imgs/A-AVALIAÇÃO-DE-DESEMPENHO.jpg" style="opacity:0.45">  <!--random image -->
                    <div class="caption right-align">
                        <br>
                        <h3 class="blue-text"><i><strong>Myteam</strong></i></h3>
                        <h5 class=" black-text"><strong>Foi feito sob medida para auxiliar gerentes ou pessoas
                                responsáveis em avaliar colaboradores de sua empresa.
                                <center><p><a href="../index.php" class="btn black-text z-depth-2"><i>Voltar ao Login</i></a></p></center>

                            </strong></h5>
                    </div>
                </li>
                <li>
                    <img src="../imgs/avaliação-de-desempenho.jpg" style="opacity:0.45"> <!-- random image -->
                    <div class="caption left-align ">
                        <h3 class="blue-text">360 °</h3>
                        <h5 class=" black-text">
                            <strong> A avalição é feita de forma 360°, ou seja,
                                onde o superior imediato ou responsavel pela avaliação 
                                aplica notas avaliativas(0 - 5) em criterios criados pelo mesmo.
                                <center><p><a href="../index.php" class="btn black-text z-depth-2"><i>Voltar ao Login</i></a></p></center>

                            </strong></h5>


                    </div>
                </li>

            </ul>

        </div>

    </body>
</html>
