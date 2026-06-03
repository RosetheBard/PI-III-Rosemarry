<?php
require_once("back/banco.php");

if (isset($_POST['enviar'])) {
    $nome = $_POST['name'];
    $cpf = $_POST['cpf'];
    $situ = $_POST['matricula'];
    $curso = $_POST['curso'];
    $senha = base64_encode(trim($_POST['senha']));


    $insere = "INSERT INTO alunos (NOME, CPF, SITUAÇÃO, CURSO, SENHA) 
VALUES ('$nome', '$cpf', '$situ', '$curso', '$senha');" ;

    if($mysqli->query($insere)){
            header('location: index.php');
            exit;
        }else{
            echo "deu certo não pai";
        }
}