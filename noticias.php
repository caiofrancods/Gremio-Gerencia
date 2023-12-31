<? include_once "geral/acesso.php";
    if($dadosUsuario['cargo'] != 1 && $dadosUsuario['cargo'] != 4){
        echo "<script>alert('Acesso Negado');location.href='inicial.php';</script>";
    }
?>
<?php
    include_once "repo/noticiasCRUD.php";
    $registros = listar();
    $imagens = listarImagens();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include_once "geral/head.php"; ?>
    <title>Notícias</title>
    <script src="js/tinymce/js/tinymce/tinymce.min.js"></script>
  </head>

  <body>
    <?php include_once 'geral/cabecalho.php'; ?>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 mt-4">
      <?php include_once "geral/alertas.php";?>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h4 class="h4">Notícias</h4>
      </div>
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Postadas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="criar-tab" data-toggle="tab" href="#criar" role="tab" aria-controls="criar" aria-selected="false">Postar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="img-tab" data-toggle="tab" href="#img" role="tab" aria-controls="img" aria-selected="false">Subir Imagem</a>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
          <div class="row mt-4">
            <?php	
                foreach($registros as $registro){
                    echo '<div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                              <div class="card-body">
                                <h5 class="card-title">'.$registro['titulo'].'</h5>
                                <p class="card-text text-muted">'.$registro['subtitulo'].'</p>
                                <div class="d-flex justify-content-between align-items-center">
                                  <div class="btn-group">
                                    <a href="editarNoticia.php?codigo='.$registro['codigo'].'" class="btn btn-sm btn-outline-secondary">Editar</a>
                                    <a href="control/noticiaExcluir.php?codigo='.$registro['codigo'].'" class="btn btn-sm btn-outline-secondary">Excluir</a>
                                  </div>
                                  <small class="text-muted">'.$registro['dataHorario'].'</small>
                                </div>
                              </div>
                            </div>
                          </div>';
                } 
            ?>
          </div>
        </div>
        <div class="tab-pane fade" id="criar" role="tabpanel" aria-labelledby="criar-tab">
          <form id="formularioUsuario" class="mt-2" action="control/noticiaSalvar.php" method="POST">
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="titulo" id="contador">Título da Notícia (Caracteres restantes: 60)</label>
                <input type="text" id="titulo" name="titulo" class="form-control" placeholder="Título" maxlength="60" required>
              </div>
              <div class="form-group col-md-12">
                <label for="subtitulo" id="sub">Subtítulo da Notícia (Caracteres restantes: 40)</label>
                <input type="text" id="subtitulo" name="subtitulo" class="form-control" placeholder="Subtítulo" maxlength="40" required>
              </div>
              <div class="form-group col-md-12">
                <label for="noticia">Texto</label>
                <textarea id="noticia" name="noticia"></textarea>
              </div>
              <div class="form-group col-md-12">
                <p class="text-muted">Para adicionar um link: <? echo htmlentities('<a href="https://linkexemplo">Texto que você quer que apareça<a>'); ?></p>
                <p class="text-muted">Para adicionar uma imagem: <? echo htmlentities('<figure class="figure">
                            <img src="imagens/nomedaimagem.png" class="figure-img img-fluid rounded" alt="Imagem Notícia">
                            <figcaption class="figure-caption text-center">Legenda Aqui</figcaption>
                        </figure>'); ?></p>
              </div>
            </div>
            <div class="form-row d-flex justify-content-end">
              <button type="submit" class="btn btn-primary">Publicar</button>
            </div>
          </form>
        </div>
        <div class="tab-pane fade" id="img" role="tabpanel" aria-labelledby="img-tab">
          <form id="formularioUsuario" class="mt-2" action="control/imagemSalvar.php" method="POST" enctype="multipart/form-data">  
            <div class="form-group col-md-6">
                <label for="imagem">Upload do arquivo</label>
                <input type="file" class="form-control" id="imagem" name="imagem" accept=".jpg, .jpeg, .png" required>
            </div>
            <div class="form-row d-flex justify-content-end">
              <button type="submit" class="btn btn-primary">Subir</button>
            </div>
          </form>
          <div class="table-responsive mt-2">
                        <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                            <th>Nome do Arquivo</th>
                            <th>Caminho</th>                           
                            </tr>
                        </thead>
                        <tbody>
                        <?php	
                            foreach($imagens as $imagem){
                            echo "<tr>";
                            echo "<td>{$imagem['nome']} </td>";
                            echo "<td>{$imagem['caminho']} </td>";
                            echo "</tr>";
                            } 
                        ?>
                        </tbody>
                        </table>
                    </div>
        </div>
      </div>
    </main>
    <script>
      tinymce.init({
            selector: 'textarea#noticia',
            height: 500,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount'
            ],
            toolbar: 'undo redo | formatselect | ' +
                'bold italic | alignleft aligncenter alignright alignjustify | ' +
                'bullist numlist outdent indent | removeformat | help | image'
        });
    </script>
    <?php include_once 'geral/js.php'; ?>
    <script src="js/texto.js"></script>
  </body>
</html>
