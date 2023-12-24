<? include_once "geral/acesso.php";
    if($dadosUsuario['cargo'] != 1 && $dadosUsuario['cargo'] != 4){
        echo "<script>alert('Acesso Negado');location.href='inicial.php';</script>";
    }
?>
<?php
    include_once "repo/noticiasCRUD.php";
    $registro = buscarPorId($_GET['codigo']);
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
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h4 class="h4">Notícias</h4>
      </div>
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Editar</a>
        </li>
      </ul>
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
          <form id="formularioUsuario" class="mt-2" action="control/noticiaEditar.php" method="POST">
            <div class="form-row">
            <input type="text" id="codigo" name="codigo" class="form-control d-none" value="<? echo $registro['codigo'] ?>" required>
              <div class="form-group col-md-12">
                <label for="titulo" id="contador">Título da Notícia (Caracteres restantes: 60)</label>
                <input type="text" id="titulo" name="titulo" class="form-control" placeholder="Título" maxlength="60" value="<? echo $registro['titulo'] ?>" required>
              </div>
              <div class="form-group col-md-12">
                <label for="subtitulo" id="sub">Subtítulo da Notícia (Caracteres restantes: 40)</label>
                <input type="text" id="subtitulo" name="subtitulo" class="form-control" placeholder="Subtítulo" maxlength="40" value="<? echo $registro['subtitulo'] ?>" required>
              </div>
              <div class="form-group col-md-12">
                <label for="noticia">Texto</label>
                <textarea id="noticia" name="noticia"><? echo $registro['texto'] ?></textarea>
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
              <button type="submit" class="btn btn-primary mb-3">Editar</button>
            </div>
          </form>
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
