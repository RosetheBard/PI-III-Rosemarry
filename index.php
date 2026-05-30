<?php
require_once("back/_sessionChecker.php");
$is_ADM = $_SESSION['adm'];
if ($is_ADM == false) {
    header("location: paginaAluno.php");
}

$nome = $_SESSION['nome'];
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



    <title>Home Page</title>
</head>

<body class="container-fluid">
    <header class="d-flex row p-1">
        <div class="col-12">
            <nav class="navbar">
                <img src="assets/header-logo3c.png"
                    alt="Logo da Prefeitura do Municipio de São Sebastião, um peixe nas cores verde e vermelho com o brasão da cidade ao lado"
                    class="img-mid m-1 ">

                <h1>Olá <?php echo $nome; ?></h1>

                <img src="assets/userIcon.jpg" alt="Foto do Usuario" class="rounded-circle img-small">

                <button type="button" class="btn btn-primary m-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Sair
                </button>
            </nav>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Logout Message</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Certeza que você quer sair</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                            <a class="btn btn-secundary" href="logout.php">Confirmar</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </header>
    <main class="d-flex row justify-content-center corpo">
        <div class="col-2 lateral">

        </div>

        <!-- Grid do Centro -->
        <div class="col-2 ">
            <div class="card text-center m-4 " style="width: 13rem;">
                <div class="card-header">
                    <h5>Add Aluno</h5>
                </div>
                <div class="card-body">
                    <p class="card-text fs-4">Cadastrar um novo aluno</p>
                    <a href="cadastroAluno.php" class="btn btn-primary">Clique Aqui</a>
                </div>
            </div>

            <div class="card text-center m-4 " style="width: 13rem;">
                <div class="card-header">
                    <h5>...</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">...</p>
                </div>
            </div>
        </div>
        <div class="col-2">
            <div class="card text-center m-4 " style="width: 13rem;">
                <div class="card-header">
                    <h5>Lista de Alunos</h5>
                </div>
                <div class="card-body">
                    <p class="card-text fs-4">Ver alunos cadastrados</p>
                    <a href="" class="btn btn-primary">Clique Aqui</a>
                </div>
            </div>

            <div class="card text-center m-4 " style="width: 13rem;">
                <div class="card-header">
                    <h5>...</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">...</p>
                </div>
            </div>
        </div>
        <div class="col-2">
            <div class="card text-center m-4 " style="width: 13rem;">
                <div class="card-header">
                    <h5>...</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">...</p>
                </div>
            </div>
        </div>
        <div class="col-2">
            <div class="card text-center m-4 " style="width: 13rem;">
                <div class="card-header">
                    <h5>...</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">...</p>
                </div>
            </div>
        </div>
         <!-- ======================== -->

        <div class="col-2 lateral">

        </div>
    </main>
    <footer class="d-flex row p-1">
        <small>Feito por Rosemarry</small>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>