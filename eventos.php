<?php
    include_once "repo/eventoCRUD.php";
    $registros = listar();
?>
<!doctype html>
<html>
  <head>
    <? include_once "geral/head.php" ?>
    <title>Eventos</title>
  </head>

  <body>
        <?php include_once 'geral/cabecalho.php'; ?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 mt-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h4 class="h4">Eventos</h4>
            </div>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Eventos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="criar-tab" data-toggle="tab" href="#criar" role="tab" aria-controls="criar" aria-selected="false">Criar</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="table-responsive mt-2">
                        <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                            <th>Evento</th>
                            <th>Responsável</th>
                            <th>Data</th>
                            <th>Descrição</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php	
                            foreach($registros as $registro){
                            echo "<tr>";
                            echo "<td>{$registro['nome']} </td>";
                            echo "<td>{$registro['responsavel']} </td>";
                            echo "<td>{$registro['dataHorario']} </td>";
                            echo "<td>{$registro['descricao']} </td>";
                            echo "</tr>";
                            } 
                        ?>
                        </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="criar" role="tabpanel" aria-labelledby="criar-tab">
                    <form id="#formularioUsuario" class="mt-2" action="control/eventoSalvar.php" method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="evento">Nome do Evento</label>
                                <input type="text" id="evento" name="evento" class="form-control" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="responsavel">Responsável</label>
                                <input type="text" id="responsavel" name="responsavel" class="form-control" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="data">Data</label>
                                <input type="date" id="data" name="data" class="form-control" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="descricao">Descrição</label>
                                <input type="text" id="descricao" name="descricao" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-row d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                        </div>
                    </form>
                </div>
            </div>
        <main>
        </div>
        </div>

        <?php include_once 'geral/js.php'; ?>
  </body>
</html>
