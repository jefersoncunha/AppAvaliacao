<?php
    if (isset($_SESSION['numero_modal'])) {
    
        if ($_SESSION['numero_modal'] == 1) {
            ?>
        <!-- Modal Structure -->

        <div id="modal" class="modal bottom-sheet  red lighten-1">
            <div class="modal-content ">
                <h4 class="center">Desculpe...</h4>
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
                <h4 class="center">OK!!</h4>
                <p class="center">Cadastrado com sucesso</p>
            </div>
            <div class="modal-footer  green lighten-1">
                <a href="<?php echo $_SESSION['local'];?>" class="modal-action modal-close waves-effect waves-green btn-flat">OK</a>
            </div>
        </div>

        <?php
    } else if ($_SESSION['numero_modal'] == 3) {
        ?>
        <!-- Modal Structure -->

        <div id="modal" class="modal bottom-sheet  red lighten-1">
            <div class="modal-content ">
                <h4 class="center">Desculpe...</h4>
                <p class="center">Dados inválidos! Tente novamente.</p>
            </div>
            <div class="modal-footer  red lighten-1">
                <a href="<?php echo $_SESSION['local']; ?>" class="modal-action modal-close waves-effect waves-green btn-flat">OK</a>
            </div>
        </div>
        <?php
    }
    //limpa sessao
    unset($_SESSION['numero_modal']);
}
?>