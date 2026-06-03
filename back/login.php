<?php
require_once("back/banco.php");

$login_falhou = false;
$errorString = "d-none";

if (isset($_POST['login'])) {
    $nome = $_POST['name'];
    $senha = base64_encode(trim($_POST['senha']));

    $query = "SELECT * FROM user WHERE USUARIO = '$nome' AND SENHA = '$senha'";
    $puxa = $mysqli->query($query);

    $query1 = "SELECT * FROM alunos WHERE NOME = '$nome' AND SENHA = '$senha'";
    $puxa1 = $mysqli->query($query1);

    if ($puxa->num_rows == 1) {
        setcookie("Logado", "Sim", time() + 120);
        session_start();

        $_SESSION['nome'] = $nome;
        $_SESSION['senha'] = $senha;


        $mostra = $puxa->fetch_object();
        $_SESSION['adm'] = $mostra->ADM;

        if ($mostra->ADM) {
            header("location:index.php");
        } else {
            header("location:paginaAluno.php");
        }

    } else if ($puxa1->num_rows == 1) {
        setcookie("Logado", "Sim", time() + 120);
        session_start();

        $_SESSION['nome'] = $nome;
        $_SESSION['senha'] = $senha;


        $mostra = $puxa->fetch_object();
        $_SESSION['adm'] = $mostra->ADM;

        if ($mostra->ADM) {
            header("location:index.php");
        } else {
            header("location:paginaAluno.php");
        }

    } else {
        $login_falhou = true;
        $errorString = "d-block";
    }
}