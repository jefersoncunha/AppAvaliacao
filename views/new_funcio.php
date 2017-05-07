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

        <script type="text/javascript" src="../js/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="../js/materialize.min.js"></script> 

        <script>
            $(document).ready(function () {
                $('select').material_select();
            });
        </script>
    </head>

    <body>
        <div  class="container">
            <div class="row">
                <div class="account-wall" >
                    <?php include 'menu.php'; ?>

                    <center><strong><h5>Novo Funcionário</h5></strong></center>
                    <br>
                    <!-- TABLE -->
                    <form class="cadastro-funcio-form" method="post">

                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type="text" name="nome" id="nome" />
                                <label for="nome">Nome</label>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type="text" name="sobrenome" id="sobrenome" />
                                <label for="sobrenome">Sobrenome</label>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type="email" name="email" id="email" />
                                <label for="email">E-mail</label>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type="text" name="fone" id="fone" />
                                <label for="fone">Telefone</label>
                            </div>
                        </div>

                        <div class='row'>
                            <div class='input-field col s12 m2 l2'>
                                <label>Sexo</label>
                            </div>
                            <div class="section"></div>

                            <div class='input-field col s12 m4 l4'>
                                <input class='validate' type="radio" name="sexo" id="feminino" />
                                <label for="feminino">Feminino</label>
                            </div>

                            <div class='input-field col s12 m4 l4'>
                                <input class='validate' type="radio" name="sexo" id="masculino" />
                                <label for="masculino">Masculino</label>
                            </div>
                        </div>



                        <div class="row">
                            <div class='input-field col s12 m6 l6'>

                                <label>Pertence à loja</label>
                            </div>
                            <div class="section"></div>

                            <div class='input-field col s12 m6 l6'>

                                <select>
                                    <option value="" disabled selected>Selecione Loja Filial</option>
                                    <option value="1">Loja 1</option>
                                    <option value="2">Loja 2</option>
                                    <option value="3">Loja 3</option>
                                </select>               
                            </div>
                        </div>


                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type="text" name="funcao" id="funcao" />
                                <label for="funcao">Função</label>
                            </div>
                        </div>
                        <input type="hidden" name="op" value="cadastro_funcio"/>
                        <div class="row">
                            <div class=" col s12 m12 l12 ">

                                <div class="right">
                                    <button class="btn waves-effect waves-rigth" type="submit" name="action" style="background-color: #1398d8;">Cadastrar
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
        <script type="text/javascript" src="../js/meu_estilo.js"></script>       

    </body>
</html>
