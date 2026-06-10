<?php
require_once("back/_sessionChecker.php");
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



    <title>Aluno Page</title>
</head>

<body>
    <header>
        <header class="d-flex row p-1">
            <div class="col-12">
                <nav class="navbar">
                    <img src="assets/header-logo3c.png"
                        alt="Logo da Prefeitura do Municipio de São Sebastião, um peixe nas cores verde e vermelho com o brasão da cidade ao lado"
                        class="img-mid m-1 ">
                    <img src="assets/userIcon.jpg" alt="Foto do Usuario" class="rounded-circle img-small">

                    <button type="button" class="btn btn-primary m-4" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
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
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
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
    </header>
    <main>
        <h1>em breve</h1>
    </main>
    <footer class="d-flex row p-1">
        <small>Feito por <a href="#">Rosemarry</a></small>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>