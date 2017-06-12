<!DOCTYPE html>
<html>
    <head>
        <?php include './_head.php'; ?>

        <script type="text/javascript" src="../js/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="../js/materialize.min.js"></script> 
        <script type="text/javascript" src="../js/modal.js"></script> 

        <script>
            $(document).ready(function () {
                $('select').material_select();
                //abrir modal

                $('.modal').modal();
                //now you can open modal from code
                $('#modal').modal('open');

            });
        </script>

    </head>

    <body>
        <?php
        include '../controllers/sessao.php';
        include 'menu.php';
        include '../dao/filial_dao.php';

        $filial = new filial_dao();
        ?>

        <div  class="container">
            <div class="row">
                <div class="account-wall" >
                    <div class="row">
                        <strong><h5><i>Novo Funcionário</i></h5></strong>
                        <div class="divider col s8 m6 l6"></div>
                    </div>
                    <br>
                    <!-- TABLE -->
                    <form method="post" action="../controllers/funcionario_controll.php">

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
                                <input class='validate' type="email" name="email" id="email" required autofocus/>
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
                                <input class='validate' type="radio" name="sexo" id="feminino" value="feminino" />
                                <label for="feminino">Feminino</label>
                            </div>

                            <div class='input-field col s12 m4 l4'>
                                <input class='validate' type="radio" name="sexo" id="masculino"  value="masculino"/>
                                <label for="masculino">Masculino</label>
                            </div>
                        </div>

                        <div class="section"></div>

                        <div class="row">

                            <div class='input-field col s12 m6 l6'>

                                <select name="id_loja">
                                    <option value="" disabled selected>Selecione loja filial pertencente</option>
                                    <?php
                                    $result_filiais = $filial->busca_filial_listar_todas($_SESSION['id_bd']);

                                    while ($row = mysqli_fetch_assoc($result_filiais)) {
                                        ?>
                                        <option value="<?php echo $row['id']; ?>" > <?php echo $row['nome']; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>               
                            </div>
                        </div>


                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type="text" name="funcao" id="funcao" required autofocus/>
                                <label for="funcao">Função</label>
                            </div>
                        </div>
                        <input type="hidden" name="op" value="cadastro_funcionario"/>

                        <div class="right">
                            <label><i>Obs: Todos os campos são obrigatórios</i></label>
                        </div>
                        <div class="row">
                            <div class=" col s12 m12 l12 ">

                                <div class="right">
                                    <button class="btn waves-effect waves-rigth blue darken-1" type="submit" name="action" >Cadastrar
                                        <i class="material-icons right">done</i>
                                    </button>
                                </div>

                            </div>

                        </div>

                    </form>

                </div>
            </div>

        </div>
        <?php include 'footer.php'; ?>
        <?php include './modal.php'; ?>

        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="../js/meu_estilo.js"></script>       
        <script type="text/javascript"src="../js/jquery-mask.js"></script>

          <script>
              //mascara 
              $(document).ready(function () {
                $('#fone').mask("(00) 00000-0000");
              });
        </script>
    </body>
</html>
