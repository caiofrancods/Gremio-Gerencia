<?php session_start(); 
 $dadosUsuario = $_SESSION['dadosUsuario'];?>

<nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm cabecalho d-grid justify-content-between mb-4" id="mainNav">
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

    <div class="container-fluid d-block mt-5">
      <div class="row mt-4">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active mt-4" href="inicial.php">
                  <span data-feather="home"></span>
                  Início <span class="sr-only">(atual)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="documentos.php">
                  <span data-feather="file"></span>
                  Documentos
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="noticias.php">
                  <span data-feather="file-text"></span>
                  Notícias
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="eventos.php">
                  <span data-feather="calendar"></span>
                  Eventos
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="financeiro.php">
                  <span data-feather="dollar-sign"></span>
                  Financeiro
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="patrimonial.php">
                  <span data-feather="layers"></span>
                  Patrimonial
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" target='_blank' href="https://registroarmario.gremiotimoteo.online/view/admin/loginAdmin.php">
                  <span data-feather="archive"></span>
                  Armários
                </a>
              </li>
            </ul>
            <!--
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Relatórios salvos</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Neste mês
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Último trimestre
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Engajamento social
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Vendas do final de ano
                </a>
              </li>
            </ul> -->
          </div>
        </nav>
