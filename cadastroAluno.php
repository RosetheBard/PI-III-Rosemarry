<?php
require_once("back/registro.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="CIP">
    <!-- linkando com as folhas de estilo -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">


    <title>Registro</title>
</head>

<body class="container-fluid">
    <header class="d-flex row">
        <div class="col-12">
            <img src="assets/header-logo3c.png" alt="..." class="img-mid">

            <a href="index.php" class="btn btn-primary float-r m-3">Voltar</a>
        </div>
    </header>
    <main class="d-flex row corpo align-content-center">
        <div class="col-3"></div>
        <div class="col-6">

            <div class="bg-body border border-4 border-info-subtle rounded-5 p-3 ">

                <form action="" method="post">
                    <h1 class="text-center">Cadastrar Alunos</h1>
                    <div class="form-floating mb-3 m-5">
                        <input required type="text" class="form-control rounded-4 shadow" id="name" name="name">
                        <label for="name">Nome do Aluno</label>
                    </div>

                    <div class="form-floating mb-3 m-5">
                        <input required type="text" class="form-control rounded-4 shadow" id="cpf" name="cpf">
                        <label for="cpf">CPF</label>
                    </div>

                    <div class="form-floating m-5">
                        <input type="checkbox" name="matricula" id="matricula">
                        <label for="matricula">Matricular?</label>
                    </div>

                    <div class="form-floating mb-3 m-5">
                        <input required type="text" class="form-control rounded-4 shadow" id="curso" name="curso">
                        <label for="curso">Curso</label>
                    </div>

                    <div class="form-floating m-5">
                        <input required type="password" class="form-control rounded-4 shadow" id="Password"
                            name="senha">
                        <label for="Password">Senha</label>
                    </div>

                    <div class="m-4 text-center">
                        <button class="btn btn-primary btn-lg rounded-4 shadow" type="submit" value="enviar"
                            name="enviar">Enviar</button>
                    </div>

                </form>


            </div>

        </div>
        <div class="col-3"></div>
    </main>
    <footer class="d-flex row">
        <div class="col-12 p-5">

        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>