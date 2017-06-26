
<ul id="slide-out" class="side-nav " >
    <li><div class="userView">
            <div class="background" >
                <img src="../imgs/fundo.jpg">
            </div>
            <a href="#!user"><img class="circle" src="../imgs/avatar.png"></a>
            <a href="#!name"><span class="white-text name"><?php echo $_SESSION['nome_bd']; ?></span></a>
            <a href="#!email"><span class="white-text email"><?php echo $_SESSION['email_bd']; ?></span></a>
        </div></li>
    <!--<li><a href="#!"><i class="material-icons">cloud</i>Avaliações</a></li>-->
    <li><a href="home.php"><i class="material-icons"> home</i>Inicio</a></li>
    <li><div class="divider"></div></li>

    <li><a href="list_aval_filial.php"><i class="material-icons"> toc</i>Avaliações</a></li>
    <li><a href="relatorios.php"><i class="material-icons"> assessment</i>Relatório</a></li>  
    <li><div class="divider"></div></li>
    <li class="menu-opcao">Funcionário</li>
    <li><a href="new_funcio.php" class="menu-opcao"><i class="material-icons"> add</i>Novo</a></li>
    <li><a href="list_filial_funcio.php" class="menu-opcao"><i class="material-icons"> mode_edit</i>Editar</a></li>
    <li><div class="divider"></div></li>
    <li class="menu-opcao">Critério</li>
    <li><a href="new_criterio.php" class="menu-opcao"><i class="material-icons"> add</i>Novo</a></li>
    <li><a href="list_criterio.php" class="menu-opcao"><i class="material-icons"> mode_edit</i>Editar</a></li>
    <li><div class="divider"></div></li>
    <li class="menu-opcao">Filial</li>
    <li><a href="new_filial.php" class="menu-opcao"><i class="material-icons"> add</i>Nova</a></li>
    <li><a href="list_filial.php" class="menu-opcao"><i class="material-icons"> mode_edit</i>Editar</a></li>
    <li><div class="divider"></div></li>
    <li><a href="edit_conta.php"><i class="material-icons"> settings</i>Minha conta</a></li>
    <li><div class="divider"></div></li>
    <li><a href="logout.php"><i class="material-icons">reply</i>Logout</a></li>
    <li><div class="divider"></div></li>
    <li><a href="sobre.php"><i class="material-icons">info_outline</i>Sobre</a></li>
    <li><div class="divider"></div></li>

</ul>
<!--
<div class="container">
      <a href="#" data-activates="slide-out" class="button-collapse"><i class="medium material-icons">menu</i></a>
</div>-->
<div class="navbar-fixed">
<nav style="background-color: #2196f3;">
    <div class="nav-wrapper z-depth-4">
        <a href="home.php" class="brand-logo center">
            <strong><i>myTeam</i></strong>
        </a>
        <ul class="left">
            <li>
                <i class="waves-effect waves-circle material-icons button-collapse" data-activates="slide-out">
                    menu
                </i>
            </li>
        </ul>
    </div>
</nav>

<section class="divider"></section>
<br>
</div>
