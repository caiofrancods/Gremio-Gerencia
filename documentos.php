
<!doctype html>
<html>
  <head>
    <? include_once "geral/head.php" ?>
    <title>Documentos</title>
  </head>

  <body>
        <?php include_once 'geral/cabecalho.php'; ?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 mt-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h4 class="h4">Documentos</h4>
            </div>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Todos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#perfil" role="tab" aria-controls="profile" aria-selected="false">Assinados</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pendentes-tab" data-toggle="tab" href="#pendentes" role="tab" aria-controls="pendentes" aria-selected="false">Pendentes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="criar-tab" data-toggle="tab" href="#criar" role="tab" aria-controls="criar" aria-selected="false">Criar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="cadastrar-tab" data-toggle="tab" href="#cadastrar" role="tab" aria-controls="cadastrar" aria-selected="false">Cadastrar</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="table-responsive mt-2">
                        <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                            <th>#</th>
                            <th>Cabeçalho</th>
                            <th>Cabeçalho</th>
                            <th>Cabeçalho</th>
                            <th>Cabeçalho</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="perfil" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="table-responsive mt-2">
                        <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                            <th>#</th>
                            <th>Cabeçalho</th>
                            <th>Cabeçalho</th>
                            <th>Cabeçalho</th>
                            <th>Cabeçalho</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="pendentes" role="tabpanel" aria-labelledby="pendentes-tab">
                    <div class="table-responsive mt-2">
                        <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                            <th>#</th>
                            <th>Cabeçalho</th>
                            <th>Cabeçalho</th>
                            <th>Cabeçalho</th>
                            <th>Cabeçalho</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="criar" role="tabpanel" aria-labelledby="criar-tab">
                    <form id="#formularioUsuario" class="mt-2" action="../../controle/usuarioSalvar.php" method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nome">Signatários</label>
                                <input type="text" id="nome" name="nome" class="form-control" placeholder="John" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="curso">Tipo de Documento</label>
                                <select id="curso" class="form-control" name="curso" required>
                                    <option selected hidden value=''>Escolha...</option>
                                    <option value="1">Ata Reunião</option>                                   
                                    <option value="2">Decreto</option>
                                    <option value="3">Movimentação Financeira</option>
                                    <option value="4">Ofício</option>
                                    <option value="5">Prestação de Contas</option>          
                                    <option value="6">Portaria</option>                                 
                                    <option value="7">Requerimento</option>
                                    <option value="8">Outros</option>

                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="dataNascimento">Upload do arquivo</label>
                                <input type="file" class="form-control" id="dataNascimento" name="dataNascimento" placeholder="123@abc" required>
                            </div>
                        </div>
                        <div class="form-row d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Submeter</button>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="cadastrar" role="tabpanel" aria-labelledby="cadastrar-tab">
                    <form id="#formularioUsuario" class="mt-2" action="../../controle/usuarioSalvar.php" method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="nome">Nome Completo</label>
                                <input type="text" id="nome" name="nome" class="form-control" placeholder="John" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="nome">E-mail</label>
                                <input type="email" id="nome" name="nome" class="form-control" placeholder="John" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="curso">Cargo</label>
                                <select id="curso" class="form-control" name="curso" required>
                                    <option selected hidden value=''>Escolha...</option>
                                    <option value="1">Conselheiro</option>                                   
                                    <option value="2">Sócio</option>
                                    <option value="3">Outros</option>

                                </select>
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
