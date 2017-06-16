<?php
if (isset($_SESSION['numero_modal'])) {

    if ($_SESSION['numero_modal'] == 1) {
        ?>
        <!-- Modal Erro -->

        <div id="modal" class="modal bottom-sheet  red lighten-1">
            <div class="modal-content ">
                <h4 class="center"><i>Desculpe...</i></h4>
                <p class="center">Dados já existentes!</p>
            </div>
            <div class="modal-footer  red lighten-1">
                <a href="<?php echo $_SESSION['local']; ?>" class="modal-action modal-close waves-effect waves-green btn-flat">OK</a>
            </div>
        </div>


        <?php
    } else if ($_SESSION['numero_modal'] == 2) {
        ?>
        <!-- Modal Confirmação -->

        <div id="modal" class="modal bottom-sheet   green">
            <div class="modal-content ">
                <h4 class="center"><i>Ok!</i></h4>
                <p class="center"><?php echo $_SESSION['mensagem']; ?></p>
            </div>
            <div class="modal-footer  green  ">
                <a href="<?php echo $_SESSION['local']; ?>" class=" modal-action modal-close waves-effect waves-green btn-flat">OK</a>
            </div>
        </div>

        <?php
    } else if ($_SESSION['numero_modal'] == 3) {
        ?>
        <!-- Modal erro dados iguais -->

        <div id="modal" class="modal bottom-sheet  red lighten-1">
            <div class="modal-content ">
                <h4 class="center"><i>Desculpe...</i></h4>
                <p class="center">Dados inválidos! Tente novamente.</p>
            </div>
            <div class="modal-footer  red lighten-1">
                <a href="<?php echo $_SESSION['local']; ?>" class="modal-action modal-close waves-effect waves-green btn-flat">OK</a>
            </div>
        </div>
        <?php
    } else if ($_SESSION['numero_modal'] == 4) {
        ?>

        <!-- Modal sucesso cadastro, cadastro novamente -->
        <div id="modal" class="modal green">
            <div class="modal-content">
                <h4 class="center-align"><i>Cadastro com Sucesso!</i></h4>
                <p class="center-align">Deseja cadastrar outro?</p>
            </div>
            <div class="modal-footer green lighten-2">
                <a href="<?php echo $_SESSION['home']; ?>" class="modal-action modal-close waves-effect waves-green btn-flat">Não</a>
                <a href="<?php echo $_SESSION['fica']; ?>" class="modal-action modal-close waves-effect waves-green btn-flat ">Sim</a>
            </div>
        </div>
        <?php
    } else if ($_SESSION['numero_modal'] == 5) {
        ?>

        <!-- Modal alerta -->
        <div id="modal" class="modal   yellow lighten-2">
            <div class="modal-content">
                <h4 class="center-align"><i>Desculpe!</i></h4>
                <p class="center-align"><?php echo $_SESSION['mensagem']; ?>
                    <br>
                    Deseja cadastrar?</p>
            </div>
            <div class="modal-footer  yellow lighten-3">
                <a href="<?php echo $_SESSION['home']; ?>" class="modal-action modal-close waves-effect waves-green btn-flat">Não</a>
                <a href="<?php echo $_SESSION['cadastro']; ?>" class="modal-action modal-close waves-effect waves-green btn-flat ">Sim</a>
            </div>
        </div>
        <?php
    }


    //limpa sessao
    unset($_SESSION['numero_modal']);
    unset($_SESSION['mensagem']);
    

    
}
?>