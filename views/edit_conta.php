<!DOCTYPE html>
<html>
    <head>
        <?php include './_head.php'; ?>
    </head>

    <body>
        <?php 
            include '../controllers/sessao.php';
            include './menu.php'; 
            //include '../dao/avaliador_dao.php';
            
            //$aval = new avaliador_dao();
            //$aval->mostrar_alterar_conta($_SESSION["id"]);
            
            ?>

        <div  class="container">
            <div class="row">
                <div class="account-wall" >
                    <div class="row">
                    <strong><h5><i>Configurações da Conta</i></h5></strong>
                    <div class="divider col s8 m6 l6"></div>
                    </div>
                    <br>
                    <!-- TABLE -->
                    <form  method="post" action="../controllers/avaliador_controll.php">
                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type="text" name="nome" 
                                       id="nome" value="<?php echo $_SESSION['nome_bd'];?>" required autofocus />
                                <label for="nome">Nome</label>
                            </div>
                        </div>

                        <!--<div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type="text" name="senha" id="senha"  required autofocus/>
                                <label for="senha">Nova Senha</label>
                            </div>
                        </div>-->

                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type="text" name="email" 
                                       id="email" value="<?php echo $_SESSION['email_bd'];?>" required autofocus/>
                                <label for="email">E-mail</label>
                            </div>
                        </div>

                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type="text" name="empresa" 
                                       id="empresa" value="<?php echo $_SESSION['empre_bd'];?>"required autofocus/>
                                <label for="empresa">Empresa</label>
                            </div>
                        </div>
                        
                        <input type="hidden" name="op" value="editar_login"/>
                        <div class="row">
                            <div class=" col s12 m12 l12 ">

                                <div class="right">
                                    <button class="btn waves-effect waves-rigth blue darken-1" type="submit" name="action" style="background-color: #1398d8;">Salvar
                                        <i class="material-icons right">done</i>
                                    </button>
                                </div>
                                
                            </div>

                        </div>
                    </form>

                </div>
            </div>
            <?php include './footer.php'; ?>

        </div>
        <!--Import jQuery before materialize.js-->
        <?php include './_javaScripts.php'; ?>      

    </body>
</html>
