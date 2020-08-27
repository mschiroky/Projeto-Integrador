<?php
session_start();


if ($_POST['acao'] == 'logout') {
    session_destroy();
    header("Location: login.php");
}

require_once("conexao.php");
if (!empty($_POST['email']) && !empty(hash('sha256', $_POST['senha']))) {
   switch ($_POST['acao']) {
        case 'cadastrar':
            $query = $conn->prepare("INSERT INTO login (email, senha) VALUES (?, ?)");
            $parametros = array($_POST['email'], hash('sha256', $_POST['senha']));
            $query->execute($parametros);
            $id_usuario = $conn->lastInsertId();
            $query1 = $conn->prepare("INSERT INTO cadastro (nome, id_usuario) VALUES (?, ?)");
            $parametros = array($_POST['nome'], $id_usuario);
            $query1->execute($parametros);
            $conn = null;
            if ($query->rowCount() > 0 && $query1->rowCount() > 0) {
                header("Location: index.php?cadastrar=sucesso");
            } else {
                header("Location: index.php?cadastrar=erro");
            }
            break;
        case 'login':
            $query = $conn->prepare("SELECT * FROM login WHERE email = ? AND senha =?");
            $parametros = array($_POST['email'], hash('sha256', $_POST['senha']));
            $query->execute($parametros);
            $conn = null;
            if ($query->rowCount() > 0) {
                $_SESSION['logado'] = true;
                $resposta = $query->fetchAll(PDO::FETCH_OBJ);
                $_SESSION['id_usuario'] = $resposta[0]->id_usuario;
                $_SESSION['email'] = $resposta[0]->email;
                $_SESSION['senha'] = $resposta[0]->senha;
                header("Location: logado.php?login=sucesso");
            } else {
                header("Location: login.php?login=erro");
            }
            break;

        case 'editar':
            $query = $conn->prepare("UPDATE login SET email = ?, senha = ? WHERE id_usuario = ?");
            $parametros = array($_POST['email'], hash('sha256', $_POST['senha']), $_POST['id_usuario']);
            $query->execute($parametros);
            $conn = null;
            if ($query->rowCount() > 0) {
                header("Location: logado.php?editar=sucesso");
            } else {
                header("Location: editar.php?editar=erro");
            }
            break;

        case 'contato':
            if (empty($_POST['comentario'])) {
                $query = $conn->prepare("INSERT INTO contato (nome, email, duvida) VALUES (?, ?, ?)");
                $parametros = array($_POST['nome'], $_POST['email'], $_POST['duvida']);
            } else {
                $query = $conn->prepare("INSERT INTO contato (nome, email, duvida, comentario) VALUES (?, ?, ?, ?)");
                $parametros = array($_POST['nome'], $_POST['email'], $_POST['duvida'], $_POST['comentario']);
            }
            $query->execute($parametros);
            $conn = null;
            if ($query->rowCount() > 0) {
                header("Location: logado.php?duvida=sucesso");
            } else {
                header("Location: logado.php?duvida=erro");
            }
            break;
        default:
            header("Location:index.php");
    };
};
