<? include_once "geral/acesso.php";?>
<?php
    include_once "repo/armariosList.php";
    $registros = listarArmarios();
?>
<!doctype html>
<html>
  <head>
    <? include_once "geral/head.php" ?>
    <title>Armários</title>
  </head>

  <body>
        <?php include_once 'geral/cabecalho.php'; ?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 mt-4">
            <?php include_once "geral/alertas.php";?>
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h4 class="h4">Armários Registrados</h4>
            </div>
            <table id="tabela" class="table table-striped">
            <thead class="thead-dark">
              <tr>
                  <th>Código do Armário</th>
                  <th>Atual Dono</th>
                  <th>Curso</th>
                  <th>Ano</th>
                  <th>Data de Nascimento</th>
                  <th>Telefone</th>
              </tr>
            </thead>
            <tbody>
            <?php	
                foreach($registros as $registro){
                  echo "<tr>";
                  echo "<td>{$registro['codigo']} </td>";
                  echo "<td>{$registro['nome']} </td>";
                  echo "<td>{$registro['descricao']} </td>";
                  echo "<td>{$registro['ano']} </td>";
                  $dataFormatada = date("d/m/Y", strtotime($registro['dataNascimento']));
                  echo "<td>{$dataFormatada} </td>";	
                  echo "<td>{$registro['telefone']} </td>";
                  echo "</tr>";
                } 
              ?>
            </tbody>
	        </table>
            
        
        <main>
        </div>
        </div>

        <?php include_once 'geral/js.php'; ?>
  </body>
</html>