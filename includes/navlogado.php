<nav class="navbar navbar-expand-lg navbar-light bg-light ml-1 mr-1">
    <a class="navbar-brand text-dark" href="index.php">Projeto PI</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link text-dark" href="logado.php">Home <span class="sr-only">(current)</span></a>
            </li>

            <div class="col-sm-12 col-md-6 col-lg-6">
                <button type="button" class="btn btn-light" data-toggle="modal" data-target="#myModal" id="contato">Contato</button>
                <!-- The Modal -->
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Contato</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <!-- Modal body -->
                            <div class="modal-body">
                                <form action="actions.php" method="POST" class="was-validated">
                                    <input type="hidden" name="acao" value="contato">
                                    <div class="form-group text-left">
                                        <label for="nome">Nome:</label>
                                        <input type="text" class="form-control" id="nome" name="nome" required>
                                    </div>
                                    <div class="form-group text-left">
                                        <label for="email">Email:</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                    <div class="form-group text-left">
                                        <label for="administrador">Duvida:</label>
                                        <select id="administrador" name="duvida" class="form-control" required>
                                            <option value="D1">Duvida 1</option>
                                            <option value="D2">Duvida 2</option>
                                            <option value="D3">Duvida 3</option>
                                            <option value="D4">Duvida 4</option>
                                            <option value="D5">Duvida 5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Digite seu Comentario</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="comentario" rows="3"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Enviar</button>
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


        </ul>
        <button class="btn btn-primary my-2 my-sm-0 ml-1 mr-1 " type="button" id="editar">
            Editar Dados
        </button>
        <form action="actions.php" method="POST">
            <input type="hidden" name="acao" value="logout">
            <button type="submit" class="btn btn-danger">Sair<i class="fa fa-sign-out"></i></button>
        </form>


    </div>

</nav>