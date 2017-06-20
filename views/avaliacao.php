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
        $filtro = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        $funcionario = new funcionario_dao();
        $criterio = new criterio_dao();
        //recebe por GET 
        $id = $filtro['buscafuncionario'];
        $result_funcionario = $funcionario->busca_funcionario_id($id);
        ?>
        <form action="../controllers/avaliacao_controll.php" method="post">
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
                                    <input type="hidden" name="id_funcionario" value="<?php echo $row['id']; ?>"/>
                                <?php } ?><!--FIM DO LAÇO FUNCIONARIO-->
                            </div>
                        </div>
                        <br>
                        <div class="col s12 m1 l1"></div>
                        <div class=" col s12 divider"></div>
                        <br>
                        <?php
                        $result_criterio = $criterio->busca_todos_criterios($_SESSION['id_bd']);
                        $nota1 = 1; //id inputs radio
                        $nota2 = 2; //id inputs radio
                        $nota3 = 3; //id inputs radio
                        $nota4 = 4; //id inputs radio
                        $obs = 5; //id inputs radio
                        $namenota = 0; //nome das notas
                        $criterio = 0; //nome das notas
                        while ($linhaC = mysqli_fetch_assoc($result_criterio)) {
                            ?><!--INICIO DO LAÇO CRITERIO-->
                            <input type="hidden" name="id_criterio[<?php echo $criterio; ?>]" value="<?php echo $linhaC['id']; ?>"/>

                            <div class="row">
                                <div class="col s12">
                                    <strong><?php echo $linhaC['nome']; ?></strong>
                                    <a class="tooltipped" data-position="bottom" data-delay="5" data-tooltip="<?php echo $linhaC['descricao']; ?>">
                                        <i class="material-icons">
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
                                    <input class='validate' type="radio" name="nota[<?php echo $namenota; ?>]" id="<?php echo $nota1; ?>" value="1"/>
                                    <label for="<?php echo $nota1; ?>">1</label>
                                </div>
                                <div class='input-field col s3 m3 l3'>
                                    <input class='validate' type="radio" name="nota[<?php echo $namenota; ?>]" id="<?php echo $nota2; ?>" value="2"/>
                                    <label for="<?php echo $nota2; ?>">2</label>
                                </div>
                                <div class='input-field col s3 m3 l3'>
                                    <input class='validate' type="radio" name="nota[<?php echo $namenota; ?>]" id="<?php echo $nota3; ?>" value="3"/>
                                    <label for="<?php echo $nota3; ?>">3</label>
                                </div>
                                <div class='input-field col s3 m3 l3'>
                                    <input class='validate' type="radio" name="nota[<?php echo $namenota; ?>]" id="<?php echo $nota4; ?>" value="4"/>
                                    <label for="<?php echo $nota4; ?>">4</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="obs" class="materialize-textarea" name="obs[<?php echo $namenota; ?>]" id="<?php echo $obs; ?>"></textarea>
                                    <label for=id="<?php echo $obs; ?>">Observação</label>
                                </div>
                            </div>
                            <?php
                            //incrmenta id das notas
                            $nota1 = $nota1 + 5;
                            $nota2 = $nota2 + 5;
                            $nota3 = $nota3 + 5;
                            $nota4 = $nota4 + 5;
                            $obs = $obs + 5;
                            //incrementa nome das notas
                            $namenota++;
                            $criterio++;
                        }
                        ?><!--FIM DO LAÇO CRITERIO-->
                        <div class="row">
                            <div class=" input-field  col s12 m12 l12 ">
                                <div class="right">
                                    <button class="btn waves-effect waves-rigth  blue lighten-1" type="submit" name="op" value="avaliar">Salvar Avaliações
                                        <i class="material-icons right">done</i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php include 'footer.php'; ?>
                </div>
            </div>
        </form>
        <!--Import jQuery before materialize.js-->
        <?php include './_javaScripts.php'; ?>
    </body>
</html>
