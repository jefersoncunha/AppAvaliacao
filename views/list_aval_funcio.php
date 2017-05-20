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
        <?php include '../controllers/sessao.php';?>
        <?php include 'menu.php'; ?>

        <div  class="container">
            <div class="row">
                <div class="account-wall" >

                    <div class="row">

                        <div class="col s12 m12 l12 ">
                            <strong><h5> Funcionários da Loja 1</h5></strong>
                        </div>
                        <div class="col s12 m12 l12 "> 
                            <strong><span class="new badge grey" data-badge-caption="10/10/2017" >Data:</span></strong>
                        </div>
                    </div>
                    <nav class="teal lighten-5">    
                    <div class="nav-wrapper">
                        <form>
                          <div class="input-field">
                            <input placeholder="Ex: João" id="search" type="search" required>
                            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                          </div>
                        </form>
                    </div>
                   </nav>
                   <div class=" col s12 divider"></div>
                    <div class="section"></div>

                    <!-- LISTAR FUNCIONARIOS NÃO AVALIADOS--> 
                    <h5><i>Não avaliados</i></h5>
                    <div class="divider"></div>

                    <ul class="collapsible light-blue lighten-5" data-collapsible="accordion">
                        <li>
                            <div class="collapsible-header  blue lighten-2">
                                <i class="material-icons">person</i>Funcionario 1</div>
                            <div class="collapsible-body">
                                <p>Sobrenome: sobrenome <br>
                                    Fone: 9999-9999<br>
                                    Função: funcao

                                    <a href="avaliacao.php"><span class="new badge red" data-badge-caption="" >Avaliar</span></a>
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header  blue lighten-2"><i class="material-icons">person</i>Funcionario 2</div>
                            <div class="collapsible-body">
                                <p>Sobrenome: sobrenome <br>
                                    Fone: 9999-9999<br>
                                    Função: funcao

                                    <a href="avaliacao.php"><span class="new badge red" data-badge-caption="" >Avaliar</span></a>
                                </p>
                            </div>
                        </li>

                    </ul>
                    
                    <h5><i>Já avaliados</i></h5>
                    <div class="divider"></div>
                    <!-- LISTAR FUNCIONARIOS JÁ AVALIADOS--> 
                    <ul class="collapsible green lighten-5" data-collapsible="accordion">
                        <li>
                            <div class="collapsible-header teal accent-3">
                                <i class="material-icons">person</i>Funcionario 1</div>
                            <div class="collapsible-body">
                                <p>Sobrenome: sobrenome <br>
                                    Fone: 9999-9999<br>
                                    Função: funcao<br>
                                    <span class="new badge grey" data-badge-caption="10/10/2017" >Data:</span>
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header teal accent-3"><i class="material-icons">person</i>Funcionario 2</div>
                            <div class="collapsible-body">
                                <p>Sobrenome: sobrenome <br>
                                    Fone: 9999-9999<br>
                                    Função: funcao<br>
                                    <span class="new badge grey" data-badge-caption="10/10/2017" >Data:</span>


                                </p>
                            </div>
                        </li>

                    </ul>
                    <!--FIM DO FOR-->



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
