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
        <?php include 'menu.php'; ?>
        <div  class="container">
            <div class="row">
                <div class="account-wall" >
                    <strong><h5> Funcionário</h5></strong>
                    <br>

                    <div class="divider"></div>
                    <br>
                    <!--INICIO DO FOR-->
                    <form class="avaliacao-form" method="post">
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
            </div>
            <?php include 'footer.php'; ?>

        </div>
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="../js/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="../js/materialize.min.js"></script> 
        <script type="text/javascript" src="../js/meu_estilo.js"></script>       

    </body>
</html>
