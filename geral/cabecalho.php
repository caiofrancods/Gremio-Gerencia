<nav class="navbar navbar-expand-lg navbar-light shadow-sm cabecalho d-flex justify-content-between" id="mainNav">
    <div>    
        <a href="index.php"><img class="img-fluid logo ml-4" src="imagens/logo.jpeg" alt="logo do grêmio"></a>
        <a class="navbar-brand fw-bold text-white" href="#page-top">Grêmio Estudantil</a>
    </div>
    <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
        <li class="nav-item dropdown">
        <a class="nav-item nav-link dropdown-toggle mr-md-2 text-white" href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <? echo $dadosUsuario['nome']; ?>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="bd-versions">
            <a class="dropdown-item" href="control/sair.php">Sair</a>
        </div>
        </li>
    </ul>
</nav>

<div class="container-fluid total">
    <div class="row">
        <nav class="d-none d-md-block bg-light sidebar" >
            <div class="sidebar-sticky cabecalho">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="text-white nav-link active <? if ($dadosUsuario['cargo'] == 7) {
                            echo "d-none";
                        } ?>" href="inicial.php">
                            <span data-feather="home"></span>
                            Início <span class="sr-only">(atual)</span>
                        </a>
                    </li>
                    <li
                        class="nav-item <? if ($dadosUsuario['cargo'] != 5 && $dadosUsuario['cargo'] != 1) {
                            echo "d-none";
                        } ?>">
                        <a class="text-white nav-link" href="documentos.php">
                            <span data-feather="file"></span>
                            Docs
                        </a>
                    </li>
                    <li
                        class="nav-item <? if ($dadosUsuario['cargo'] != 4 && $dadosUsuario['cargo'] != 1) {
                            echo "d-none";
                        } ?>">
                        <a class="text-white nav-link" href="noticias.php">
                            <span data-feather="file-text"></span>
                            Notícias
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="text-white nav-link <? if ($dadosUsuario['cargo'] == 7) {
                            echo "d-none";
                        } ?>" href="eventos.php">
                            <span data-feather="calendar"></span>
                            Eventos
                        </a>
                    </li>
                    <li
                        class="nav-item <? if ($dadosUsuario['cargo'] != 2 && $dadosUsuario['cargo'] != 1) {
                            echo "d-none";
                        } ?>">
                        <a class="text-white nav-link" href="financeiro.php">
                            <span data-feather="dollar-sign"></span>
                            Financeiro
                        </a>
                    </li>
                    <li
                        class="nav-item <? if ($dadosUsuario['cargo'] != 2 && $dadosUsuario['cargo'] != 1) {
                            echo "d-none";
                        } ?>">
                        <a class="text-white nav-link" href="patrimonial.php">
                            <span data-feather="layers"></span>
                            Patrimonial
                        </a>
                    </li>
                    <li
                        class="nav-item <? if ($dadosUsuario['cargo'] != 3 && $dadosUsuario['cargo'] != 1 && $dadosUsuario['cargo'] != 7) {
                            echo "d-none";
                        } ?>">
                        <a class="text-white nav-link" href="armarios.php">
                            <span data-feather="archive"></span>
                            Armários
                        </a>
                    </li>
                </ul>            
            </div>
        </nav>