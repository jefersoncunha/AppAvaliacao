<!DOCTYPE html>
<html>
    <head>
        <?php include './_head.php'; ?>

    </head>

    <body>
        <?php include '../controllers/sessao.php';?>
        <?php include 'menu.php'; ?>
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
                            <div class="card-stacked">
                                <div class="card-content">
                                    <i style="font-size: 11px">
                                            Nome: nome<br>
                                            Sobrenome: sobrenome<br>
                                            Função: função<br>
                                            Pertencente: pertencente</p>
                                    </i>
                                </div>
                                <!--<div class="card-action">
                                    <a href="#">This is a link</a>
                                </div>-->
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col s12 m1 l1"></div>
                    <div class=" col s12 divider"></div>

                    <!--INICIO DO FOR-->
                    <form class="avaliacao-form" method="post">
                        <br>

                        <div class="row">
                            <div class="col s12">
                                <strong>Criterio a ser avaliado como pergunta</strong>
                                <a class="tooltipped" data-position="bottom" data-delay="5" data-tooltip="Aqui sera um desrição do criterio a ser avaliado">
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
                            <div class='input-field col s2 m2 l2'>
                                <input class='validate' type="radio" name="nota" id="1" />
                                <label for="1">1</label>
                            </div>
                            <div class='input-field col s2 m2 l2'>
                                <input class='validate' type="radio" name="nota" id="2" />
                                <label for="2">2</label>
                            </div>
                            <div class='input-field col s2 m2 l2'>
                                <input class='validate' type="radio" name="nota" id="3" />
                                <label for="3">3</label>
                            </div>
                            <div class='input-field col s2 l2'>
                                <input class='validate' type="radio" name="nota" id="4" />
                                <label for="4">4</label>
                            </div>
                            <div class='input-field col s2 m2 l2'>
                                <input class='validate' type="radio" name="nota" id="5" />
                                <label for="5">5</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="obs" class="materialize-textarea"></textarea>
                                <label for="obs">Observação</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <p>
                                    <strong>Criterio a ser avaliado como pergunta</strong>
                                    <a class="tooltipped" data-position="bottom" data-delay="5" data-tooltip="Aqui sera um desrição do criterio a ser avaliado">
                                        <i class="material-icons">
                                            feedback
                                        </i>
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class='row center-align' >

                            <div class='input-field col s12 m2 l2 '>
                                <label>Nota</label>
                            </div>
                            <div class="section"></div>

                            <div class='input-field col s2 m2 l2'>
                                <input class='validate' type="radio" name="nota1" id="11" />
                                <label for="11">1</label>
                            </div>

                            <div class='input-field col s2 m2 l2'>
                                <input class='validate' type="radio" name="nota1" id="22" />
                                <label for="22">2</label>
                            </div>
                            <div class='input-field col s2 m2 l2'>
                                <input class='validate' type="radio" name="nota1" id="33" />
                                <label for="33">3</label>
                            </div>
                            <div class='input-field col s2 l2'>
                                <input class='validate' type="radio" name="nota1" id="44" />
                                <label for="44">4</label>
                            </div>
                            <div class='input-field col s2 m2 l2'>
                                <input class='validate' type="radio" name="nota1" id="55" />
                                <label for="55">5</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="obs" class="materialize-textarea"></textarea>
                                <label for="obs">Observação</label>
                            </div>
                        </div>

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
