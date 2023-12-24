<? include_once "geral/acesso.php";
    if($dadosUsuario['cargo'] != 1 && $dadosUsuario['cargo'] != 5){
        echo "<script>alert('Acesso Negado');location.href='inicial.php';</script>";
    }
?>
<!doctype html>
<html>
  <head>
    <? include_once "geral/head.php" ?>
    <title>Documentos</title>
  </head>

  <body>
        <?php include_once 'geral/cabecalho.php'; ?>
        <h6 class="mt-4 ml-4">Em construção...</h6>
        <?php include_once 'geral/js.php'; ?>
  </body>
</html>
