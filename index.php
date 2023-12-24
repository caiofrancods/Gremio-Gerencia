<!DOCTYPE html>
<html>

<head>
  <?php include_once "geral/head.php" ?>
  <title>Login</title>
</head>

<body>
  <div class="cont">
    <div class="cabecalho d-flex justify-content-center align-items-center">
      <a href="#"><img class="img-fluid logoLogin" src="imagens/logo.jpeg" alt="logo do grêmio"></a>
    </div>
    <div class="corpo">
        <? if(isset($_GET['acesso'])){
            if($_GET['acesso'] == 1){
                echo '<div class="alert alert-success text-center" role="alert">
                    Faça login para acessar o sistema
                </div>';
            }
        }
        ?>
        
      <form class="form-signin" class="corpo" id="formularioLogin" action="control/usuarioAutenticar.php" method="POST" >
        <h5 class="h3 mb-2 font-weight-normal text-center mt-4">Faça login</h5>
        <h6 class="h6 mb-3 font-weight-normal text-center mt-4 text-muted font-italic">Sistema de Gerenciamento do Grêmio Estudantil</h6>
        <hr/>
        <div class="form-row">
          <div class="form-group col-md-12">
              <label for="email">Email</label>
              <input type="text" id="email" name="email" class="form-control" placeholder="Seu e-mail" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
              <label for="senha">Senha</label>
              <input type="password" id="senha" name="senha" class="form-control" placeholder="Sua senha" required>
          </div>
        </div>
        <button class="btn btn-lg btn-primary mt-4 float-right" type="submit">Login</button>
      </form>
    </div>
  </div>
  <?php include_once 'geral/js.php'; ?>
  
</body>

</html>
