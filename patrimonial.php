<?php
    include_once "repo/patrimonioCRUD.php";
    $registros3 = listarAcervo();
?>
<!doctype html>
<html>
  <head>
    <? include_once "geral/head.php" ?>
    <title>Patrimonial</title>
  </head>

  <body>
        <?php include_once 'geral/cabecalho.php'; ?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 mt-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h4 class="h4">Patrimonial</h4>
            </div>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Bens</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="criar-tab" data-toggle="tab" href="#criar" role="tab" aria-controls="criar" aria-selected="false">Lançar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="relatorios-tab" data-toggle="tab" href="#relatorios" role="tab" aria-controls="relatorios" aria-selected="false">Relatórios</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="table-responsive mt-2">
                        <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                            <th>Descricao</th>
                            <th>Código</th>
                            <th>Documento</th>
                            <th>Situação</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php	
                            foreach($registros3 as $registro){
                            echo "<tr>";
                            echo "<td>{$registro['descricao']} </td>";
                            echo "<td>{$registro['codigo']} </td>";
                            echo "<td><a href=".$registro['codDocumento']." target='_blank'>Link</a></td>";
                            $sit = $registro['situacao'];
                            if($sit == 1){
                                echo "<td>Ativo</td>";
                            }else{
                                echo "<td>Retirado (Baixa)</td>";
                            }
                            
                            echo "</tr>";
                            } 
                        ?>
                        </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="pendentes" role="tabpanel" aria-labelledby="pendentes-tab">
                    
                </div>
                <div class="tab-pane fade" id="criar" role="tabpanel" aria-labelledby="criar-tab">
                    <form id="#formularioPatrimonio" class="mt-2" action="control/patrimonioSalvar.php" method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="tipo">Tipo de Lançamento</label>
                                <select id="tipo" class="form-control" name="tipo" onchange="formularioBens()" required>
                                    <option selected hidden value=''>Escolha...</option>
                                    <option value="1">Aquisição</option>
                                    <option value="2">Retirada</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="codItem">Código do Item</label>
                                <input type="text" id="codItem" name="codItem" class="form-control" placeholder="" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="cod">Link do Documento</label>
                                <input type="text" id="cod" name="cod" class="form-control" placeholder="" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="desc" id="desc">Descrição</label>
                                <label for="desc" id="just">Justificativa (Resumo)</label>
                                <input type="text" id="desc" name="desc" class="form-control" placeholder="" required>
                            </div>
                        </div>
                        <div class="form-row d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Lançar</button>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="relatorios" role="tabpanel" aria-labelledby="relatorios-tab"></div>
            </div>
        <main>
        </div>
        </div>

        <?php include_once 'geral/js.php'; ?>
  </body>
</html>
