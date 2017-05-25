<!DOCTYPE html>
<html>
    <head>
        <?php include './_head.php'; ?>

        <script type="text/javascript" src="../js/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="../js/materialize.min.js"></script> 

        <script>
            $(document).ready(function () {
                $('select').material_select();
            });
        </script>
    </head>

    <body>
        <?php include '../controllers/sessao.php';?>
        <?php include 'menu.php'; ?>

        <div  class="container">
            <div class="row">
                <div class="account-wall" >

                  <strong><h5>Editar Funcionário</h5></strong>
                    <br>
                    <!-- TABLE -->
                    <form class="edit-funcio-form" method="post">

                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type="text" name="nome" id="nome" required autofocus/>
                                <label for="nome">Nome</label>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type="text" name="sobrenome" id="sobrenome" required autofocus/>
                                <label for="sobrenome">Sobrenome</label>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type="email" name="email" id="email" required autofocus />
                                <label for="email">E-mail</label>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type="text" name="fone" id="fone" required autofocus/>
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
                                <input class='validate' type="text" name="funcao" id="funcao" required autofocus/>
                                <label for="funcao">Função</label>
                            </div>
                        </div>
                        <input type="hidden" name="op" value="edit_funcio"/>
                        <div class="row">

                            <div class=" col s6 m6 l6 ">

                                <div>
                                    <button class="btn waves-effect waves-light red" type="submit" name="action">Excluir
                                        <i class="material-icons right">delete</i>
                                    </button>
                                </div>

                            </div>
                            <div class=" col s6 m6 l6 ">

                                <div class="right">
                                    <button class="btn waves-effect waves-rigth" type="submit" name="action">Salvar
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
