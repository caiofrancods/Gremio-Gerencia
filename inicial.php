<? include_once "geral/acesso.php";
    if($dadosUsuario['cargo'] == 7){
        echo "<script>alert('Acesso Negado');location.href='armarios.php';</script>";
    }
?>
<? include_once "geral/acesso.php" ?>
<?
include_once 'repo/eventoCRUD.php';
$registros = listarEventosDaSemana();
$registros2 = listarEventosDaPróximaSemana();
?>

<!doctype html>
<html>
  <head>
    <?php include_once 'geral/head.php'; ?>
    <title>Dashboard</title>
  </head>

  <body>
    <?php include_once 'geral/cabecalho.php'; ?>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 mt-2">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h3">Início</h1>
      </div>
    <main>
    <div class="container">
      <div class="card mt-2">
        <div class="card-header">
          Eventos e Reuniões nesta Semana
        </div>
        <div class="card-body">
          <?php	
            foreach($registros as $registro){
              $dataFormatada = date("d/m/Y", strtotime($registro['dataHorario']));
              echo '<p class="card-text"><span class="text-muted">['.$registro['responsavel'].']</span> '.$dataFormatada.' - '.$registro['descricao'].'</p>';
            }
          ?>
        </div>
      </div>
      <div class="card mt-2">
        <div class="card-header">
          Eventos e Reuniões da Próxima Semana
        </div>
        <div class="card-body">
          <?php	
            foreach($registros2 as $registro){
              $dataFormatada = date("d/m/Y", strtotime($registro['dataHorario']));
              echo '<p class="card-text"><span class="text-muted">['.$registro['responsavel'].']</span> '.$dataFormatada.' - '.$registro['descricao'].'</p>';
            }
          ?>
        </div>
      </div>
    </div>
    <?php include_once 'geral/js.php'; ?>
  </body>
</html>
