<?php
if (isset($_SESSION['numero_modal'])) {

    if ($_SESSION['numero_modal'] == 1) {
        ?>
        <!-- Modal Structure -->

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
        <!-- Modal Structure -->

        <div id="modal" class="modal bottom-sheet  green lighten-1">
            <div class="modal-content ">
                <h4 class="center"><i>Ok!</i></h4>
                <p class="center">Cadastrado com sucesso</p>
            </div>
            <div class="modal-footer  green lighten-1">
                <a href="<?php echo $_SESSION['local']; ?>" class="modal-action modal-close waves-effect waves-green btn-flat">OK</a>
            </div>
        </div>

        <?php
    } else if ($_SESSION['numero_modal'] == 3) {
        ?>
        <!-- Modal Structure -->

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
      
        <!-- Modal Structure -->
        <div id="modal" class="modal teal lighten-3">
            <div class="modal-content">
                <h4 class="center-align"><i>Cadastro com Sucesso!</i></h4>
                <p class="center-align">Deseja cadastrar outro?</p>
            </div>
            <div class="modal-footer teal lighten-4">
                <a href="<?php echo $_SESSION['local'];?>" class="modal-action modal-close waves-effect waves-green btn-flat">Não</a>
                <a href="<?php echo $_SESSION['fica'];?>" class="modal-action modal-close waves-effect waves-green btn-flat ">Sim</a>
            </div>
        </div>
        <?php
    }else if ($_SESSION['numero_modal'] == 5) {
        ?>
      
        <!-- Modal Structure -->
        <div id="modal" class="modal teal lighten-3">
            <div class="modal-content">
                <h4 class="center-align"><i>Desculpe!</i></h4>
                <p class="center-align">Mas você não possui Funcionarios vinculados a esta Filial.<br>
                    Deseja cadastrar um funcionario?</p>
            </div>
            <div class="modal-footer teal lighten-4">
                <a href="<?php echo $_SESSION['home'];?>" class="modal-action modal-close waves-effect waves-green btn-flat">Não</a>
                <a href="<?php echo $_SESSION['cadastro'];?>" class="modal-action modal-close waves-effect waves-green btn-flat ">Sim</a>
            </div>
        </div>
        <?php
    }


    //limpa sessao
    unset($_SESSION['numero_modal']);
}
?>