<nav class="navbar navbar-expand-lg navbar-light bg-light ml-1 mr-1">
    <a class="navbar-brand text-dark" href="index.php">Projeto PI</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link text-dark" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
        </ul>

        <div class="col-sm-12 col-md-6 col-lg-6 text-right">
            <button type="button" class="btn btn-success my-2 my-sm-0 mr-3" data-toggle="modal" data-target="#myModal" id="cadastrar">Cadastrar</button>
            <!-- The Modal -->
            <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Cadastro</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <!-- Modal body -->
                        <div class="modal-body">
                            <form action="actions.php" method="POST" class="was-validated">
                                <input type="hidden" name="acao" value="cadastrar">
                                <div class="form-group text-left">
                                    <label for="nome">Nome:</label>
                                    <input type="text" class="form-control" id="nome" placeholder="Nome do usuário" name="nome" required>
                                </div>
                                <div class="form-group text-left">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" id="email" placeholder="Email do usuário" name="email" required>
                                </div>
                                <div class="form-group text-left">
                                    <label for="senha">Senha:</label>
                                    <input type="password" class="form-control" id="senha" placeholder="***********" name="senha" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                            </form>
                        </div>
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button class="btn btn-primary my-2 my-sm-0" type="button" id="login">
            Login
        </button>

    </div>

</nav>