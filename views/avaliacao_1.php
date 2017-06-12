<!DOCTYPE html>
<html>
    <head>
        <?php include './_head.php'; ?>

    </head>

    <body>
        <?php require '../controllers/sessao.php'; ?>
        <?php include 'menu.php'; ?>
        <?php
        require '../dao/funcionario_dao.php';
        require '../dao/criterio_dao.php';

        //filtro contra injecton
        $filtro = filter_input_array(INPUT_GET, FILTER_DEFAULT);

        $funcionario = new funcionario_dao();
        $criterio = new criterio_dao();
        //recebe por GET 
        $id = $filtro['buscafuncionario'];

        $result_funcionario = $funcionario->busca_funcionario_id($id);
        ?>


        <div  class="container">
            <div class="row">
                <div class="account-wall" >                    
                    <div class="col s12 m1 l1"></div>

                    <div class="col s12 m10 l10">
                        <!--<h5 class="header">Funcionario 1</h5>-->
                        <div class="card horizontal blue lighten-3  z-depth-3">
                            <div class="card-content">
                                <i class="medium material-icons">person</i>
                              <!--   <img src="http://lorempixel.com/100/190/nature/6">-->
                            </div>
                            <?php while ($row = mysqli_fetch_assoc($result_funcionario)) { ?>

                                <div class="card-stacked">
                                    <div class="card-content">
                                        <i style="font-size: 11px">
                                            Nome: <?php echo $row['nome']; ?><br>
                                            Sobrenome: <?php echo $row['sobrenome']; ?><br>
                                            Função: <?php echo $row['funcao']; ?><br>
                                            Pertencente: pertencente
                                        </i>
                                    </div>
                                    <!--<div class="card-action">
                                        <a href="#">This is a link</a>
                                    </div>-->
                                </div>
                            <?php } ?><!--FIM DO LAÇO FUNCIONARIO-->

                        </div>
                    </div>
                    <br>
                    <div class="col s12 m1 l1"></div>
                    <div class=" col s12 divider"></div>

                    <!--INICIO DO FOR-->
                    <form action="../controllers/avaliacao_controll.php" method="post">
                        <br>
                       
                            <div class="row">
                                <div class="col s12">
                                    <strong>Criterio a ser avaliado</strong>
                                    <a class="tooltipped" data-position="bottom" data-delay="5" data-tooltip="Decrição">
                                        <i class="material-icons" >
                                            feedback
                                        </i>
                                    </a>
                                </div>
                                
                            </div>
                            <div class='row center-align' >
                                <div class='input-field col s12 m2 l2 '>
                                    <label>Nota</label>
                                </div>
                                <div class="section"></div>
                                <div class='input-field col s3 m3 l3'>
                                    <input class='validate' type="radio" name="<?php echo $namenota; ?>" id="<?php echo $nota1; ?>" />
                                    <label for="<?php echo $nota1; ?>">1</label>
                                </div>
                                <div class='input-field col s3 m3 l3'>
                                    <input class='validate' type="radio" name="<?php echo $namenota; ?>" id="<?php echo $nota2; ?>" />
                                    <label for="<?php echo $nota2; ?>">2</label>
                                </div>
                                <div class='input-field col s3 m3 l3'>
                                    <input class='validate' type="radio" name="<?php echo $namenota; ?>" id="<?php echo $nota3; ?>" />
                                    <label for="<?php echo $nota3; ?>">3</label>
                                </div>
                                <div class='input-field col s3 m3 l3'>
                                    <input class='validate' type="radio" name="<?php echo $namenota; ?>" id="<?php echo $nota4; ?>" />
                                    <label for="<?php echo $nota4; ?>">4</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="obs" class="materialize-textarea"></textarea>
                                    <label for="obs">Observação</label>
                                </div>
                            </div>
                            
                          <input type="hidden" name="idFuncionario" value="<?= $id ?>"/>
                          <input type="hidden" name="op" value="avaliar"/>
                                                      
                            <div class="row">
                                <div class=" input-field  col s12 m12 l12 ">

                                    <div class="right">
                                        <button class="btn waves-effect waves-rigth" type="submit" name="action">Salvar Avaliações
                                            <i class="material-icons right">done</i>
                                        </button>
                                    </div>

                                </div>

                            </div>
                        

                    </form>
                </div>

                <?php include 'footer.php'; ?>

            </div>
            <!--Import jQuery before materialize.js-->
            <?php include './_javaScripts.php'; ?>


    </body>
</html>